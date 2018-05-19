<?php
require_once 'db.php';

//Exemplo update

$id = 11;

$sql = "SELECT * FROM pessoa WHERE idpessoa = :id";

try {
  $st = $db->prepare($sql);
  $st->bindValue(':id', $id, PDO::PARAM_INT);
  $st->execute();
} catch (PDOException $e) {
  echo $e->getMessage();
}

//apenas um resultado
$result = $st->fetch(PDO::FETCH_OBJ);
echo $result->idpessoa;
echo ' | ';
echo $result->nome;
echo ' | ';
echo $result->email;

//Atualiza os dados
$nome = 'Renata Muniz '. rand(0, 100);
$email = 'renata@gmail.com';

$sqlUpdate = "UPDATE pessoa SET nome = :nome, email = :email WHERE idpessoa = :id";

try {
  $st = $db->prepare($sqlUpdate);
  $st->bindValue(':nome', $nome, PDO::PARAM_STR);
  $st->bindValue(':email', $email, PDO::PARAM_STR);
  $st->bindValue(':id', $id, PDO::PARAM_INT);
  if($st->execute()){
		echo 'Registro atualizado com sucesso!';
	}
} catch (PDOException $e) {
  echo $e->getMessage();
}


?>
