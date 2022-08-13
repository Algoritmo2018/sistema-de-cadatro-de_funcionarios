<?php
//Sessão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
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

    $sql="UPDATE cadastrados SET nome = '$nome', datanascimento='$data_de_nascimento', bi='$bi', morada='$morada', datacontratacao='$data_de_contratacao', email='$email', telefone='$telefone', salario='$salario', htd='$horas_de_trabalho_por_dia', cargo='$cargo', foto='$foto' WHERE id='$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem']="Actualizado_com_sucesso!";
        header('Location: cadastrados.php?Actualizado_com_sucesso');

       
    else:
        $_SESSION['mensagem']="Erro_ao_actualizar";
        header('Location: cadastrados.php?Erro_ao_actualizar');
    endif;
endif;