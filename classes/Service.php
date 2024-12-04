<?php

require_once __DIR__ . '/../classes/Db.php';

class Service
{
    /**
     * Récupère tous les services.
     *
     * @return array Liste de tous les services
     */
    public static function getServiceAll(): array
    {
        $pdo = Db::getConnection();

        $sql = 'SELECT * FROM services';

        $stmt = $pdo->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Récupère un service spécifique par ID.
     *
     * @param int $id L'ID du service à récupérer
     * @return array Les détails du service
     */
    public static function getService(int $id): array
    {
        $pdo = Db::getConnection();

        $sql = 'SELECT * FROM services WHERE id_services = :id';

        $stmt = $pdo->prepare($sql);

        $stmt->execute(['id' => $id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Supprime un service spécifique par ID.
     * Supprime également l'image associée au service.
     *
     * @param int $id L'ID du service à supprimer
     */
    public static function getDeleteService(int $id): void
    {
        $pdo = Db::getConnection();

        $service = self::getService($id);

        if ($service && !empty($service['picture_services'])) {
            // Supprimer le fichier image associé au service
            unlink(__DIR__ . '/../uploads/' . $service['picture_services']);
        }

        $sql = 'DELETE FROM services WHERE id_services = :id';

        $stmt = $pdo->prepare($sql);

        $stmt->execute(['id' => $id]);
    }

    /**
     * Insère un nouveau service dans la base de données.
     *
     * @param string $filename Le nom du fichier image à associer au service
     */
    public static function getInsertService(string $filename): void
    {
        $pdo = Db::getConnection();

        $sql = 'INSERT INTO services (title_services, description_services, picture_services) VALUES (:titre, :description, :image)';

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            'titre' => $_POST['title'],
            'description' => $_POST['description'],
            'image' => $filename
        ]);
    }
}
