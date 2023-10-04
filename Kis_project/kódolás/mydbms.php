<?php
    define('dbHOST', 'localhost');
    define('dbUSERNAME', 'root');
    define('dbPASSWORD', '');
    define('dbDATABASE', 'gallery');
    define('dbPORT', 3306);

    function connect() {
        $connection = mysqli_connect(dbHOST, dbUSERNAME, dbPASSWORD, dbDATABASE, dbPORT);
        if(!$connection) {
            die("Hiba az adatbázis kapcsolat létesítése során: ".mysqli_connect_error());
        }
        return $connection;
    }

?>
