<?php
require_once 'db.php';

//Exemplo de inserção

$i = rand(0, 100); //gera um numero aleatorio
$nome = 'Fernando '.$i;
$email = 'fernando@gmail.com';

$sql = 'INSERT INTO pessoa (nome, email) VALUES (:nome, :email)';

try {

	$st = $db->prepare($sql);
	$st->bindValue(':nome', $nome);
	$st->bindValue(':email', $email);

	if($st->execute()){
		echo 'Inserido com sucesso!';
	}
} catch (PDOException $e) {
	echo 'Erro:'.$e->getMessage();
}

?>
