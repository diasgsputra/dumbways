<html>
    <head>
        <table>
            <a href="insert.php"><button>Input Data</button></a>
        </table>
    </head>
    <body>
        <?php
            include 'koneksi.php';
        $getA = $con->query("SELECT * FROM books");
        while($fetchA = $getA->fetch_assoc()){
        ?>
            <table style="display:inline-table;width:200px">
                <tr>
                    <td><img style="width:100%" src="<?=$fetchA["image"]?>"></td>
                </tr>
                <tr>
                    <td>
                        <strong><?=$fetchA["name"]?></strong><br>
                        stok = <?=($fetchA["stok"])?><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="pinjam.php?id=<?=$fetchA["id"]?>"><button>Pinjam</button></a>
                        <a href="kembali.php?id=<?=$fetchA["id"]?>"><button>Kembalikan</button></a>
                    </td>
                </tr>
            </table>
        
        <?php
            }
        ?>
    </body>
</html>