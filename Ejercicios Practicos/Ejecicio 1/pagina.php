<?php
echo "Precio del Pasaje es: 200";
echo "<br>";
echo "Su edad es: ";

$añoActual=date("Y");
$año = $añoActual- $_REQUEST['trip'];
echo $año; 
echo "<br>";
if ($año > 18)
{
    echo "Como la persona es adulta el precio del pasaje es precio completo ";
}
if ($año < 18 and $año > 2)
{
    echo "Como la persona no es adulta el precio del pasaje seria " ;
    echo 200*0.75;
}
else {
    echo " no pagan";
}
?>