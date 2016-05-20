<?php
include("connection.php");

session_start();

function post_order(){
    //insert info in the users table
    global $db;    
    $query = "INSERT INTO postings(description, destination, currentPlace, user_id) VALUES ('".$_POST['description']."','".$_POST['destination']."','".$_POST['currentPlace']."','".$_SESSION['id']."')";
    echo $query;
    $result = $db->query($query);
}

function get_orders(){
    global $db;
    $query = "SELECT postings.description, postings.destination, postings.currentPlace, postings.id, users.username FROM postings
              LEFT JOIN users ON users.id = postings.user_id WHERE user_id =".$_SESSION['id']."";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function get_ordersbyID(){
    global $db;
    $query = "SELECT postings.*, users.username, users.email FROM postings 
              LEFT JOIN users ON users.id = postings.user_id WHERE postings.id = ".$_POST['id']."";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function get_allorders(){
    global $db;
    $query = "SELECT postings.description, postings.destination, postings.currentPlace, postings.id, users.username FROM postings
              LEFT JOIN users ON users.id = postings.user_id";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function update_order(){
    global $db;
    $query = "  UPDATE postings 
                SET description = '".$_POST['description']."',
                destination = '".$_POST['destination']."',
                currentPlace = '".$_POST['currentPlace']."' WHERE id =".$_POST['id']."";
    echo $query;
    $result = $db->query($query);
}

?>