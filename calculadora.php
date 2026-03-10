<?php
$operacion = $_POST['op'];
$numero1 = $_POST['n1'];
$numero2 = $_POST['n2'];

//abcdef

function calcular($operacion, $numero1, $numero2) {

    switch ($operacion) {

        case "s":
            $resultado = $numero1 + $numero2;
            break;

        case "r":
            $resultado = $numero1 - $numero2;
            break;

        case "m":
            $resultado = $numero1 * $numero2;
            break;

        case "d":
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                $resultado = "Error: no es pot dividir per zero";
            }
            break;

        default:
            $resultado = "Error: operació desconeguda";
            break;
    }

    return $resultado;
}

$resultado = calcular($operacion, $numero1, $numero2);

echo $resultado;
?>
