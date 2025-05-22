<?php

require_once('db.php');
$login = $_POST['login'];
$password = $_POST['password'];
$repeat = $_POST['repeat'];
$email = $_POST['email'];

if(empty($login) || empty($password) || empty($repeat) || empty($email)){

    echo"Please, complete all the fields";

}else{

    if($password != $repeat){

        echo"Passwords are not matching";

    }else{

        $sql = "INSERT INTO `users` (username, password, email) VALUES ('$login', '$password', '$email')";

       if($conn->query($sql)){

            echo"Registration Success!";
       }else{

            echo "Error ". $conn->error;

       }
    }
}

?>