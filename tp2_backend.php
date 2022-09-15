<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo practico 2 backend</title>
</head>
<body>
    <p><h1>Trabajo Practico nº2 - Leandro Carrizo</h1></p>
<br>
<hr>
<h3>1. Crear una variable n y validar que sea un número positivo.</h3>
<?php
    $n = 4;
    if ($n >0) {
        echo "$n es un número positivo";
        }
   ?>
<br>
<hr>
<h3>2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</h3>
<?php
 $n = 5;

 if ($n>1 & $n <10){
 echo "el numero $n es mayor a 1 y menor a 10.";
 }else {
    echo "el numero $n  no es mayor a 1 ni menor a 10.";
}
?>
<br>
<hr>
<h3>3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.</h3>
<?php
    $n = 15;

    if ($n>10){
    echo "el numero $n es mayor a 10";
    }   elseif ($n <2){
        echo "el numero $n es  menor a 2.";
    }else {
       echo "el numero $n es  un numero entre 2 y 10";
   } 
?>
<br>
<hr>
<h3>4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.</h3>
<?php
  $numero1 = 4;
  $numero2 = 2;
  echo "Numero 1 es = $numero1 y Numero 2 es = $numero2<br>" ;
  if ($numero1 > $numero2 ){
  // echo "la suma es=" . ($numero1+$numero2) . "<br>la resta es= " . ($numero1-$numero2) . ;
  }elseif ($numero1 < $numero2){
 //s echo "la multiplicacion es=". ($numero1 * $numero2) ."la divicion es=".floor($numero2 / $numero1).;
}else {
   echo "Los numeros son iguales";
} 
?>
<br>
<hr>
</body>
</html>