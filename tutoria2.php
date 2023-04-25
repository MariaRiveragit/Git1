<?php
include "tutoria2.html";

$correctas = null;
$Incorrectas = null;
$Enblanco = null;

if(isset($_POST['correctas']) && isset($_POST['Incorrectas']) && isset($_POST['Enblanco'])){
 
$correctas = $_POST['correctas'];
$Incorrectas = $_POST['Incorrectas'];
$Enblaco = $_POST['Enblanco'];

$resultado = (4*$correctas) - $Incorrectas + 0*$Enblanco;

echo "<br>Su calificacion es: $resultado";

}
?>