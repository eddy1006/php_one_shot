<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: rgb(228, 195, 195);
        margin : auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>Let's learn about PHP</h1>
        This is a container.
        <?php
            $age = 12;
            if($age > 18){
                echo "You are eligible to vote";
            }else if($age == 18){
                echo "Congratulations! You can vote from now on ";
            }else{
                echo "Uh-Oh! Seems like you have to wait ".(18-$age)."years more";  //  '.' dot is the concatination operator
            }
        ?>
    </div>
</body>
</html>