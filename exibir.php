<?php
require_once 'db.php';

//Exemplo exibição

$sql = "SELECT * FROM pessoa ";

try {
  $st = $db->prepare($sql);
  $st->execute();
} catch (PDOException $e) {
  echo $e->getMessage();
}

while($row = $st->fetch(PDO::FETCH_OBJ)){
   echo $row->idpessoa;
   echo ' | ';
   echo $row->nome;
   echo ' | ';
   echo $row->email;
   echo '<br/>';
}

?>
