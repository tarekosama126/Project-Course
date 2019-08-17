<?php
    session_start();
    if(isset($_POST['username'] , $_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])){
        require 'connect_database.php';
        $password = $_POST['password'];
        $username = $_POST['username'];

        $sql = "select * from admin where username='$username' and password = '$password'";
        $result = $conn->query($sql);
     
        if($result->num_rows >0){
            
            echo "success";
            $_SESSION['name'] = $username;
            $_SESSION['password']=$password;
        }
        else{
            echo "invalid";
        }
    }
    else{
        echo "invalid 2";
    }











?>