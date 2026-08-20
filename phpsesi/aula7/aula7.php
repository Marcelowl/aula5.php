<?php
$catalogoServico = [ 
    ["titulo" => "Banho e tosa", "genero" => "Serviço", "ano" => 2026, "disponibilidade" => true], 
    ["titulo" => "Ração Premium", "genero" => "Alimento", "ano" => 2026, "disponibilidade" => true], 
    ["titulo" => "Brinquedo Interativo", "genero" => "Acessório", "ano" => 2026, "disponibilidade" => true], 
    ["titulo" => "Vacina Antirrábica", "genero" => "Serviço", "ano" => 2026, "disponibilidade" => true], 
    ["titulo" => "Cama Confortável", "genero" => "Acessório", "ano" => 2026, "disponibilidade" => true]

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
    font-family: 'Times New Roman', Time, serif;"> Catálogo de Títulos</h1>
    <table>
        <tr>
            <th>Serviço</th>
            <th>Gênero</th>
            <th>Ano</th>
            <th>Disponibilidade</TH>
        </tr>
<?php
  foreach ($catalogoServico as $Serviço) {
            echo "<tr>";
            echo "<td>" . $Serviço["titulo"] . "</td>";
            echo "<td>" . $Serviço["genero"] . "</td>";
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

</body>
</html>
