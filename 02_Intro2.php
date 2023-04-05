<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .contaniner{
            background-color: gray;
            font-weight: bold;
            padding: 20px;
            max-width: 80%;
            margin:auto;
        }

    </style>
</head>
<body>
    <div class="contaniner">
        <h1>Deep down in PHP</h1>
        <?php
        $age = 18;
        echo "Your eligibility status➡️";

        //Conditional Statement (if-else statements)
        if($age >= 18){
            echo "You are eligible!";
        }else{
            echo "You aren't eligible!";
        }
        echo "<br>";

        //Arrays
        $arr = array("PhP", "C++", "C", "Java", "Javascript", "Nodejs", "Golang");
        echo "Count/Size of array: ",count($arr);
        echo "First item in array is: ",$arr[0];
        echo "<br>";

        //Loops
            //While loop
        $a = 0;
        while ($a <= 10) {
            echo "<br>Value of a is: ", $a++;
        }
        echo "<br>";

            //Using while loop with array
        $size = 0;
        while ($size < count($arr)) {
            echo "<br>Item ${size} in array is ${arr[$size]}";
            $size++;
        }
        echo "<br>";

            //For loop
        $name_arr = array("Ani", "Sam", "Joe");
        for ($i=0; $i < count($name_arr); $i++) { 
            echo "<br>Name of ${i} student in array is ${name_arr[$i]}";
        }
        echo "<br><br>";

        //Functions
        function sayGreeting(){
            echo "Good Morning, I wish you a great day";
        }
        sayGreeting();
        echo "<br>";


        ?>
    </div>
</body>
</html>