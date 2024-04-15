<?php

require_once __DIR__ . '/Db.php';

class Login {

    public static function getLogin (string $userAdmin){

        $pdo = Db::getConnection();

        $stmt = $pdo->prepare ('SELECT * FROM admin WHERE userName_admin = :userName');

        $stmt->execute(
                [
                    'userName' => $userAdmin,
                ]
            );

        return $stmt->fetch(PDO::FETCH_ASSOC);
        
    }

    
}