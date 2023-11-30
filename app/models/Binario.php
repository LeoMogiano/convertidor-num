<?php

require_once('../app/models/ConversionNum.php');


class Binario extends ConversionNum
{
    protected function realizarConversion(int $numero, string $resultado): string
    {
        while ($numero > 0) {
            $residuo = $numero % 2;
            $resultado = $residuo . $resultado;
            $numero = floor($numero / 2);
        }

        return $resultado;
    }
}
