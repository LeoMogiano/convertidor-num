<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ConvertidorApp</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/calculadora2.css">
    
</head>

<body>
    <header>
        <div class="container">
            <h1>Bienvenido a la ConvertidorApp</h1>
        </div>
    </header>

    <main>
        <div class="container">

            <h2>Bienvenido a ConvertidorApp - Tu Herramienta para Conversiones Numéricas</h2>
            <p>Realiza conversiones rápidas y precisas entre números decimales, binarios, octales o hexadecimales con nuestra interfaz intuitiva. ¡Simplifica tus tareas numéricas con la comodidad de ConvertidorApp hoy!</p>
            <br>
        </div>
        <?php if (!empty($validacion)): ?>
                <div class="alert alert-danger" role="alert">
                    <?= $validacion ?>
                </div>
            <?php endif; ?>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <form class="calculator-container" action="/conversor" method="post">
                    <label for="num">Número Decimal:</label>
                    <input type="number" id="num" name="num" placeholder="Ingrese el número">

                    <label for="base">Base:</label>
                    <select id="base" name="base" required>
                        <option value="2">Binario</option>
                        <option value="8">Octal</option>
                        <option value="16">Hexadecimal</option>
                    </select>

                    <button class="add-button" type="submit">Convertir</button>
                </form>
            </div>

            <div class="col-md-4">
                <div class="result-container">
                    <h2>Resultado:</h2>
                    <p><?= !empty($r) ? $r : "Ingresa un número para convertir :)"; ?></p>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        <br>

    </main>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> ConvertidorApp</p>
        </div>
    </footer>
</body>

</html>