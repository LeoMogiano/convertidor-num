<?php

require_once('../app/models/Context.php');
require_once('../app/models/ContextInterface.php');
require_once('../app/models/Binario.php');
require_once('../app/models/Octal.php');
require_once('../app/models/Hexadecimal.php');

// Proxy
class Proxy  implements ContextInterface
{

    // Atributo para almacenar el sujeto real
    private Context $contextReal ;

    public function __construct()
    {
        
    }

    public function conversionNumerica($num,string $base): void
    {
        // Realizar validaciones en el Proxy si es necesario
        $validacion = $this->validar($num);
        if (!empty($validacion)) {
            include(__DIR__ . '/../views/home/index.php');
            return;
        }
        $this->contextReal = new Context(new Binario());
        // Delegar la llamada al sujeto real (RealContext)
        switch ($base) {
            case 2:
                $this->contextReal->setStrategy(new Binario());
                break;
            case 8:
                $this->contextReal->setStrategy(new Octal());
                break;
            case 16:
                $this->contextReal->setStrategy(new Hexadecimal());
                break;
            default:
                $validacion = "<p>Por favor, ingrese una base válida.</p>";
                include(__DIR__ . '/../views/home/index.php');
                return;
        }
        $this->contextReal->conversionNumerica($num, $base);
        
    }

    // Método de validación
    private function validar($num): string
    {
        // Inicializa la variable para almacenar mensajes de error
        $validacion = '';

        // Verifica si $num está definido y no es nulo
        if (!isset($num)) {
            $validacion .= "<p>Error: El número no está definido o es nulo.</p>";
        }

        // Verifica si $num no está vacío
        if (empty($num)) {
            $validacion .= "<p>Error: El número no puede estar vacío.</p>";
        }

        // Verifica si $num es un número y mayor o igual a 0
        if (!is_numeric($num) || $num <= 0) {
            $validacion .= "<p>Error: Ingrese un número positivo.</p>";
        }

        return $validacion; // Retorna el mensaje de error o una cadena vacía si la validación es exitosa
    }
}
