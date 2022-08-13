<?php
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-pesquisar'])):
    $erros = array();
    $pequisar= mysqli_escape_string($connect, $_POST['pesquisar']);
//Para verificar si os campos estão vazios
    if(empty($pesquisar) ):
        $erros[] = "<li> O campo  precisa se preenchido</li>";
    else:
        $sql= "SELECT login FROM cadastrados WHERE login = '$pesquisar'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0):
            
            $sql = "SELECT * FROM cadastrados WHERE nome = '$pesquisar' " ;
            $resultado= mysqli_query($connect, $sql);

                if(mysqli_num_rows($resultado)==1):
                    $dados = mysqli_fetch_array($resultado);
                    header('Location: resultado.php');
               endif;
        else:
            $erros[] = "<li>Funcionario inexistente</li>";
    
        endif;
    endif;
endif;
?>



<?php
//Conexão
include_once 'db_connect.php';

//Message
include_once 'message.php';
?>
<html>
    <head>
    <link rel="stylesheet" href="css/bootstrap.css" >
    </head>
    <body>
        <h1>Funcionários Cadastrados</h1>
<a href="formulario.php">Adicionar Funcionario </a><br>
<a href="pesquisa.php">Pesquisar funcionario</a>
            <br><br><br><br>
            <table  border="1"  class="table table-bordered">
            <tr>
                <th scope="col"> Nome</th> 
                <th scope="col">Data de Nascimento</th>       
                <th scope="col"> Nªde BI</th>          
                <th scope="col">Morada</th>              
                <th scope="col">Data de Contratação</th>      
                <th scope="col">Email</th>                    
                <th scope="col">Telefone</th>                  
                <th scope="col">Salário</th>                   
                <th scope="col">Horas de Trabalho por dia </th>
                <th scope="col">Cargo</th>                    
                <th scope="col">Foto</th> 
               </tr>         
               <?php
                    $sql="SELECT * FROM cadastrados";
                    $resultado= mysqli_query($connect, $sql);
                   
                    if(mysqli_num_rows($resultado)>0):
                        

                    
                   
                    while($dados=mysqli_fetch_array($resultado)):
               ?>
            <tr>
            <form action="editar.php" method="post">
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
                <td> 
                <a href="editar.php?id=<?php echo $dados['id']; ?>">Editar</a> </td>
                </form>
                
                <td> <form action="delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $dados['id'];?>">    
                <button type="submit" name="btn-deletar" class="btn btn-danger">Apagar</button></form></td>
                
                <?php endwhile;
                      endif; ?>
            </tr> 
                  
            </table>
            

        </body>
</html>