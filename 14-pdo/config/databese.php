<?php
    try {
        $conx = new PDO ("mysql:host=$name_db",$user,$passwd);
        $conx->exec("set names utf8");
        echo "connection successfully!"
    }
    catch(PDOExeption $e) {
        echo "connection Error: " . $e->getMessage();
        
    }