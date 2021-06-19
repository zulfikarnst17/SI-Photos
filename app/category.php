<?php

 class category {

 private $db;

 public function __construct()
 {
 try {

 $this->db =
 new PDO("mysql:host=localhost;dbname=dbweb4", "root", "");

 } catch (PDOException $e) {
 die ("Error " . $e->getMessage());
 }
 }

public function tampil()
{
$sql = "SELECT * FROM id";
$stmt = $this->db->prepare($sql);
$stmt->execute();

$data = [];
while ($rows = $stmt->fetch()) {
$data[] = $rows;
}

 return $data;
 }

public function input()
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $text = $_POST['text'];

    $sql = " INSERT INTO category VALUES ( :id, :name, :text)";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":text", $name);
    $stmt->execute();
    
}
public function edit($id)
{
    $sql = "SELECT * FROM category WHERE id=:id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $row = $stmt->fetch();

    return $row;
}

public function update()
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $text = $_POST['text'];

    $sql = "UPDATE category SET id=:id, name=:name, text=:text WHERE id=:id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":text", $name);
    $stmt->execute();
    
}

public function hapus($id)
{
    $sql = "DELETE FROM category WHERE id=:id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":artist_id", $id);
    $stmt->execute();

    
}
}