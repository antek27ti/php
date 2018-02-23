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
    $dbname = "mydb";

    //connect to database
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //check connect
    if(!$conn){
        die("Nieudane połączenie: " . mysqli_connect_error());
    }
    //VIEW DATE
    $sql = "SELECT id, firstname, lastname FROM myUsers";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo "id: " . $row["id"]. "| name: " . $row["firstname"]. " ". $row["lastname"]. "<br>";
        }   
    }
    else{
        echo "Nie ma nic, jest ocet!";
    }
    mysqli_close($conn);
    ?>
</body>
</html>