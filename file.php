<?php
    function print_array($array){
        foreach($array as $val){
            echo "<br>".$val;
        }
    }
    define("onst",3.14);
    echo var_dump(onst);
    $list = array(1 =>"one",2=>"two",3=>"three","hi"=>4);
    foreach($list as $key=>$val){
        echo $key."->".$val;
    }
    $arr = array(2,5,3,7,4);
    print_array($arr);
    sort($arr);
    print_array($arr);
    $file = fopen('fiile.txt','r');
    $stor = fread($file,6);
    //echo $stor;
    while(!feof($file)){
        if(($c = fgetc($file)) != " "){
            echo $c;
        }else{
            echo "<br>";
        }
        //echo fgets($file);
        //echo "<br>";
    }
    $stor2 = fread($file,2);
    echo $stor2;
    $f = fopen("file2.txt","w");
    fwrite($f,"Hi this is so funnnnnnnn");
    $f = fopen("file2.txt",'a');
    fwrite($f,"this thing will be appended");
    $result = file_get_contents("poll.txt");
    $r =  explode("|",$result);
    $yes = $r[0];
    $no = $r[1];
    if(isset($_POST)){
        $vote = $_POST['vote'];
        if($vote == "yes"){
            $yes += 1;
        }else{
            $no += 1;
        }
        file_put_contents("poll.txt",$yes."|".$no);
        $host = "localhost";
        $username = "root";
        $password = "";
        $db = "test";
        $conn = mysqli_connect($host,$username,$password,$db);
        if(!$conn){
            die(mysqli_connect_error());
        }else{
            echo "waah bhaiya maa chod diye";
        }
        $query = "INSERT INTO poll VALUES($yes,$no);";
        if($conn->query($query) == true){
            echo "<br>Successfully inserted";
        }else{
            echo "<br>Oh! no something went wrong";
        }
        $q = "SELECT * FROM poll";
        $result = mysqli_query($conn,$q);
        while(($res = mysqli_fetch_row($result))){
            echo $res[0];
            echo $res[1];
        }
        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poll</title>
</head>
<body>
    <form action="file.php" method="post">
        <p>Do you like video games ?</p><br>
        <label for="yes">YES:</label>
        <input type="radio" name="vote" id="vote" value="yes"><br>
        <label for="no">NO:</label>
        <input type="radio" name="vote" id="vote" value="no"><br>
        <input type="submit" value="Submit Response">
    </form>
</body>
</html>