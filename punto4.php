<?php
include 'punto4.html';

if (isset($_POST['datos'])) {
    $a=1;
    $cant=$_POST['cantidad'];

    while ($a <= $cant) {
        echo'hola mundo' .$a . '<br>';
      $a++;
        
    }

    //for ($a=1; $a <=$cant;$a++){
       // echo 'hola mundo' .$a .'<br>';
   // }
    
    //do {
      //  echo 'hola mundo' .$a .'<br>';
        //$a++;
    //while ($a <= $cant);

    }
    
?>

