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
    $sql = "INSERT INTO MyUsers (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    
    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
        echo "Ostatni dodany rekord ma id: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


    ?>
</body>
</html>