<?php 
     //Task 2:
    $student = ['name' => 'Alice', 'age' => 22, 'grade' => 'A'];
    if(array_key_exists('grade',$student)){
        print_r($student);
    }
    
    //Task 3:
    $numbers = [100, 200, 50, 40, 50];
    foreach ($numbers as $key => $number) {
       echo $number.PHP_EOL;
    }
  
  
  //Task 4:
  $names = ['Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni'];
  $filteredNames = array_filter($names, fn($name) => strpos($name, 'M') === 0);
  $filter = array_filter($names,fn($name) => (strtoupper(substr($name, 0, 1)) === 'M'));

  foreach ($filter as $key => $name) {
   echo $name.PHP_EOL;
  }

  
  //Task 5:
  
  $originalString = "Hello, World!'";
  function getReverse($originalString){
      return strrev($originalString);
  }
  echo getReverse($originalString);
  
?>