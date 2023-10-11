<?php
    function sumaDosV1(int $num1, int $num2) {
        //Instrucciones
        return $num1 + $num2;
    }

    function sumaDosV2(int $num1, int $num2) {
        //Instrucciones
        return $num1 + $num2;
    }

    function sumaDosV3(int | float $num1, int | float $num2) {
        //Instrucciones
        return $num1 + $num2;
    }

    function sumaDosV4(int | float $num1, int | float $num2): float {
        //Instrucciones
        return $num1 + $num2;
    }

    $resultado = sumaDosV3(1.5, 3);
    echo "<h3>Resultado 1: $resultado</h3>";
    echo "<h3>Resultado 2: " . sumaDosV4(3, 5) . "</h3>";
?>

<?php
    function calificacion(int |float $nota) {
        $calificacion = match (true) {
            $nota >= 0 && $nota < 5 => "Suspenso",
            $nota >= 5 && $nota < 7 => "Aprobado",
            $nota >= 7 && $nota < 9 => "Notable",
            $nota >= 9 && $nota <= 10 => "Sobresaliente",
            default => "Error"
        };
        return $calificacion;
    }
    echo "<h3>Resultado 3: " . calificacion(7) . "</h3>";
?>

<?php
    function calcula_primo(int $num) {
        for ($x = 2; $x <= $num; $x++) {
            $primo = true;
            for ($y = 2; $y <= $x - 1 && $primo; $y++) {
                if ($x % $y == 0) {
                    $primo = false;
                    break;
                }
            }
            if ($primo) echo "<li>$x</li>";
        }
    }
    echo calcula_primo(rand(1, 25));
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
    print_r(calcularPrimo(36));
?>

<?php
    function esPrimo(int $numero): bool {
        $primo = true;
        for ($j = 2; $numero - 1 && $primo; $j++) {
            if ($numero % $j == 0) {
                $primo = false;
                break;
            }
        }
        return $primo;
    }
    $primo = esPrimo(7);
    if ($primo) echo "<h3>Es primo</h3>";
    else echo "<h3>No es primo</h3>";
?>