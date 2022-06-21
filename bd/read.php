<?php
include_once 'conexao.php';

$querySelect = $con->query("select * from tb_clientes");

while($registros = $querySelect->fetch_assoc()):
    $id = $registros['id'];
    $nome = $registros['nome'];
    $email = $registros['email'];
    $telefone = $registros['telefone'];

    echo "<tr>";
    echo "<td>$nome</td><td>$email</td><td>$telefone</td><td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></td><td><a href='bd/delete.php?id=$id'><i class='material-icons'>delete</i></td>";
    echo "</tr>";
endwhile;

?>
