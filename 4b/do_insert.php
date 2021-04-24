<?php
    session_start();
    if(isset($_POST["nama"])){
       include 'koneksi.php';
       $nama = $_POST["nama"];
       $nim = $_POST["nim"];
       $bidang = $_POST["bidang"];
       $foto = $_FILES["foto"];
       
       $message = "";
       
       if($nama==""){
           $message = "Nama harus diisi";
       }
       else if($nim==""){
           $message = "NIM harus diisi";
       }
       else if($bidang==""){
           $message = "Nama harus diisi";
       }
       else if(!isset($foto["tmp_name"]) || $foto["tmp_name"]==""){
           $message = "Foto harus dipilih";
       }
       else{
           $filePath = "upload/".basename($foto["name"]);
           move_uploaded_file($foto["tmp_name"], $filePath);
        
           $con->query("INSERT INTO atmosfer VALUES (null,'".$nama."',
           '".$nim."','".$bidang."','".$filePath."')");
           
           $message = "input sukses!";
       }
       $_SESSION["message"] = $message;
    }
    header("location:view.php");
    exit();
?>