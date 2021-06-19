<?php

 class photos {

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
$sql = "SELECT * FROM photos";
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
    $date = $_POST['date'];
    $title = $_POST['title'];
    $text = $_POST['text'];
    $post_id = $_POST['post_id'];
   

    $sql = " INSERT INTO photos VALUES ( :id, :date, :title, :text, :post_id)";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":date", $date);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":text", $text);
    $stmt->bindParam(":post_id", $post_id);
   
    $stmt->execute();
    
}
public function edit($id)
{
    $sql = "SELECT * FROM photos WHERE id=:id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $row = $stmt->fetch();

    return $row;
}

public function update()
{
    $id = $_POST['id'];
    $date = $_POST['date'];
    $title = $_POST['title'];
    $text = $_POST['text'];
    $post_id = $_POST['post_id'];
   


    $sql = "UPDATE photos SET id=:id, date=:date, title=:title, text=:text, post_id=:post_id WHERE id=:id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":date", $date);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":text", $text);
    $stmt->bindParam(":post_id", $post_id);
   
    $stmt->execute();
    
}

public function hapus($id)
{
    $sql = "DELETE FROM photos WHERE id=:id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":artist_id", $id);
    $stmt->execute();

    
}
}