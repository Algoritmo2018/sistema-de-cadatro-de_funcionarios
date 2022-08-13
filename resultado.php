<?php
//Conexão
require_once 'db_connect.php';
?>
<html>
    <head>

    </head>
    <body>
        <h1>Resultado da pesquisa</h1>

            <table  border="1">
            <tr>
                <td > Nome:</td> 
                <td>Data de Nascimento:</td>       
                <td> Nªde BI:</td>          
                <td>Morada:</td>              
                <td>Data de Contratação:</td>      
                <td>Email:</td>                    
                <td>Telefone:</td>                  
                <td>Salário:</td>                   
                <td>Horas de Trabalho por dia: 
                <td>Cargo:</td>                    
                <td>Foto:</td> 
               </tr>         
               <?php
if(isset($_POST['btn-pesquisar'])):
    $erros = array();
    $pesquisar= mysqli_escape_string($connect, $_POST['pesquisar']);
//Para verificar si os campos estão vazios
    if(empty($pesquisar)):
        $erros[] = "<li> O campo precisa se preenchido</li>";
    else:
        $sql= "SELECT nome FROM cadastrados WHERE nome = '$pesquisar'";

        $consulta ="SELECT datanascimento, email FROM cadastrados WHERE nome LIKE ‘$pesquisar’";
       

      /*  printf("Nome: ", mysql_result($resultado,0,"nome"), "<br>\n");
        printf("e-mail: ", mysql_result($resultado,0,"email"),“<br>”);*/
        $resultado = mysqli_query($connect, $sql);
 $resultado = mysqli_query($consulta, $conexao);

        if(mysqli_num_rows($resultado) >0):

            while($dados=mysqli_fetch_array($resultado)):
                ?>
             <tr>
    
                 <td ><?php echo $dados['nome'];?> </td> 
                 <td ><?php echo $dados['datanascimento'];?> </td> 
                 <td > <?php echo $dados['bi'];?></td> 
                 <td > <?php echo $dados['morada'];?></td> 
                 <td ><?php echo $dados['datacontratacao'];?> </td> 
                 <td ><?php echo $dados['email'];?>  </td> 
                 <td > <?php echo $dados['telefone'];?></td> 
                 <td > <?php echo $dados['salario'];?></td> 
                 <td ><?php echo $dados['htd'];?> </td> 
                 <td><?php echo $dados['cargo'];?></td>
                 <td><img src=" fotos/<?php echo $dados['foto'];?>" alt="" width="130" height="110"></td>
              
                 
    
                 
                 <?php endwhile;
                       endif; 
        endif;
                        
                      

        else:
            $erros="Não existe";
        endif;

       
                   ?>
            </tr> 
                  
            </table>
            

        </body>
</html>