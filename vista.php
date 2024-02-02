<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
        <h1 class="titulo">Ordenador</h1>
</body>
</html>


<?php
class NumerosVista {
    public function mostrarNumerosOrdenados($numeros) {
        echo "Números ordenados: " . implode(', ', $numeros);
    }
}
?>
