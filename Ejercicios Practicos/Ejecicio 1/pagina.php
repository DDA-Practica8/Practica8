<?php
echo "Precio del Pasaje es: 200";
echo "<br>";
echo "Su edad es: ";

$a�oActual=date("Y");
$a�o = $a�oActual- $_REQUEST['trip'];
echo $a�o; 
echo "<br>";
if ($a�o > 18)
{
    echo "Como la persona es adulta el precio del pasaje es precio completo ";
}
if ($a�o < 18 and $a�o > 2)
{
    echo "Como la persona no es adulta el precio del pasaje seria " ;
    echo 200*0.75;
}
else {
    echo " no pagan";
}
?>