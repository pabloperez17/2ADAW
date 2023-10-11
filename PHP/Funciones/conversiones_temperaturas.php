<?php
    function CelsiusFahrenheit(int | float $num): float
    {
        return ($num * 9 / 5) + 32;
    }
    echo "<h3>" . CelsiusFahrenheit(23) . "</h3>";

    function FahrenheitCelsius(int | float $num): float
    {
        return ($num - 32) * 5 / 9;
    }
    echo "<h3>" . FahrenheitCelsius(23) . "</h3>";

    function CelsiusKelvin(int | float $num): float
    {
        return $num + 273.15;
    }
    echo "<h3>" . CelsiusKelvin(23) . "</h3>";

    function KelvinCelsius(int | float $num): float
    {
        return $num - 273.15;
    }
    echo "<h3>" . KelvinCelsius(23) . "</h3>";

    function KelvinFahrenheit(int | float $num): float
    {
        return (($num - 273.15) * 9 / 5 + 32);
    }
    echo "<h3>" . KelvinFahrenheit(23) . "</h3>";

    function FahrenheitKelvin(int | float $num): float
    {
        return (($num - 32) * 5 / 9 + 273.15);
    }
    echo "<h3>" . FahrenheitKelvin(23) . "</h3>";
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
    echo "<h3>" . cambioTemperatura(23, "C", "F") . "</h3>";
?>