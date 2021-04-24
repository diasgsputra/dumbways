    <html>
    <head>
    </head>
    <body>
        <form action="do_insert.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama</td>
                    <td> </td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td> </td>
                    <td><input type="text" name="stok"></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td> </td>
                    <td><input type="text" name="deskripsi"></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td> </td>
                    <td><input type="file" name="image"></td>
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