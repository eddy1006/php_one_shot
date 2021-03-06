<?php
$insert = false;
    if(isset($_POST['name'])){
    //Set connection variables    
    $server = "localhost";
    $username = "root";
    $password = "";

    //Create a database connection
    $connection = mysqli_connect($server,$username,$password);


    //Check for connection success
    if(!$connection){
        die("Connection to the database failed due to ".mysqli_connect_error());
    }
    //echo "Connection established with database";

    //Collect post variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender= $_POST['gender'];
    $email= $_POST['email'];
    $phone = $_POST['phone'];
    $other= $_POST['desc'];

    $sql = "INSERT INTO `us_trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
    //echo $sql;

    //Execute the query
    if($connection->query($sql) == true){
        //echo "Successfully Inserted";
        $insert = true;
    }else{
        echo "ERROR : $sql <br> $connection->error";
    }

    //Close the db connection (Very Important)
    $connection->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpeg" alt="VIT Vellore">
    <div class="container">
        <h1>Welcome to VIT Vellore US Trip Form</h1>
        <p>Enter your details and submit the form to confirm your participation in the trip</p>
        <?php
            if($insert == true){
                echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
            } 
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>