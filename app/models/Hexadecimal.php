<?php

require_once('../app/models/ConversionNum.php');


class Hexadecimal extends ConversionNum
{
    protected function realizarConversion(int $numero, string $resultado): string
    {
        while ($numero > 0) {
            $residuo = $numero % 16;
            $resultado = ($residuo < 10) ? $residuo . $resultado : chr(ord('A') + $residuo - 10);
            $numero = intdiv($numero, 16);
        }

        return $resultado;
    }
}
