<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <div class="container">
        This my first php website.                         
        <?php
        echo "Hello world and this is printed using PHP";
        ?>
    </div>
    <?php
        define('pi',3.14);   //good practice to declare constants at the top of your script
        define('VIT',"Vellore Institute of Technology");
        echo "Hello world again";  //This is a comment ... simmilar to comments in cpp 
        $variable1 = 5;
        $variable2 = 2;
        echo $variable1;
        echo $variable2;
        Echo $variable1 + $variable2; // php is not case sensitive\
        echo "<br>";  //for changing the line
        //Operators in php
        echo "Value of variable1 + variable2 is : <br>";
        echo $variable1+$variable2;
        echo "<br>";
        echo "Value of variable1 - variable2 is : <br>";
        echo $variable1-$variable2;
        echo "<br>";
        echo "Value of variable1 * variable2 is : <br>";
        echo $variable1*$variable2;
        echo "<br>";
        echo "Value of variable1 / variable2 is : <br>";
        echo $variable1/$variable2;
        echo "<br>";

        $newVar = $variable1;
        echo "The value of new variable is : ";
        echo $newVar;
        ECHO "<br>";
        $newVar += 1;   // similar thing can be done with other arithmetic operators also
        echo "Effect of += on new variable : ";
        echo $newVar;
        echo "<br>";

        echo "The value of 1==4 is :";
        echo var_dump(1==4); //var_dump is an in-built function which gives type and value of a variable;
        echo "<br>";
        echo "The value of 1!=4 is :";
        echo var_dump(1!=4); 
        echo "<br>";
        echo "The value of 1<=4 is :";
        echo var_dump(1<=4); 
        echo "<br>";
        echo "The value of 1>=4 is :";
        echo var_dump(1>=4); 
        echo "<br>";

        echo $variable1++;
        echo "<br>";
        echo $variable1;
        echo "<br>";
        echo ++$variable1;
        echo "<br>";
        echo $variable1;
        echo "<br>";
        echo $variable1--;
        echo "<br>";
        echo $variable1;
        echo "<br>";
        echo --$variable1;
        echo "<br>";
        echo $variable1;
        echo "<br>";

        //Data types in php
        echo var_dump(4);  //integer
        echo "<br>";
        echo var_dump(4.0);  //float
        echo "<br>";
        echo var_dump("4");  //string
        echo "<br>";
        echo var_dump(true);  //boolean
        echo "<br>";

        //other than this we have object and array

        echo pi;
        echo "<br>";
        echo VIT;
        echo "<br>";
    ?>
</body>
</html>