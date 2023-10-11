<?php
    function CelsiusFahrenheit(int | float $num): float {
        return ($num * 9 / 5) + 32;
    }

    function FahrenheitCelsius(int | float $num): float {
        return ($num - 32) * 5 / 9;
    }

    function CelsiusKelvin(int | float $num): float {
        return $num + 273.15;
    }

    function KelvinCelsius(int | float $num): float {
        return $num - 273.15;
    }

    function KelvinFahrenheit(int | float $num): float {
        return (($num - 273.15) * 9 / 5 + 32);
    }

    function FahrenheitKelvin(int | float $num): float {
        return (($num - 32) * 5 / 9 + 273.15);
    }
?>

<?php
    function cambioTemperatura(int|float $temp, $U1, $U2){
        $x = match (true) {
            $U1 == "C" && $U2 == "F" => CelsiusFahrenheit($temp),
            $U1 == "F" && $U2 == "C" => FahrenheitCelsius($temp),
            $U1 == "C" && $U2 == "K" => CelsiusKelvin($temp),
            $U1 == "K" && $U2 == "C" => kelvinCelsius($temp),
            $U1 == "K" && $U2 == "F" => kelvinFahrenheit($temp),
            $U1 == "F" && $U2 == "K" => FahrenheitKelvin($temp),
            $U1 == $U2 => $temp,
            default => "unidad erronea"
        };
        return $x;
    }
?>

<?php
    function maximo_3(){
        if ($_SERVER ["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST ["num1"];
            $num2 = $_POST["num2"];
            $num3 = $_POST["num3"];
            if (($num1 > $num2) && ($num1 > $num3)){
                echo "<h4>El número más grande es: $num1</h4>";
            } else if (($num2 > $num1) && ($num2 > $num3)){
                return "<h4>El número más grande es: $num2</h4>";
            } else if (($num3 > $num1) && ($num3 > $num2)){
                return "<h4>El número más grande es: $num3</h4>";
            } else {
                return "<h4>Los tres números son iguales $num3</h4>";
            }
        }
    }
?>

<?php
    function calcularPotencia(int $base, int $exponente) : int {
        $resultado = 1;
        if ($exponente >= 0) {
            for($i = 1; $i < $exponente; $i++) {
                $resultado = $resultado * $base;
            }
            return $resultado;
        }
    }
?>

<?php
    function calcularPrimo(int $n): array {
        $primos = [];
        for ($i = 2; $i < $n; $i++) {
            $is_Primo = true;
            for ($j = 2; $j < $i - 1; $j++) {
                if ($i % $j == 0) {
                    $is_Primo = false;
                }
            }
            if ($is_Primo) {
                $primos[] = $i;
            }
        }
        return $primos;
    }
?>