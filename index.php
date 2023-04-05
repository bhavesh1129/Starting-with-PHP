<?php 
    $insert = false; // flag to check if data was inserted successfully
    if(isset($_POST["name"])) {
        $server="localhost"; // name of the server, can be IP address as well
        $username="root"; // username to access the database
        $password=""; // password to access the database

        // connect to the database
        $connection = mysqli_connect($server, $username, $password);

        // check if connection was successful
        if(!$connection){
            die("Connection to this DB failed due to" . mysqli_connect_error());
        }
        // echo "Successfully connected to DB!";

        // retrieve form data
        $name = $_POST["name"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $desc = $_POST["desc"];

        // create SQL query to insert form data into database
        $sql = "INSERT INTO `Trip`.`trip` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `Date`) 
                VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";

        // execute SQL query and check if data was inserted successfully
        if($connection->query($sql) == true){
            $insert = true;
        }else{
            echo "Error: $sql <br> $connection->error"; // display error message if data insertion failed
        }

        // close database connection
        $connection->close();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="head">
            Welcome to our Travel Service✈️
        </div>
        <div class="para">
            Kindly fill all the required details below to confirm your trip with us.
        </div>
        <?php
            if ($insert == true){ // if data was inserted successfully, display success message
                echo "<div class='para'>
                        Thanks for submitting the trip form, we will contact you soon!
                      </div>";
            }
        ?>
        <br>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">

            <div class="radioo">
            <label>Gender&nbsp;</label>
            <input type="radio" id="male" name="gender" value="Male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="Female">
            <label for="female">Female</label>
        </div>

        <input type="number" name="phone" id="phone" placeholder="Enter your mobile num" />
        <input type="email" name="email" id="email" placeholder="Enter your email" />

        <textarea name="desc" id="desc" cols="30" rows="9" placeholder="Enter any other info"></textarea>

        <div class="radioo">
            <button class="btn">Submit</button>
            <button class="btn">Reset
            </div>
        </form>
    </div>
</body>

</html>