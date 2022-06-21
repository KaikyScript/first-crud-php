<?php
include_once 'conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$queryDelete = $con->query("delete from tb_clientes where id='$id'");

if(mysqli_affected_rows($con) > 0):
    header("Location:../consultas.php");
endif;

?>