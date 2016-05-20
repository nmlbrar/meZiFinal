<?php
include("sessions.php");
session_destroy();
header('Location: ../view/profile.html');
?>