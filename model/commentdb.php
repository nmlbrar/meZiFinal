<?php
include("connection.php");

session_start();

function post_comment(){
    //insert info in the users table
    global $db;    
    $query = "INSERT INTO comments(comment, post_id, user_id) VALUES ('".$_POST['comment']."','".$_POST['post_id']."','".$_POST['user_id']."')";
    
    $result = $db->query($query);
}


function get_comments(){
    global $db;
    $query = "SELECT * FROM comments  WHERE post_id ='".$_POST['post_id']."'";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

?>