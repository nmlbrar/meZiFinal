<?php
//starting the session 
session_start();

$_SESSION['username'] = 'username';
$_SESSION['password'] = 'password';

echo $_SESSION['anything'];
?>