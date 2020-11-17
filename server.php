<?php
    session_start();

    $username = '';
    $email= '';
    $errors = array();
    //untuk koneksi ke database
    //$db = mysqli_connect('localhost', 'id13915522_tesklmpk2web', 'Kelompok2inf@', 'id13915522_login');
    $db = mysqli_connect('localhost', 'root', '', 'regis');

    
    //button register
    if (isset($_POST['register'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);  

        if (empty($username)){
            array_push($errors, "username is required");
        }
        if (empty($email)){
            array_push($errors, "email is required");
        }
        if (empty($password_1)){
            array_push($errors, "password is required");
        }

        if ($password_1 != $password_2){
            array_push($errors, 'The two passwords do not match');
        }

        //kalau ga ada error akan melakukan query
        if (count($errors) == 0 ){
            $password = md5($password_1); //md5 buat secure password
            $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
            mysqli_query($db, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: login.php');
        }
        
    }

    if (isset($_POST['login'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db,$_POST['password']);

        if (empty($username)){
            array_push($errors, "username is required");
        }
        if (empty($password)){
            array_push($errors, "password is required");
        }
        if (count($errors) == 0 ){
            $password = md5($password); //mds5 buat secure password
            $query = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
            $result= mysqli_query($db,$query);
            
            if (mysqli_num_rows($result) == 1){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: shop.html');
            }
            else{
                array_push($errors,"The Username or Password doesn't match");
            }            
        }
        
    
    }
?>