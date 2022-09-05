<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo practico 1 backend</title>
</head>
<body>
    <p><h1>Trabajo Practico nº1 - Leandro Carrizo</h1></p>
<br>
<hr>
<h3>1.Imprima por pantalla: “Hola mundo”.</h3>
<?php
   echo "Hola mundo"; 
   ?>
<br>
<hr>
<h3>2.Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.</h3>
<?php
 $saludo = "Hola mundo";
 echo $saludo; 
?>
<br>
<hr>
<h3>3.Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
entera y el resto de la división entera.
</h3>
<?php
    $n1 = 5;
    $n2 = 2; 
    
    echo $n1 + $n2;?><br>
   <?php echo $n1 - $n2;?><br>
   <?php echo $n1 / $n2;?><br>
   <?php echo $n1 * $n2;?><br>
   <?php echo $n1 % $n2;
?>
<br>
<hr>
<h3>4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
pantalla.</h3>
<?php
$celsius = (20 * 9/5);
$fahrenheit = 32 ;
$formula = $celsius + $fahrenheit;

echo $formula ;

?>
<br>
<hr>
<h3>5. Implementar algoritmos que permitan:</h3>
<h4>a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.</h4>
<?php
   $base_rectangulo = 18;
   $altura_rectangulo = 12;
   $formula_perimetro_rectangulo = (2 * $base_rectangulo) + (2 * $altura_rectangulo);
   echo $formula_perimetro_rectangulo ;?><br>
<?php
   $formula_area_rectangulo =  $base_rectangulo * $altura_rectangulo;
   echo $formula_area_rectangulo ;
?>
<h4>b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.</h4>
<?php
    $radio = 30;
    $pi = 3.1416;
    $formula_perimetro_circulo = 2 * $pi * $radio;
    echo $formula_perimetro_circulo?><br>
<?php
    $formula_area_circulo = $pi * ($radio**2);
    echo $formula_area_circulo
?>
</body>
</html>