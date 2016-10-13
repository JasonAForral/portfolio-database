<?php

echo '<h1>H</h1>ello, world! ver 2<br>';

$pdo = new PDO('mysql:host=db;dbname=php', 'php', 'php');

$sql = "SELECT name, url FROM projects";

$results = $pdo->query($sql);

foreach ($results as $result) {
    echo $result['name'] . '<a href="' . $result['url'] . '">link</a><br>';
}