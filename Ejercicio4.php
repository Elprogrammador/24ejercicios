<head>
        <title>Ejercicio Número 4.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php

$S1 = "La vida es bella";
$S2 = "El santo";
echo "4. Dadas dos cadenas S1 y S2. Eliminar en S1 todos esos caracteres que se presentan en S2. Devolver un S1 limpio con los caracteres eliminados. Cualquier carácter se elimina tanto en mayúsculas como en minúsculas.
Por ejemplo, dado:<br>
S1 = 'La vida es bella' S2 = 'El santo'<br>
La función debe devolver: 'vidb'.<br>
La función recibirá 2 cadenas y devolver una cadena.<br><br>";
$S1Final = eliminarCaracteres($S1, $S2);
echo "El resultado de la primera cadena limpia es: "."'".$S1Final."'";
function eliminarCaracteres($S1,$S2){
    $S1 = strtolower(str_replace(' ','',$S1));
    $S2 = strtolower(str_replace(' ','',$S2));
    $S1Final = "";
    for($i=0; $i<strlen($S1); $i++){
    $norepetida = 0;
        for($j=0; $j<strlen($S2); $j++){
            if ($S1[$i] == $S2[$j]) {
                $norepetida = 1;
            }
        }
        if ($norepetida == 0)
        {
            $S1Final = $S1Final.$S1[$i];
        }
    }
    return $S1Final;
}
?>