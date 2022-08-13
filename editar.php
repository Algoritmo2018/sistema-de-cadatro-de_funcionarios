<?php
/*Cadastro de funcionários com informações como nome, n° do bi, morada, data de contratação,
 contactos(incluindo email), salário, horas de trabalho por dia, 
 foto dos funcionários e cargo(com opção de filtragem de dados na pesquisa dos funcionários).*/

//Conexão
include_once 'db_connect.php';

 if(isset($_GET['id'])):
    $id= mysqli_escape_string($connect, $_GET['id']);

    $sql= "SELECT * FROM cadastrados WHERE id= '$id'";
    $resultado=mysqli_query($connect, $sql);
    $dados= mysqli_fetch_array($resultado);
endif;
?>


<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Actualizar</title>
    </head>
    <body>
        <pre>
        
        <h1>Actualizar os Dados do Funcionario</h1>
        <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
        Nome:                      <input type="text" name="nome"  value="<?php echo $dados['nome']; ?>">
        Data de Nascimento:        <input type="number" name="datanascimento" value="<?php echo $dados['datanascimento']; ?>">
        Nªde BI:                   <input type="text" name="bi" value="<?php echo $dados['bi']; ?>" >
        Morada:                    <input type="text" name="morada" value="<?php echo $dados['morada']; ?>">
        Data de Contratação:       <input type="text" name="datacontratacao" value="<?php echo $dados['datacontratacao']; ?>">
        Email:                     <input type="email" name="email" value="<?php echo $dados['email']; ?>">
        Telefone:                  <input type="tel" name="telefone" value="<?php echo $dados['telefone']; ?>">
        Salário:                   <input type="text" name="salario" value="<?php echo $dados['salario']; ?>">
        Horas de Trabalho por dia: <input type="number" name="htd" value="<?php echo $dados['htd']; ?>">
        Cargo:                     <input type="text" name="cargo" value="<?php echo $dados['cargo']; ?>">
        Foto:                      <input type="file" name="foto" value="<?php echo $dados['foto']; ?>">
                                   
                                   <button type="submit" name="btn-editar">Actualizar</button>
        </form>

      
        </pre>

    </body>
</html> 