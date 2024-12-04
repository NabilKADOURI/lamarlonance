<?php

require_once __DIR__ . '/TextUtils.php';

class FileUpload
{
    private const MAX_FILE_SIZE = 5 * 1024 * 1024; // 5 Mo en octets
    private const ALLOWED_EXTENSIONS = ['jpg', 'jpeg', 'png', 'gif']; // Extensions autorisées

    /**
     * Constructeur de la classe FileUpload.
     *
     * @param array $file Informations du fichier depuis $_FILES
     * @param string $destination Chemin vers le dossier de destination
     */
    public function __construct(
        private array $file,          // Informations du fichier
        private string $destination   // Chemin vers le dossier d'upload
    ) {
        // Contrôles supplémentaires peuvent être ajoutés ici
        $this->validateFile();
    }

    /**
     * Valide le fichier selon les critères spécifiés.
     *
     * @throws RuntimeException Si le fichier est invalide
     */
    private function validateFile(): void
    {
        // Vérification des erreurs de fichier
        if ($this->file['error'] !== UPLOAD_ERR_OK) {
            throw new RuntimeException("Erreur lors de l'envoi du fichier.");
        }

        // Vérification de la taille du fichier
        if ($this->file['size'] > self::MAX_FILE_SIZE) {
            throw new RuntimeException("Le fichier est trop volumineux. Taille maximale autorisée : " . (self::MAX_FILE_SIZE / 1024 / 1024) . " Mo.");
        }

        // Vérification de l'extension du fichier
        $pathInfo = pathinfo($this->file['name']);
        $fileExt = strtolower($pathInfo['extension']);

        if (!in_array($fileExt, self::ALLOWED_EXTENSIONS)) {
            throw new RuntimeException("Type de fichier non autorisé. Extensions autorisées : " . implode(', ', self::ALLOWED_EXTENSIONS));
        }
    }

    /**
     * Gère l'upload du fichier et le déplace vers le dossier de destination.
     *
     * @return string Le nom du fichier uploadé
     * @throws RuntimeException Si le déplacement du fichier échoue
     */
    public function upload(): string
    {
        // Extraire le nom de base et l'extension du fichier
        $pathInfo = pathinfo($this->file['name']);
        $uploadFilename = $pathInfo['filename'];
        $uploadFileExt = $pathInfo['extension'];

        // Créer un nom de fichier unique
        $filename = $uploadFilename . '_' . 
                    TextUtils::randomString(25) . 
                    '.' . $uploadFileExt;

        // Chemin absolu vers le fichier de destination
        $finalDestinationAbsolutePath = $this->destination . '/' . $filename;

        // Déplacer le fichier vers le dossier de destination
        if (!move_uploaded_file(
            $this->file['tmp_name'],          // Fichier temporaire
            $finalDestinationAbsolutePath    // Destination finale
        )) {
            throw new RuntimeException("Impossible d'uploader le fichier");
        }

        return $filename;
    }
}
