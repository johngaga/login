<?php
session_start();
include('connection.php');

if(isset($_POST['submit'])){
    $username = $_POST['userName'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM trylogin WHERE username = '$username' and password = '$password' ";
    $result = mysqli_query($conndb, $sql);
    $count = mysqli_num_rows($result);

        if($count == 1){
                            

                             $_SESSION['users']=$username;
                            header('location:success.php');
                       
       
    }else{
         $_SESSION['login'] = "log in fail";
        header('location:login.php');
    }

}
?>