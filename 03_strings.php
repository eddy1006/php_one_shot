<?php
    $str = "This is a String";
    echo $str;
    echo "<br>Length of the string is : ".strlen($str);
    echo "<br>The word count of the string is : ".str_word_count($str);
    echo "<br>The reverse of string is : ".strrev($str);
    echo "<br>Position of 'is' in this string is : ".strpos($str,"is");
    echo "<br>Replacing 'is' with 'at' : ".str_replace("is","at",$str);
?> 