<?php
    include('template.php');
    // Initialize the session
    session_start();
    
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }

    include('database.php');
    $sql = $pdo->prepare("SELECT * FROM peserta WHERE akun_id == ?");
    $sql->bindParam(1, $_SESSION["id"]);
    $sql->execute();
    if($sql->rowCount()){
        $row = $sql->fetch();
        if($row["Terverifikasi"]){

        }
        else{

        }
    }
    else{

    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pendaftaran CPNS Baru</title>
    </head>

    <body>
        <header class="d-flex flex-column align-items-center justify-content-center">
            <h3 class="d-flex justify-content-center pt-5">Selamat Datang Pada Halaman Web Pendaftaran CPNS Baru</h3>
        </header>
        <button class="btn btn-warning m-auto">
        Daftar
      </button>
    </body>
</html>