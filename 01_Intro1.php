<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        This is my first PHP website
        <?php
        //Constant
        define ('PI', 3.14);

        //Break
        echo "<br>";

        //Print
        echo "Helloworld, this is my first statement through php";
        echo "<br>";

        //Variables
        $num1 = 11;
        $num2 = 29;
        echo "Sum of num1 and num2: ", $num1+$num2;
        echo "<br>";

        //Operators
        $sum =  $num1+$num2;
        echo "Value of sum: ", $sum++;
        echo "Value of sum: ", $sum--;
        echo "Value of sum: ", $sum;
        echo "<br>";

        //Conditional operators
            //var_dump:- Tells about the variable
        echo var_dump(1==11);
        echo var_dump(1>=11);
        echo var_dump(1<=11);
        echo var_dump(1!=11);
        echo "<br>";

        //Logical operators
        echo var_dump(true and false);
        echo var_dump(true or false);
        echo var_dump(true xor false);
        echo "<br>";

        //varibales
        $str = "This is string";
        echo var_dump($str);
        echo "Length of str is: ", strlen($str);
        echo "<br><br>";

        $num = 11;
        echo var_dump($num);
        echo "<br><br>";

        $floatt = 11.29;
        echo var_dump($floatt);
        echo "<br><br>";

        $bool = false;
        echo var_dump($bool);
        echo "<br><br>";
        
        echo "Value of PI: ",PI;
        echo "<br>";
        ?>
    </div>
</body>
</html>