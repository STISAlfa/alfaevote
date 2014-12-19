<html>
    <body>
        <?php
        DEFINE("DB_HOST", 'localhost');
        DEFINE("DB_USER", 'root');
        DEFINE("DB_PASS", '');
        DEFINE("DB_NAME", 'ppds');


        $connect = mysql_connect(DB_HOST, DB_USER, DB_PASS);
        $myDatabase = mysql_select_db(DB_NAME, $connect);

        if ($connect) {
            
        } else {
            ?><script language="javascript">alert("Gagal Koneksi Database MySql !!")</script><?php
        }

        ?>

    </body>
</html>
