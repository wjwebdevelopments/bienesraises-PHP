<?php

    function conectarDB() {

        $db = mysqli_connect('127.0.0.1', 'root', 'root', 'bienes_raices');

        if (!$db) {
            echo "No se pudo conectar a la base de datos";
            exit;
        }

        return $db;
    }