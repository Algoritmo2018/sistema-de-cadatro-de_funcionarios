<?php
//Sessao
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-mandar'])):

//Sanitização
$nome= filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$bi= filter_input(INPUT_POST, 'bi', FILTER_SANITIZE_SPECIAL_CHARS);
$morada=filter_input(INPUT_POST, 'morada', FILTER_SANITIZE_SPECIAL_CHARS);
$email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$cargo=filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_SPECIAL_CHARS);
$data_de_nascimento=filter_input(INPUT_POST, 'datanascimento', FILTER_SANITIZE_NUMBER_INT);



    $data_de_contratacao=mysqli_escape_string($connect, $_POST['datacontratacao']);
    $telefone=mysqli_escape_string($connect, $_POST['telefone']);
    $salario=mysqli_escape_string($connect, $_POST['salario']);
    $horas_de_trabalho_por_dia=mysqli_escape_string($connect, $_POST['htd']);
    $foto=mysqli_escape_string($connect, $_POST['foto']);
   
//Verificando si os campos estão vazios

if(empty($nome) or empty($data_de_nascimento) or empty($bi) or empty($morada) or  empty($data_de_contratacao) or  empty($email) or  empty($telefone) or  empty($salario) or empty($horas_de_trabalho_por_dia) or  empty($cargo) or  empty($foto)):
    header('Location: formulario.php?Campos_devem_ser_preenchidos');

else:
    $sql="INSERT INTO cadastrados (nome, datanascimento, bi, morada, datacontratacao, email, telefone, salario, htd, cargo, foto) VALUES ('$nome', '$data_de_nascimento', '$bi', '$morada',' $data_de_contratacao', '$email', '$telefone', '$salario', '$horas_de_trabalho_por_dia', '$cargo', '$foto')";
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem']="Cadastrado com sucesso";
        header('Location: cadastrados.php?sucesso');
    else:
        $_SESSION['mensagem']="Cadastrado com sucesso";
        header('Location: cadastrados.php?erro');
    endif;
endif;
endif;


?>

