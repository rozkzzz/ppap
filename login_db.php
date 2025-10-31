<?php
    session_start();
    include('connect.php');
    //include('error.php');
    
    $error = [];

    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        if(empty($username)){
            array_push($error, 'ENTER USERNAME');
        }
        if(empty($password)){
            array_push($error, 'ENTER PASSWORD');
        }
        if (count($error) == 0){
            $password = md5($password);
            $query = "SELECT * FROM user WHERE username = '$username' AND '$password' ";
            $result = mysqli_query($con,$query);

            if(mysqli_num_rows($result)==1){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are LOGIN";
                header("location: index.php");
            }else{
                array_push($error, "Wrong username/password");
                header("location: index.php");
            }
        }
    }




?>