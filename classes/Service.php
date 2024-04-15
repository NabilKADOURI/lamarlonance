<?php
require_once __DIR__ . '/../classes/Db.php';


class Service
{

  public static function getServiceAll()
  {

    $pdo = Db::getConnection();

    $sql = 'SELECT * FROM services';

    $stmt = $pdo->query($sql);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function getService(int $id)
  {

    $pdo = Db::getConnection();

    $sql = 'SELECT * FROM services WHERE id_services = :id';


    $stmt = $pdo->prepare($sql);

    $stmt->execute(['id' => $id]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public static function getDeleteService(int $id)
  {

    $pdo = Db::getConnection();

    $service = Service:: getService($id);

    unlink('uploads/' . $service['picture_services']);

    $sql = 'DELETE FROM services WHERE id_services = :id';

    $stmt = $pdo->prepare($sql);

    $stmt->execute(['id' => $id]);
  }

  public static function getInsertService(string $filename)
  {

    $pdo = Db::getConnection();

    $sql = 'INSERT INTO services (`title_services`,description_services,`picture_services`) VALUES (:titre,:description,:image)';

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
      'titre' => $_POST['title'],
      'description' => $_POST['description'],
      'image' => $filename
    ]);
  }

}
