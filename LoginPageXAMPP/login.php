<?php

    require_once('db.php');

    $login = $_POST['login'];
    $password = $_POST['password'];

    if(empty($login) || empty($password)){

        echo"Complete all fileds";

    }else{
        $sql = "SELECT * FROM `users` WHERE username = '$login' AND password = '$password' ";
        $result = $conn->query($sql);

        if($result->num_rows > 0){

            while($row = $result->fetch_assoc()){

                echo"Welcome " . $row['username'];
            }
        }else{

            echo"User doesn't exists";

        }
    }

?>