<?php
    session_start();
    if(isset($_GET["id"])){
        include 'koneksi.php';
        $con->query("DELETE FROM atmosfer WHERE id = ".$_GET["id"]);
    }
    header("location:view.php");
    exit();
?>