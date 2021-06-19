<?php

 class post {

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
$sql = "SELECT * FROM post";
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
    $slug = $_POST['slug'];
    $title = $_POST['title'];
    $text = $_POST['text'];
    $cat_id = $_POST['cat_id'];

   

    $sql = " INSERT INTO post VALUES ( :id, :date, :slug, :title, :text, :cat_id)";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":date", $date);
    $stmt->bindParam(":slug", $title);
    $stmt->bindParam(":text", $text);
    $stmt->bindParam(":cat_id", $cat_id);
    $stmt->execute();
    
}
public function edit($id)
{
    $sql = "SELECT * FROM post WHERE id=:id";
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
    $slug = $_POST['slug'];
    $title = $_POST['title'];
    $text = $_POST['text'];
    $cat_id = $_POST['cat_id'];



    $sql = "UPDATE track SET id=:id, date=:date, slug=:slug, title=:title, text=:text, cat_id=:cat_id WHERE id=:id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":date", $date);
    $stmt->bindParam(":slug", $title);
    $stmt->bindParam(":text", $text);
    $stmt->bindParam(":cat_id", $cat_id);
   
   


    $stmt->execute();
    
}

public function hapus($id)
{
    $sql = "DELETE FROM post WHERE id=:id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    
}
}