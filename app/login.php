<?php

namespace App;

use App\koneksi;

class login extends koneksi {

public function __construct()
{
    parent:: __construct();
}

public function proses()
{

$i_username = $_POST['i_username'];
$i_password = $_POST['i_password'];


$sql ="SELECT * FROM tb_user WHERE user_name=:user_name AND userr_password=:userr_password";
$stmt = $this->db->prepare($sql);
$stmt->bindParam(":user_name", $i_username);
$stmt->bindParam(":userr_password", $i_password);
$stmt->execute();

$row = $stmt->fetch();

if (!empty($row)) {
    $_SESSION['user_name'] = $row['user_name'];
} else {
    $_SESSION['error'] = "login error";
}
}
}

