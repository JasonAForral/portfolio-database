<?php

$pdo = new PDO('mysql:host=db;dbname=php', 'php', 'php');

$sql = "CREATE TABLE projects (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(64) NOT NULL,
    url VARCHAR(128) NOT NULL
    )";

$pdo->exec($sql);
