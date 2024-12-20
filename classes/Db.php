<?php

class Db
{
    /**
     * Retourne une connexion PDO configurée pour interagir avec la base de données.
     * @return PDO Instance de la connexion PDO.
     * @throws Exception Si la connexion échoue ou si le fichier de configuration est introuvable.
     */
    public static function getConnection(): PDO
    {
        try {
            // Chemin vers le fichier de configuration
            $configFile = __DIR__ . '/../config/db.ini';

            // Vérification de l'existence du fichier
            if (!file_exists($configFile)) {
                throw new Exception("Fichier de configuration de la base de données introuvable.");
            }

            // Lecture du fichier de configuration
            $config = parse_ini_file($configFile);
            if (!$config) {
                throw new Exception("Erreur lors de la lecture du fichier de configuration.");
            }

            // Extraction des paramètres
            $host = $config['DB_HOST'] ?? 'localhost';
            $port = $config['DB_PORT'] ?? '3306';
            $dbName = $config['DB_NAME'] ?? '';
            $charset = $config['DB_CHARSET'] ?? 'utf8mb4';
            $dbUser = $config['DB_USER'] ?? '';
            $dbPassword = $config['DB_PASSWORD'] ?? '';

            // Validation des paramètres critiques
            if (empty($dbName) || empty($dbUser)) {
                throw new Exception("Paramètres de base de données invalides dans le fichier de configuration.");
            }

            // Construction du DSN
            $dsn = "mysql:host=$host;port=$port;dbname=$dbName;charset=$charset";

            // Création de la connexion PDO avec options sécurisées
            $pdo = new PDO(
                $dsn,
                $dbUser,
                $dbPassword,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Activer les exceptions pour les erreurs SQL
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Mode de récupération par défaut
                    PDO::ATTR_PERSISTENT => true, // Connexions persistantes pour améliorer les performances
                ]
            );

            return $pdo;

        } catch (PDOException $e) {
            // Journalisation des erreurs PDO
            error_log("Erreur PDO : " . $e->getMessage());
            throw new Exception("Impossible de se connecter à la base de données. Vérifiez les paramètres.");
        } catch (Exception $e) {
            // Journalisation des erreurs générales
            error_log("Erreur : " . $e->getMessage());
            throw $e;
        }
    }
}
