<?php 
//Task 1: Looping with Increment using a Function


    function evenNumbers($start, $end, $step){
        //Using For Loop
        echo "Using for loop: ";
        for ($i = $start; $i <= $end; $i += $step){
            echo ($i +1 ) ." ";
        }
        
        
        
        echo PHP_EOL;
        echo "Using while loop: ";
        $j = $start;
        while ($j <= $end){
            echo ($j +1 ) ." ";
            $j += $step;
        }
        
        
        
        
        echo PHP_EOL;
        echo "Using do while loop: ";
        $k = $start;
        do{
            echo ($k +1 ) ." ";
            $k += $step;
        }while($k <= $end);
}

//Function Calling
    EvenNumbers($start=1, $end=20, $step=2);
?>