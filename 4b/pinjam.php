<?php
    session_start();
    if(isset($_GET["id"])){
        include 'koneksi.php';
        $stok = $stok + 1;
        $con->query("DELETE FROM atmosfer WHERE id = ".$_GET["id"]);
        $con->query("UPDATE books SET stok='".$stok."', nim='".$nim."',bidang='".$bidang."' WHERE id=".$id);
    }
    header("location:view.php");
    exit();
?>