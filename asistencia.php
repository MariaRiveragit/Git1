
<?php
//asistencia ejercicio
include 'asistencia.html'; 


$nota = null;
$asis = null;
const total_clases = 30;
const percent = total_clases*0.8;
const MINIMAL_APROVED_NOTE = 5;

if (isset($_POST["operador"])) {


$nota = $_POST["nota"];
$asis = $_POST["asis"];


if ($nota >= MINIMAL_APROVED_NOTE && $asis >= percent)
{
echo 'Aprobo';
}else{
echo 'No Aprobo';
}

}

?>








