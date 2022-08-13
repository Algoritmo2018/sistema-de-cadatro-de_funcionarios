<?php
require_once 'db_connect.php';

if(!isset($_GET['nome_do_funcionario'])):
    header("Location: busca.php");
    exit;
endif;

$nome_do_funcionario="%".trim($_GET['nome_do_funcionario'])."%";





$sth->bind_param(':nome', $nome_do_funcionario, PDO::PARAM_STR);
$sth->execute();

$resultado=$sth->fetchAll(PDO::FETCH_ASSOC);

print_r($resultado);
?>