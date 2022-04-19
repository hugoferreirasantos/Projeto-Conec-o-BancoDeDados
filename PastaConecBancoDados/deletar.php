<?php
require_once "conecta.php";
$id = $_GET["id"];

try {
  
  $stmt = $pdo->prepare('DELETE FROM pessoas WHERE id = :id');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  echo ("<script>alert('Dados excluídos com sucesso...');location.href = 'busca.php';</script>");
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>