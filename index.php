<?php
    include('template.php');
    // Initialize the session
    session_start();
    
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pendaftaran CPNS Baru</title>
    </head>

    <body>
        <header class="d-flex flex-column align-items-center justify-content-center">
            <h3 class="d-flex justify-content-center pt-5">Pendaftaran CPNS Baru</h3>
        </header>
    </body>
</html>