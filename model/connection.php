<?php
try {
    $db = new PDO("mysql:dbname=dove", "root", "root");
}   catch (PDOException $e) {
        echo 'connection failed:' . $e->getMessage();
}
?>