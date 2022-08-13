<?php
/*Cadastro de funcionários com informações como nome, n° do bi, morada, data de contratação,
 contactos(incluindo email), salário, horas de trabalho por dia, 
 foto dos funcionários e cargo(com opção de filtragem de dados na pesquisa dos funcionários).*/

?>


<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de funcionarios</title>
        <link rel="stylesheet" href="css/bootstrap.css" >    </head>
    <body class="bg-dark">
        <pre>
 
        <h1>Cadastro de Funcionarios</h1>
        <form action="create.php" method="POST">
        Nome:                      <input type="text" name="nome" >
        Data de Nascimento:        <input type="text" name="datanascimento" maxlength="4" min="1956" >
        Nªde BI:                   <input type="text" name="bi" >
        Morada:                    <input type="text" name="morada" >
        Data de Contratação:       <input type="date" name="datacontratacao" >
        Email:                     <input type="email" name="email" >
        Telefone:                  <input type="number" name="telefone">
        Salário:                   <input type="text" name="salario">
        Horas de Trabalho por dia: <input type="number" name="htd" min="1" max="12">
        Cargo:                     <input type="text" name="cargo">
        Foto:                      <input type="file" name="foto">
                                   
                                   <button type="submit" name="btn-mandar" class="btn btn-success">Cadastrar</button> <a href="cadastrados.php">Ver cadastrados</a>
        </form>


        </pre>

    </body>
</html> 