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
    $sql= "INSERT INTO myUsers(username, firstname, lastname, email) VALUES ('shark', 'rekin', 'szablozębny', 'shark@shark.com');";
    $sql .= "INSERT INTO myUsers(username, firstname, lastname, email) VALUES ('jan', 'jan', 'kowalski', 'jank@kowalski.jan');";
    $sql .= "INSERT INTO myUsers(username, firstname, lastname, email) VALUES ('lis', 'jan', 'rudy', 'rudy@jan.lis');";
    $sql .= "INSERT INTO myUsers(username, firstname, lastname, email) VALUES ('miś', 'teddy', 'puchaty', 'puchaty@teddy.mis');";
    $sql .= "INSERT INTO myUsers(username, firstname, lastname, email) VALUES ('smok', 'benedict', 'dragon', 'smok@smok.smok');";
    $sql .= "INSERT INTO myUsers(username, firstname, lastname, email) VALUES ('lion', 'james', 'lew', 'lew@lion.lew');";
    $sql .= "INSERT INTO myUsers(username, firstname, lastname, email) VALUES ('mewa', 'ola', 'mewa', 'ola@mewa.mewa');";
    if(mysqli_multi_query($conn, $sql)){
        echo "Dodano.";
    }
    else{
        echo "Error " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);


    ?>
</body>
</html>