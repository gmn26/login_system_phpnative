<?php
    include('../db/connect.php');

    if(isset($_POST['submit'])){
        $password = hash('xxh128',  $_POST['password']);
        if(isset($_POST['username'])){
            // check if user login with username
            $username = $_POST['username'];
            $query = "SELECT * FROM tb_users WHERE username = '$username' AND password = '$password'";
        }elseif(isset($_POST['email'])){
            // check if user login with email
            $email = $_POST['email'];
            $query = "SELECT * FROM tb_users WHERE email = '$email' AND password = '$password'";
        }

        $result = mysqli_query($conn, $query);

        // this if-else statement check how many rows that affected by the Query, if its value > 0 it means the INSERT Query is success
        if(mysqli_affected_rows($conn) > 0){
            // this code running when user login info is correct
            session_start();
            $info = mysqli_fetch_assoc($result);

            $_SESSION['user'] = true;
            $_SESSION['fullname'] = $info['fullname'];
            $_SESSION['username'] = $info['username'];
            $_SESSION['email'] = $info['email'];
            echo"<script>
                    alert('Login berhasil!')
                    document.location.href = '../dashboard/'
                </script>";
        }else{
            // this code running when user login info is wrong
            echo"<script>
                    alert('Gagal masuk, periksa kembali informasi login anda!')
                    document.location.href = '../login/'
                </script>";
        }
    }else{
        // back to login page if user forcely access checklogin.php
        header("Location: ../login/");
    }
?>