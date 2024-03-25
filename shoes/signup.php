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
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $country = $_POST['country'];

        $sql = "insert into user values('$name', '$email', '$pass', '$country')";

        if(mysqli_query($connection, $sql)){
            header("location:login.html");
        }
        else{
            echo "failed to register";
        }
    }
  }

?>