<?php
    $server = 'localhost';
    $name = 'root';
    $password = '';
    $db  = 'shoes';
  $connection = new mysqli('localhost', 'root', '', 'shoes');

  if($connection->error){
    echo "connection error".error ;
  }
  else{
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $sql = "select * from user where email = '$email' AND password = '$pass'";

        $run = mysqli_query($connection,$sql);
        $data = mysqli_fetch_assoc($run);

        if($data['email'] = $email and $data['password'] = $pass){
            header("location:home.html");
        }
        
        else{
            header("location:login.html");
        }
    }
  }


  ?>