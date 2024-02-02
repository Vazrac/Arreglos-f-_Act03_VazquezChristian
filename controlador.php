<?php
require_once 'modelo.php';
require_once 'vista.php';

class NumerosControlador {
    private $modelo;
    private $vista;

    public function __construct($modelo, $vista) {
        $this->modelo = $modelo;
        $this->vista = $vista;
    }

    public function procesarNumeros($num1, $num2, $num3, $num4, $num5) {
        $numeros = array($num1, $num2, $num3, $num4, $num5);
        $numerosOrdenados = $this->modelo->ordenarAscendente($numeros);
        $this->vista->mostrarNumerosOrdenados($numerosOrdenados);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = isset($_POST['num1']) ? (int)$_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? (int)$_POST['num2'] : 0;
    $num3 = isset($_POST['num3']) ? (int)$_POST['num3'] : 0;
    $num4 = isset($_POST['num4']) ? (int)$_POST['num4'] : 0;
    $num5 = isset($_POST['num5']) ? (int)$_POST['num5'] : 0;
    $modelo = new NumerosModelo();
    $vista = new NumerosVista();
    $controlador = new NumerosControlador($modelo, $vista);
    $controlador->procesarNumeros($num1, $num2, $num3, $num4, $num5);
} else {
    echo "<form method='post' action=''>";
    echo "Número 1: <input type='number' name='num1' required><br>";
    echo "Número 2: <input type='number' name='num2' required><br>";
    echo "Número 3: <input type='number' name='num3' required><br>";
    echo "Número 4: <input type='number' name='num4' required><br>";
    echo "Número 5: <input type='number' name='num5' required><br>";
    echo "<button type='submit'>Ordenar</button>";
    echo "</form>";
}
?>
