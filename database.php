<?php

    define('HOST','192.168.1.25');
    define('DB_NAME','Jean-Baptiste');
    define('USER','root');
    define('PASS','Alexi$57280');

    try{
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conect > Ok !";
    } catch(PDOException $e){
        echo $e;
    }
    ?>