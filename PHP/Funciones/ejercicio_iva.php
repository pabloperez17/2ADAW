<?php
    function precioConIva(float $precio, string $tipo_iva)
    {
        $precio = match (true) {
            $tipo_iva == "GENERAL" => $precio * 1.21,
            $tipo_iva == "REDUCIDO" => $precio * 1.1,
            $tipo_iva == "SUPERREDUCIDO" => $precio * 1.04,
            $tipo_iva == "SIN IVA" => $precio,
            default => "Error"
        };
        return $precio;
    }
    function precioSinIva(float $precio, string $tipo_iva)
    {
        $precio = match (true) {
            $tipo_iva == "GENERAL" => $precio * 0.79,
            $tipo_iva == "REDUCIDO" => $precio * 0.9,
            $tipo_iva == "SUPERREDUCIDO" => $precio * 0.96,
            $tipo_iva == "SIN IVA" => $precio,
            default => "Error"
        };
        return $precio;
    }