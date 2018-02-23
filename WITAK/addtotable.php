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

    //INSERT TO TABLE
    $sql= "INSERT INTO myUsers(username, firstname, lastname, email) VALUES ('bond', 'james', 'błąd', 'bond@błąd.james')";
    
    if(mysqli_query($conn, $sql)){
        echo "Dodano.";
    }
    else{
        echo "Error " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);


    ?>
</body>
</html>