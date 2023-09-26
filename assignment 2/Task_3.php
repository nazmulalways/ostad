<?php
 //Task 3: Break on Condition
  $first = 0;
  $second = 1;
  
    
  echo "Fibonacci Series \n";
 
  //echo $first.' '.$second.' ';
  
    for($i = 2; $i < 100; $i++){
        
        $next = $first + $second;
        
        if ($next > 100) {
            break;
        } 
     
    
        echo $next.' ';
        
       
    
        $first = $second;
        $second = $next;
     
    }




?>