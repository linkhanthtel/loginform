<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Log In</title>
</head>
<body>
    <div id="form">
        <form action="index.php" method="post">
            <input type="number" name="id" placeholder="ID"><br><br>
            <input type="text" name="name" placeholder="Name"><br><br>
            <input type="number" name="age" placeholder="Age"><br><br>
            <input type="text" name="position" placeholder="Position"><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>


<?php

    $hostname = 'localhost';
    $username = 'lk7navy';
    $passwords = 'A!mhighnoregret7';
    $database = 'lk7kira';

    $conn = new mysqli($hostname,$username,$passwords,$database);


    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $position = $_POST['position'];

    if(empty($name)) {
        echo "Name must be filled";
    }
    if(empty($age)) {
        echo "Age must be filled";
    }
    else {
        $sql = "Insert Into Members Values ('$id','$name','$age','$position')";
        mysqli_query($conn,$sql);
    }
    
?>