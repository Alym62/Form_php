<?php
include('cadastrar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/formulario.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <form action="index.php" method="POST">
                <legend>Cadastro de usuarios</legend>
                <div class="image">
                    <img src="./css/images/logo.png" alt="logo" width="85px">
                </div>
                <br>
                <div class="inputBox">
                    <label for="Nome">Nome Completo:</label>
                    <input type="text" name="Nome" required>
                </div>
                <div class="inputBox">
                    <label for="email">Email:</label>
                    <input type="email" name="email" required>
                </div>
                <div class="inputBox">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" required>
                </div>
                <input type="submit" name="submit" id="submit">
            </form>
        </div>
    </div>
</body>

</html>