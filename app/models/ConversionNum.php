<?php


abstract class ConversionNum
{

    final public function conversionNum(int $numero): void
    {
        $original = $numero;

        $resultado = '';

        if ($numero == 0) {
            $resultado = '0';
        }

        $resultado = $this->realizarConversion($numero, $resultado);

        $this->mostrarResultado($original, $resultado);
    }

    // Métodos concretos que pueden ser compartidos por las subclases
    protected function mostrarResultado(int $numero, string $resultado): void
    {

        $r = "<p>El número decimal $numero</p>";
        $r .= "<p>El resultado es $resultado</p>";
        include_once('../app/views/home/index.php');
    }

    // Métodos abstractos que deben ser implementados por las clases concretas
    abstract protected function realizarConversion(int $numero, string $resultado): string;
}
