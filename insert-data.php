<?php

$pdo = new PDO('mysql:host=db;dbname=php', 'php', 'php');

$projects = array(
    array(
        'name' => 'SVG Calculator',
        'url' => 'http://tsinoyboi.github.io',
    ),
    array(
        'name' => 'Simon Game',
        'url' => 'http://tsinoyboi.github.io',
    ),
    array(
        'name' => 'Game of Life',
        'url' => 'http://tsinoyboi.github.io',
    ),
    array(
        'name' => 'Roguelike',
        'url' => 'http://tsinoyboi.github.io',
    ),
);

$sql = "INSERT INTO projects (name, url)
    VALUES (:name, :url)";

$statement = $pdo->prepare($sql);

foreach ($projects as $project) {
    $statement->execute($project);
}