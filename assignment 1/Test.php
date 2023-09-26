<?php 
    
    echo "Enter a string: ";
    $input = readline();
    $cleanInput = preg_replace("/[^a-zA-Z]/","",$input);
    echo $count = strlen($cleanInput);
    
    function sum(...$numbers){
        echo $numbers['2'];
    }
    
    sum(10,20,30,40);

?>