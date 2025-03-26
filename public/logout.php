<?php
if(session_status()!= PHP_SESSION_ACTIVE){
    session_start();
    session_destroy();
    unset($_SESSION);
}else{
    session_destroy();
    unset($_SESSION);
}
header('Location: login.php');
?>