<?php
include("connection.php");
session_start();


function insert_user(){
    //insert info in the users table
    global $db;
    
    $query = "INSERT INTO users(username, password, email, user_type) VALUES ('".$_POST['username']."','".$_POST['password']."','".$_POST['email']."','".$_POST['user_type']."')";
    $result = $db->query($query);
}

function get_users(){
    //read the users info from the users table
}

function get_user_by_username_password(){

    //this will grab user based on username and password
    global $db;
    $query = "SELECT id, username FROM users WHERE username = '".$_POST['username']."' and password = '".$_POST['password']."'";
    
    $result = $db->query($query);
    
    $shot = $result->fetchAll();
    $_SESSION['id'] = $shot[0]['id'];
    
    
    echo json_encode($_SESSION['id']);
    
    
}

function postNew(){

    //this will insert the new username os the logged in user
    global $db;
    $query = "  UPDATE users 
                SET username = '".$_POST['username']."' WHERE id =".$_POST['id']."";
    echo $query;
    $result = $db->query($query);
    
    
}

function checkLogin(){
    echo json_encode($_SESSION['id']);
}

function getUser(){
    global $db;
    $query = "SELECT * FROM users WHERE id = '".$_SESSION['id']."'";
    $result = $db->query($query);
    //remove a row of user from the users table
    echo json_encode($result->fetchAll());
}

/*TESTING
insert_user();*/
?>