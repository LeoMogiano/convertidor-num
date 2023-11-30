<?php

require_once('../app/models/ConversionNum.php');


class Octal extends ConversionNum
{
    protected function realizarConversion(int $numero, string $resultado) : string
    {
        while ($numero > 0) {
            $residuo = $numero % 8;
            $resultado = $residuo . $resultado;
            $numero = floor($numero / 8);
        }

        return $resultado;
    }
}
