<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$servername= "localhost";
    $username= "root";
    $password = "";

    //connect to database
    $conn = mysqli_connect($servername, $username, $password);

    //check connect
    if(!$conn){
        die("Nieudane połączenie: " . mysqli_connect_error());
    }

     //create database
     $sql = "CREATE DATABASE mydb";

     if(mysqli_query($conn, $sql)){
         echo "Utworzono bazę.";
     }
        else {
            echo "Błąd tworzenia bazy:" . mysqli_error($conn);
        }
     mysqli_close($conn);

    ?>
</body>
</html>