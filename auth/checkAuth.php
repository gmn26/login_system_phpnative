<?php
    // do this function first to accest $_SESSION variable
    session_start();

    // this part of code to get what is the parent folder of current active page
    // start here
    $dir = getcwd();  // getcwd() return full directory like c:\xampp\htdocs\.....
    $dirExplode = explode("\\", $dir); // explode() it to separate the $dir into array, the separator is "\"
    $lastDir = end($dirExplode); // end() is to get the last value of the array before, in this case that is the page parent folder
    // end here

    // check if there a $_SESSION with user as a key
    if(isset($_SESSION['user'])){
        // it will only run after user login correctly, because $_SESSION['user'] value only declared after login success
        if($lastDir != "dashboard"){
            // back to dashboard if user is not access the dashboard
            header('Location: ../dashboard/');
        }
    }else{
        // it will run when user have not login correctly
        if($lastDir == "dashboard"){
            // back to login if user is access the dashboard
            header('Location: ../login/');
        }
    }
?>