<?php
$pdo = new PDO('mysql:host=localhost;dbname=Kalyak;charset=utf8', 'root', '', [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
