<?php
// include 'session.php';
// echo $_SESSION['username'];exit;
$idreg ="yayang";
require_once 'config/koneksi.php';
// echo $idreg;exit;
try{
$sql = "SELECT * FROM tb_user WHERE tb_user.username=?";
$q = $database_connection->prepare($sql);
$q->execute([$idreg]);
}catch(PDOException $e){
die("Tidak Bisa Membuka Database $database_name :" . $e->getMessage());
}

foreach ($q as $row) {
    $iduser = $row['id_user'];
    $username = $row['username'];
    $email = $row['email'];
    $no_hp = $row['no_hp'];
    $gambar = $row['gambar'];    
    $kotalahir = $row['kota_lahir'];
    $tanggallahir = $row['tgl_lahir'];
      
    
}


?>
<html>
<style>
body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" rel="stylesheet"/>
<link rel="stylesheet" href="modul/css/menuutama.css" type="text/css">

<div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
            <form action='config/upload.php' method='POST' enctype='multipart/form-data'>
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="mt-5" src="<?=$gambar?>" width="150">
                <span class="font-weight-bold"><?=$username?></span>
                <span class="text-black-50"><?=$email?></span>
                <div>
                    <input type="file" name="file">
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Picture</button></div>

                <span> </span></div>
                </form>
            </div>
            
            <div class="col-md-5 border-right">
            <form action='config/edit_profile.php' method='POST' >
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">EDIT PROFILE</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Username</label><input type="text" class="form-control" placeholder="username" value="<?=$row['username']?>" name="username"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="email" value="<?=$row['email']?>" name="email" ></div>
                    </div> 
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">No.telpon</label><input type="text" class="form-control" placeholder="No.tlp" value="<?=$row['no_hp']?>" name="no_hp" ></div>
                    </div> 
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Tempat Lahir</label><input type="text" class="form-control" placeholder="tempat lahir" value="<?=$row['kota_lahir']?>" name="kota_lahir"></div>
                        <div class="col-md-6"><label class="labels">Tanggal Lahir</label><input type="date" class="form-control" value="<?=$row['tgl_lahir']?>" name="tgl_lahir"></div>
                    </div> 
                    <div class="row mt-2">
                                     
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                </div>
            </form>
            </div>
            <h6 class="teks">
        <center><b>© Copyright by 18111171_Yayang Fitri Nuraeni_TIFRP18 CID-B</b></center>
            
        </div>
    
</div>
</div>
</div>
</html>