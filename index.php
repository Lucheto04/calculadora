<?php 

    $numero = (int)($_POST ["numero"]);
    $numero2 = (float)($_POST ["numero2"]);
    $numero1 = (float)($_POST ["numero1"]);
    $operacion = ($_POST ["operadores"]);

    $operador = ($_POST ["operador"]);
    $resultado = "";

     
    switch ($operacion) {
        case "+":
            $resultado = $numero1 + $numero2;
            break;
        case "-":
            $resultado = $numero1 - $numero2;
            break;
        case "*":
            $resultado = $numero1 * $numero2;
            break;
        case "/":
            $resultado = $numero1 / $numero2;
            break;
    };
    echo $numero;
    echo $operador;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form  method="POST">
        <h1>Calculadora</h1>
        <div>
            <span><button value="7" name="numero" class="boton">7</button></span>
            <span><button value="8" name="numero" class="boton">8</button></span>
            <span><button value="9" name="numero" class="boton">9</button></span>
            <span><button value="suma" name="operador" class="boton">+</button></span>
        </div>
        <div>
            <span><button value="4" name="numero" class="boton">4</button></span>
            <span><button value="5" name="numero" class="boton">5</button></span>
            <span><button value="6" name="numero" class="boton">6</button></span>
            <span><button value="resta" name="operador" class="boton">-</button></span>
        </div>
        <div>
            <span><button value="1" name="numero" class="boton">1</button></span>
            <span><button value="2" name="numero" class="boton">2</button></span>
            <span><button value="3" name="numero" class="boton">3</button></span>
            <span><button value="multiplicacion" name="operador" class="boton">*</button></span>
        </div>
        <div>
            <span><button value="0" name="numero" class="boton">0</button></span>
            <span><button value="." name="punto" class="boton">.</button></span>
            <span><button value="=" name="resultado" class="boton">=</button></span>
            <span><button value="division" name="operador" class="boton">/</button></span>
        </div>

        <input type="number" name="numero1" class="formulario"> <br>
        <input type="number" name="numero2" class="formulario"> <br>
        <select name="operadores" class="formulario">
            <option name="suma">+</option>
            <option name="resta">-</option>
            <option name="multiplicacion">*</option>
            <option name="division">/</option>
        </select>  <br>
        <input type="submit" value="=" class="formulario"><br>

        <input type="text" value="<?php echo $resultado;?>" class="formulario" disabled></input>
    </form>


</body>
</html>