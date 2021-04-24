    <html>
    <head>
    </head>
    <body>
        <form action="do_insert.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama</td>
                    <td> </td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td> </td>
                    <td><input type="text" name="nim"></td>
                </tr>
                <tr>
                    <td>Bidang</td>
                    <td> </td>
                    <td><input type="text" name="bidang"></td>
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