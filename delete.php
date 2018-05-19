<?php
require_once 'db.php';

//Exemplo delete

$id = 10;


$sql = "DELETE FROM pessoa WHERE idpessoa = :id ";

try {

  $st = $db->prepare($sql);
  $st->bindValue(':id', $id, PDO::PARAM_INT);
  if($st->execute()){
		echo 'Registro deletado com sucesso!';
	}
} catch (PDOException $e) {
  $e->getMessage();
}



?>
