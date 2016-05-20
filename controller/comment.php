<?php
include("../model/commentdb.php");

if($_POST['method'] == "postCom"){
    post_comment();
}

if($_POST['method'] == "getComments"){
    get_comments();
}

if($_POST['method'] == "delComment"){
    del_comments();
}

?>