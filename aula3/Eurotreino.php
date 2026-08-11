<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
    <h3> Calculo de IMC </h3>
        <form action = ""method = "POST">
            <label>
            Digite seu nome:
            <label>
                <Input type ="text" name ="Nome"> 
            <label> <br>
            <label>
            Digite seu peso:
            <label>
                <Input type ="number" name ="Peso"> 
            <label> <br>
            Digite sua altura:
            <label>
                <Input type ="number" name ="Altura"> 
            <label> <br>
            Calcule seu IMC:
                <button>
                    Calcule seu IMC
                </button>
        </form>
</body>
</html>

<?php
$nome = $_POST['Nome'];
$peso = $_POST['Peso'];
$Altura = $_POST['Altura'];
$IMC = $peso / ($Altura * $Altura);

if ($IMC <= 18.5) {
    print '<br>' . $nome . ', está abaixo do peso';
} elseif ($IMC <= 24.9) {
    print '<br>' . $nome . ', está com peso normal';
} elseif ($IMC <= 29.9) {
    print '<br>' . $nome . ', está com sobrepeso';
} else {
    print '<br>' . $nome . ', está com obesidade';
}
?>
