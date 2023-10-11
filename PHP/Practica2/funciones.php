<?php
//EJERCICIO 1
function EuroDolar(int | float $num): float{
    return ($num * 1.06);
}

function EuroYen(int | float $num): float{
    return ($num * 158.02);
}

function DolarEuro(int | float $num): float{
    return ($num * 0.94);
}

function DolarYen(int | float $num): float{
    return ($num * 148.87);
}

function YenEuro(int | float $num): float{
    return ($num * 0.0063);
}

function YenDolar(int | float $num): float{
    return ($num * 0.0067);
}

function cambiarDivisa(int|float $divisa, $U1, $U2){
    $x = match (true) {
        $U1 == "EURO" && $U2 == "DOLAR" => EuroDolar($divisa),
        $U1 == "EURO" && $U2 == "YEN" => EuroYen($divisa),
        $U1 == "DOLAR" && $U2 == "EURO" => DolarEuro($divisa),
        $U1 == "DOLAR" && $U2 == "YEN" => DolarYen($divisa),
        $U1 == "YEN" && $U2 == "EURO" => YenEuro($divisa),
        $U1 == "YEN" && $U2 == "DOLAR" => YenDolar($divisa),
        $U1 == $U2 => $divisa,
        default => "Unidad erronea"
    };
    return $x;
}

//EJERCICIO 2
function sumatorio(int $num1){
    $suma = 0;
    for($i = 0; $i <= $num1; $i++){
        $suma += $i;
    }
    return $suma;
}

function factorial(int $numfact){
    do{
        $suma = 1;
        for($i = 1; $i <= $numfact; $i++){
            $suma *= $i;
        }
    }while($numfact < 1);
    return $suma;
}
//EJERCICIO 3
function comprobarEstado(int $numeroEspecies) : string {
    if($numeroEspecies == 0){
        return "Extinto";
    }else if($numeroEspecies <= 500){
        return "En peligro crítico";
    }else if($numeroEspecies <= 2000){
        return "En peligro";
    }else{
        return "Amenazado";
    }
}

function comprobarEspecie(string $comprobar, array $animales) : string{
    foreach($animales as $animal){
        list($nombre, $clase, $ejemplares) = $animal;
        if($nombre === $comprobar){
            return comprobarEstado($ejemplares);
        }
    }
    return "No existe el especimen en la tabla";
}
?>