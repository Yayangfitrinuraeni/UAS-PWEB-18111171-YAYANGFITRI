<?php
require_once "koneksi.php";
$username = "yayang";
$email= $_POST["email"];
$no_hp= $_POST["no_hp"];
$kota_lahir= $_POST["kota_lahir"];
$tgl_lahir= $_POST["tgl_lahir"];



$q = $database_connection ->prepare ("UPDATE `tb_user` SET `username` = ?, `email` = ?, `no_hp` = ?, `kota_lahir` = ?, `tgl_lahir` = ?,  WHERE `tb_user`.`username` = ?;");
$q->execute ([$username, $email, $no_hp, $kota_lahir, $tgl_lahir,  $username]);
header("Location: ../editprofile.php");
?>