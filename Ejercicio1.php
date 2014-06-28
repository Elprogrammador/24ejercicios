<head>
        <title>Ejercicio Número 1.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
$x = 8; 
$y = 9;

echo "1.- Mira esta serie: 7, 6, 8, 4, 9, 2, 10, 0, 11, -2, ...<br>
Cree una función que recibe dos enteros: x e y. Si alguno de ellos es 0 o negativo, o si son mayores que 255, la función debe devolver -1<br>
De lo contrario, la función debe devolver la suma de los elementos X e Y de la serie.<br>
Por ejemplo: Si la función recibe x = 1, y = 3, se debería devolver: 15 (Debido a que la suma de la primera, más el tercer argumento es 7 +8 = 15).. Si la función recibe x = 8, y = 9, es conveniente devolver 11. (Debido a que la suma de la octava más el elemento noveno es 0 11 = 11).<br>
La función recibirá 2 enteros, y devuelve un entero.<br><br>
Vamos a Predefinir X como 8 y Y como 9.<br><br>";

$resultadofinal = calcularnumero($x,$y);
echo "El resultado es ".$resultadofinal;

function calcularnumero($x,$y){
    $numero1 = 0;
    $numero2 = 0;
    $resultado = -1;
    $num1 = 7;
    $num2 = 6;
    if ($x > 255 || $y > 255 || $x <= 0 || $y <= 0) {
        return $resultado;
    } 
    else{
        for ($i = 1; $i <= $x; $i++)
        {
            if ($i == 1)
            {
                $numero1 = $num1;
            }
            if ($i == 2)
            {
                $numero1 = $num2;
            }
            if ($i > 2)
            {
                if ($i % 2 != 0)
                {
                    $num1 = $num1 + 1;
                    $numero1 = $num1;
                }
                else
                {
                    $num2 = $num2 - 2;
                    $numero1 = $num2;
                }
            }
        }
        $num1 = 7;
        $num2 = 6;
        for ($j = 1; $j <= $y; $j++)
        {
            if ($j == 1)
            {
                $numero2 = $num1;
            }
            if ($j == 2)
            {
                $numero2 = $num2;
            }
            if ($j > 2)
            {
                if ($j % 2 != 0)
                {
                    $num1 = $num1 + 1;
                    $numero2 = $num1;
                }
                else
                {
                    $num2 = $num2 - 2;
                    $numero2 = $num2;
                }
            }
        }
        $resultado = $numero1 + $numero2;
        return $resultado;
    }        
}

?>

