<?php
    include('../db/connect.php');

    if(isset($_POST['submit'])){
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        // hash() is PHP 8.1 function to hash the text that you put in it
        // if you want to know more about hashing with php, just search on google "PHP hash function"
        $password = hash('xxh128',  $_POST['password']);

        // usually you just do INSERT INTO .... query to Insert data to db table
        // but i use INSERT IGNORE INTO, the IGNORE is to avoid error when there is a duplicate data for PRIMARY or UNIQUE column
        $query = "INSERT IGNORE INTO tb_users VALUES ('', '$fullname', '$username', '$email', '$password')";
        mysqli_query($conn, $query);

        // this if-else statement check how many rows that affected by the Query, if its value > 0 it means the INSERT Query is success
        if(mysqli_affected_rows($conn) > 0){
            // this code running when the INSERT Query is success and it menas the user registered
            echo"<script>
                    alert('Akun berhasil didaftarkan, silahkan masuk menggunakan akun yang telah anda daftarkan')
                    document.location.href = '../login/'
                </script>";
        }else{
            // this code running when the INSERT Query is failed and it means the user is not registered
            echo"<script>
                    alert('Akun gagal didaftarkan, silahkan gunakan email / username yang berbeda untuk mendaftar')
                    document.location.href = '../register/'
                </script>";
        }
    }else{
        // back to login page if user forcely access checkregister.php
        header("Location: ../register/");
    }
?>