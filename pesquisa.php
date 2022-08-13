<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Pesquisar</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.css" >   


</head>
<body>

<?php

if (isset($_POST['acao'])) {

$nome = addslashes($_POST['nome']);

try {

$pdo = new PDO('mysql:host=localhost;dbname=bdfuncionarios', 'root', '');

} catch(PDOException $ex) {
echo 'ERRO NA CONEXÃO COM O BANCO: ' . $ex->getMessage();
exit();
}


$query = "SELECT * FROM cadastrados WHERE nome LIKE '%$nome%'";

$pdo = $pdo->prepare($query);
//$pdo->bindValue(':nome', $nome);
$pdo->execute();

$nomes = [];

if ($pdo->rowCount() > 0) {
$nomes = $pdo->fetchAll();
}

}

?>
<a href="cadastrados.php" >Back</a>



<form method="POST">

<input type="text" name="nome" id="nome" placeholder="Digite o nome" required> <input type="submit" value="Pesquisar" name="acao">

</form>

<?php if (isset($nomes) && count($nomes) > 0) : ?>

<br><br>

<table border="1">
<thead>
<th>ID</th>
<th>Nome</th>
<th>Data de Nascimento</th>
<th>Nªde BI</th>
<th>Morada</th>
<th>Data de Contratação</th>
<th>Telefone</th>
<th>Salário</th>
<th>Horas de Trabalho por dia</th>
<th>Cargo</th>
<th>Foto</th>
</thead>
<tbody>
<?php for ($i = 0; $i < count($nomes); $i++) : ?>
<tr>
<td><?= $nomes[$i]['id'] ?></td>
<td><?= $nomes[$i]['nome'] ?></td>
<td><?= $nomes[$i]['bi'] ?></td>
<td><?= $nomes[$i]['morada'] ?></td>
<td><?= $nomes[$i]['datacontratacao'] ?></td>
<td><?= $nomes[$i]['email'] ?></td>
<td><?= $nomes[$i]['telefone'] ?></td>
<td><?= $nomes[$i]['salario'] ?></td>
<td><?= $nomes[$i]['htd'] ?></td>
<td><?= $nomes[$i]['cargo'] ?></td>
<td><img src="fotos/<?= $nomes[$i]['foto'] ?>" width="130" height="110" alt=""></td>
<td> 
                <a href="editar.php?id=<?= $nomes[$i]['id'] ?>">Editar</a> </td>
                <td> <form action="delete.php" method="post">
                <input type="hidden" name="id" value="<?= $nomes[$i]['id'] ?>">    
                <button type="submit" name="btn-deletar">Apagar</button></form></td>
                
               

</tr>
<?php endfor; ?>
</tbody>
</table>

<?php endif; ?>

<?php if (isset($nomes) && count($nomes) == 0) : ?>

<p><strong>Nenhum registro corresponde à pesquisa!</strong></p>

<?php endif; ?>

</body>
</html>