<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $assunto = htmlspecialchars($_POST["assunto"]);
    $texto = htmlspecialchars($_POST["mensagem"]);

    if (!empty($nome) && !empty($email) && !empty($texto)) {
        $mensagem = "Mensagem enviada com sucesso!";
    } else {
        $mensagem = "Preencha todos os campos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: white;
            padding: 30px;
            width: 400px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px;
            box-sizing: border-box;
        }

        textarea {
            height: 120px;
            resize: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .mensagem {
            text-align: center;
            margin-bottom: 15px;
            color: green;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Entre em Contato</h1>

    <?php if ($mensagem != ""): ?>
        <p class="mensagem"><?php echo $mensagem; ?></p>
    <?php endif; ?>

    <form method="POST" action="">

        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu nome">

        <label>E-mail:</label>
        <input type="email" name="email" placeholder="Digite seu e-mail">

        <label>Assunto:</label>
        <input type="text" name="assunto" placeholder="Digite o assunto">

        <label>Mensagem:</label>
        <textarea name="mensagem" placeholder="Digite sua mensagem"></textarea>

        <button type="submit">Enviar mensagem</button>

    </form>

</div>
  <h1 style="text-align: center;
    color: dark-blue;
    font-family: 'Times New Roman', Time, serif;"> <a href="\phpsesi\aula_tarde\index.html">Voltar</a> </h1>
</body>
</html>