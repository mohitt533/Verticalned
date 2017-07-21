<?php

if(!empty($_POST) && isset($_POST['submit'])){
          $user = escape($_POST['username']);
          $pass = escape($_POST['password']);
		    $type = escape($_POST['group1']);;

        if(login($user, $pass,$type)){
          header("location:index.php?page=announcement");
        }

    else{

     header('location:index.php?page=login');

      }
    }
require '../templates/components/header.php';
require '../templates/components/navbar.php';
require '../templates/components/loginform.php';
require '../templates/components/services.php';
require '../templates/components/footer.php';



?>
