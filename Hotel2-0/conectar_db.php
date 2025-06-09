<?php

// Conexión a la base de datos
if (!function_exists('conectar')) {
    function conectar() {
        try {
            /*$link = new PDO("mysql:host=localhost;port=3307;dbname=tiendavirtual", "root", ""); Versión en Localhost*/

            // if0_39027458 es el nombre de usuario en Infinity Free
            //if0_39027458_tiendavirtual es el nombre de la base de datos en Infinity Free
            // sql113.infinityfree.com es el servidor de la base de datos en Infinity Free
            
            //$link = new PDO("mysql:host=sql113.infinityfree.com;port=3306;dbname=if0_39027458_tiendavirtual", "if0_39027458", "WG2Ok6w8w5m");
            $link = new PDO("mysql:host=localhost;port=3307;dbname=tfg", "root", "");
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $link;
        } catch (PDOException $e) {
            die("Fallo de conexión: " . $e->getMessage());
        }
    }
}

