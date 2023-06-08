<?php
session_start();
$deleteAll = $_POST['deleteAll'];
$delete1 = $_POST['delete1'];

if (isset($_POST["numero"])) 
    $numero = (int)$_POST["numero"];
    

    if ($deleteAll == "c") {
        $_SESSION['num1'] = "";
    }
    else if ($delete1 == "<=") {
        $_SESSION['num1'] = substr($_SESSION['num1'],0, -1);
    }
    elseif (isset($_SESSION['num1'])) {
        $_SESSION['num1'] .= $numero;
    }
    else {
        $_SESSION['num1'] = $numero;
    }


if (isset($_POST["operador"])) {
    $operador = $_POST["operador"];
    $_SESSION['num1'] .= $operador;
}

if (isset($_POST["PI"])) {
    $pi = (float)$_POST["PI"];
    $_SESSION['num1'] .= $pi;
}

$display = isset($_SESSION['num1']) ? $_SESSION['num1'] : "";

if (isset($_POST["resultado"])) {

    $resultado = eval('return ' . $_SESSION['num1'] . ';');
    $display .= "=" . $resultado;

    unset($_SESSION['num1']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <form  method="POST">
        <h1>Calculadora</h1>
        <textarea name="" id="" cols="23" rows="2" type="text" placeholder="<?php echo $display; ?>"  class="formulario" disabled></textarea>
        <div>
            <span><button value="7" name="numero" class="boton">7</button></span>
            <span><button value="8" name="numero" class="boton">8</button></span>
            <span><button value="9" name="numero" class="boton">9</button></span>
            <span><button value=" +" name="operador" class="botonOperador">+</button></span>
            <span><button value=" %" name="operador" class="botonOperador">%</button></span>
        </div>
        <div>
            <span><button value="4" name="numero" class="boton">4</button></span>
            <span><button value="5" name="numero" class="boton">5</button></span>
            <span><button value="6" name="numero" class="boton">6</button></span>
            <span><button value=" -" name="operador" class="botonOperador">-</button></span>
            <span><button value="<=" name="delete1" class="botonDelete">←</button></span>
        </div>
        <div>
            <span><button value="1" name="numero" class="boton">1</button></span>
            <span><button value="2" name="numero" class="boton">2</button></span>
            <span><button value="3" name="numero" class="boton">3</button></span>
            <span><button value=" *" name="operador" class="botonOperador">*</button></span>
            <span><button value="c" name="deleteAll" class="botonDelete">c</button></span>
        </div>
        <div>
            <span><button value="0" name="numero" class="boton">0</button></span>
            <span><button value="." name="punto" class="boton">.</button></span>
            <span><button value="3.1415" name="PI" class="boton">n</button></span>
            <span><button value=" /" name="operador" class="botonOperador">/</button></span>
            <span><button value="=" name="resultado" class="botonResultado">=</button></span>
        </div>
    </form>
</body>
</html>