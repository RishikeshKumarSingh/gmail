<?php

$connect = mysqli_connect("localhost","root","","gmail");

session_start();

function redirect($page="index"){
        echo "<script>window.open('$page.php','_self')</script>";
}
 function message($msg){
        echo "<script>alert('$msg')</script>";
}

function checkAuth(){
        if(!isset($_SESSION['user'])){
                redirect("login");
        }
}
// function getUser(){
      //   global $connect;
       //  if(isset($_SESSION['user'])){
       //          $session = $_SESSION['user'];
        //         $query = mysqli_query($connect, "select * from accounts where email='$session'");
         //        $user = mysqli_fetch_array($query);

        //         return $user;
       //  }
       //  else{
      //           return false;
    //     }
// }

 function getUser( $session = NULL){
        global $connect;
        if(isset($_SESSION['user'])){

                if($session== NULL){
                $session = $_SESSION['user'];
                }
                $query = mysqli_query($connect, "select * from accounts where email='$session'");
                $user = mysqli_fetch_array($query);

                return $user;
        }
        else{
                return false;
        }
}
