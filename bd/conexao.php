<?php
$utf8 = header("Content-Type: text/html; charset=utf-9");

    $con = new mysqli('localhost', 'root', '', 'db_crud01');
    $con->set_charset('utf8');

?>