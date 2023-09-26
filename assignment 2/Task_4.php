<?php 
//Task 4: Fibonacci Series printing using a Function
function fibonacci($n) {
    
    $first = 0;
    $second = 1;
  
    
    echo "Fibonacci Series \n";
    
    echo $first.' '.$second.' ';
    
        for($i = 2; $i < $n; $i++){
    
            $next = $first + $second;
        
            echo $next.' ';
        
            $first = $second;
            $second = $next;
    
        }
    }

fibonacci(15);


?>