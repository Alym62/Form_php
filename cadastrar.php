<?php
if (isset($_POST['submit']))
{
    include_once('conexao.php');

    $Nome = $_POST['Nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(Nome,email,senha) VALUES ('$Nome','$email',MD5('$senha'))");
}
