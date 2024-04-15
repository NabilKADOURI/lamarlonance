<?php
require_once __DIR__ . '/../classes/Db.php';


class Contacts {

    public static function getMessages() {

        $pdo = Db::getConnection();
    
        $sql = 'SELECT * FROM contact';
    
        $stmt = $pdo->query($sql);
       
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }
      
      public static function getMessage(int $id){

        $pdo =Db::getConnection();
    
        $sql = 'SELECT * FROM contact WHERE id_contact = :id';
        
    
        $stmt = $pdo->prepare($sql);
    
        $stmt->execute(['id'=> $id]);
    
        return $stmt->fetch(PDO::FETCH_ASSOC);
      }

      public static function getDeleteMessage(int $id){

          $pdo =Db::getConnection();
      
          $sql = 'DELETE FROM contact WHERE id_contact = :id';
      
          $stmt = $pdo->prepare($sql);
      
          $stmt->execute(['id' => $id]);
        }



}