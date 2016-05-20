<?php
include("../model/postingdb.php");

if($_POST['method'] == "postall"){
    post_order();
}

if($_POST['method'] == "getall"){
    get_orders();
}

if($_POST['method'] == "getallbyID"){
    get_ordersbyID();
}

if($_POST['method'] == "getallorders"){
    get_allorders();
}

if($_POST['method'] == "update"){
    update_order();
}

?>