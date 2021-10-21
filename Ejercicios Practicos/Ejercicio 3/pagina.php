<!DOCTYPE HTML>
<html>
<head>
<style>
error.{ color: #FF0000;}
</style>
</head>
<body style="background-color: #ADF6E0" >
<?php
// define variables and set to empty values
$name = $email =  $password=$sexo= $direccion = $repassword = $hobby = $fecha = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $direccion = test_input($_POST["direccion"]);
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    $repassword = test_input($_POST["repassword"]);
    $fecha = test_input($_POST["fecha"]);
    $hobby = test_input($_POST["hobby"]);
    $sexo = test_input($_POST["sexo"]);
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Formualario de inscripcion de usuarios</h2>
<form method="post" action="<?php echo
htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Nombre Completo: <input type="text" name="name" >
<br /> <br />
Direccion: <textarea name="direccion" rows="5" cols="40"></textarea>
<br /> <br />
E-mail: <input type="text" name="email">
<br /> <br />
Contraseña: <input type="text" name="password">
<br /> <br />
Confirmar Contraseña: <input type="text" name="repassword" >
<br /> <br />
Fecha Nacimiento: <input type="date" name="fecha" >
<br /> <br />
Sexo:
<input type="radio" name="sexo" value="female">Mujer
<input type="radio" name="sexo" value="male">Varon
<br /> <br />
Aficciones:
<input type="radio" name="hobby" value="ficcion">ficcion
<input type="radio" name="hobby" value="accion">accion
<input type="radio" name="hobby" value="suspence">suspence
<input type="radio" name="hobby" value="comedia">comedia
<br /> <br />
<input type="submit" name="submit" value="Submit">
</form>
<?php
echo "<h2>Pagina de confirmacion del registro de ususario</h2>";

echo $name;
echo "<br>";
echo $direccion;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
echo "<br>";
echo $repassword;
echo "<br>";
echo $fecha;
echo "<br>";
echo $sexo;
echo "<br>";
echo $hobby;
echo '<input type="submit" name="submit" value="Confirmar Datos">';
?>
