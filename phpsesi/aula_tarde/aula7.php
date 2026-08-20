<?php
$catalogoServico = [ 
    ["titulo" => "Banho e tosa", "Serviços" => "Serviço", "ano" => "R$ 100,00", "disponibilidade" => true], 
    ["titulo" => "Ração Premium", "Serviços" => "Alimento", "ano" => "R$ 200,00", "disponibilidade" => true], 
    ["titulo" => "Brinquedo Interativo", "Serviços" => "Acessório", "ano" => "R$ 150,00", "disponibilidade" => true], 
    ["titulo" => "Vacina Antirrábica", "Serviços" => "Serviço", "ano" => "R$ 80,00", "disponibilidade" => true], 
    ["titulo" => "Cama Confortável", "Serviços" => "Acessório", "ano" => "R$ 300,00", "disponibilidade" => true]

]; 
?>  

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Serviços</title>
<style>
table{
    width: 50% ;
    border-collapse: collapse;
    font-family: 'Courirer New' , Courier, momospace;
    margin: 20px auto;
    border: 1px solid;
}th, td{
    border: 1px solid #ccc;
    padding: 10px;
    text-align: center;
}
</style>
</head>
<body>
    <h1 style="text-align: center;
    color: dark-blue;
    font-family: 'Times New Roman', Time, serif;"> Catálogo de Serviços</h1>
    <table>
        <tr>
            <th>Serviço</th>
            <th>Tipo</th>
            <th>Ano</th>
            <th>Disponibilidade</TH>
            
        </tr>
<?php
  foreach ($catalogoServico as $Serviço) {
            echo "<tr>";
            echo "<td>" . $Serviço["titulo"] . "</td>";
            echo "<td>" . $Serviço["Serviços"] . "</td>";
            echo "<td>" . $Serviço["ano"] . "</td>";
            if ($Serviço["disponibilidade"]) {
                echo "<td>Disponível</td>";
            } else {
                echo "<td>Indisponível</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
        <h1 style="text-align: center;
    color: dark-blue;
    font-family: 'Times New Roman', Time, serif;"> <a href="\phpsesi\aula_tarde\index2.html">Voltar</a> </h1>
</body>
</html>
