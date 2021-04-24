<?php
    if(!isset($_GET["id"])){
        header("location:view.php");
        exit();
    }
    include 'koneksi.php';
    $id = $_GET["id"];
    $getData = $con->query("SELECT * FROM atmosfer WHERE id = ".$id);
    if($getData->num_rows==0){
        header("location:view.php");
        exit();
    }
    $getData = $getData->fetch_assoc();
?>
<!DOCTYPE html>
<html>
    <head>    
    
    </head>
    <body>
        <form action="do_update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$_GET["id"]?>">
            <table>
                <tr>
                    <td>Nama</td>
                    <td> </td>
                    <td><input type="text" name="nama" value="<?=$getData["nama"]?>"></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td> </td>
                    <td><input type="text" name="nim" value="<?=$getData["nim"]?>"></td>
                </tr>
                <tr>
                    <td>Bidang</td>
                    <td> </td>
                    <td><input type="text" name="bidang" value="<?=$getData["bidang"]?>"></td>
                </tr>
                <tr>
                    <td>Foto</td>
                    <td> </td>
                    <td><input type="file" name="foto"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button>Save</button></td>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_SESSION["message"])){
                echo $_SESSION["message"];
                unset($_SESSION["message"]);
            }
        ?>
    </body>
</html>