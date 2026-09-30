<?php
//Recebendo os dados digitados pelo usuário

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = (int)$_POST['idade'];

//validação simples

if ($idade < 18) {
    echo "<p> Desculpe, mas apenas usuários acima de 18 anos podem se cadastrar </p>";
} else {
    // Resultado aparece na tela formatado
    echo "<h3> Dados recebidos: </h3>";
    echo "<p><strong>  Nome:</strong> $nome</p>";
    echo "<p><strong>  E-mail:</strong> $email</p>";
    echo "<p><strong>  Idade:</strong> $idade</p>";

    //Deppuração dos dados recebidos
    var_dump($_POST);
}

?>