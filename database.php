<?php

    define('HOST','sql11.freesqldatabase.com');
    define('DB_NAME','sql11685764');
    define('USER','root');
    define('PASS','');

    try{
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conect > Ok !";
    } catch(PDOException $e){
        echo $e;
    }
    ?>