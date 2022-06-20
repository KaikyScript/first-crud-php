<?php
session_start();
include_once 'conexao.php';

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);

    $querySelect = $con->query("SELECT email FROM tb_clientes");

    $array_emails = [];

    while($emails = $querySelect->fetch_assoc()):
        $emails_existentes = $emails['email'];
        array_push($array_emails, $emails_existentes);
endwhile;



/* Verificação E-mail*/

if(in_array($email, $array_emails)):
    $_SESSION['msg'] = "<p class='center red-text'>".'Já existe um cliente cadastrado com esse email'."</p>";
    header("Location:../");
else:
    $queryInsert = $con->query("insert into tb_clientes (id, nome, email, telefone) values(default, '$nome', '$email', '$telefone')");
    $affected_rows = mysqli_affected_rows($con);

    if($affected_rows > 0):
        $_SESSION['msg'] = "<p class='center green-text'>".'Cadastro efetuado com Sucesso'."</p>";
        header("Location:../");
    endif;
endif;