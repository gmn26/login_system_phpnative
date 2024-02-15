<?php
    include('../auth/checkAuth.php');
    session_destroy();  // to clear all session
    header('../login/');
?>