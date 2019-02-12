<?php
//logout.php
session_start();
if (isset($_SESSION['sessionid'])){
    session_destroy();//this to destroy all session info
    }
header ("location: login.php?msg=Anda telah logout");
?>