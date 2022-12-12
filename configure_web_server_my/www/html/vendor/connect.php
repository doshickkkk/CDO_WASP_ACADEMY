<?php

    $dsn = "pgsql:host=172.20.0.3;port=5432;dbname=docker;user=admin;password=admin";

    $connect = new PDO($dsn);

    if (!$connect) {
        die('Error connect to DataBase');
    }