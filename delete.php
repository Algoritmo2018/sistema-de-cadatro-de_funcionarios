<?php
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
    $nome= mysqli_escape_string($connect, $_POST['nome']);
    $data_de_nascimento=mysqli_escape_string($connect, $_POST['datanascimento']);
    $bi=mysqli_escape_string($connect, $_POST['bi']);
    $morada=mysqli_escape_string($connect, $_POST['morada']);
    $data_de_contratacao=mysqli_escape_string($connect, $_POST['datacontratacao']);
    $email=mysqli_escape_string($connect, $_POST['email']);
    $telefone=mysqli_escape_string($connect, $_POST['telefone']);
    $salario=mysqli_escape_string($connect, $_POST['salario']);
    $horas_de_trabalho_por_dia=mysqli_escape_string($connect, $_POST['htd']);
    $cargo=mysqli_escape_string($connect, $_POST['cargo']);
    $foto=mysqli_escape_string($connect, $_POST['foto']);

    $id= mysqli_escape_string($connect, $_POST['id']);

    $sql="DELETE FROM cadastrados WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        header('Location: cadastrados.php?Deletado_com_sucesso');
    else:
        header('Location: cadastrados.php?Erro_ao_deletar');
    endif;
endif;