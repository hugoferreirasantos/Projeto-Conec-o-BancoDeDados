<?php
require_once "conecta.php";
$nome = $_POST["nome"]; 
$fone = $_POST["fone"];
$email = $_POST["email"];
$insta = $_POST["insta"];

try {
  
  $pdo = new PDO('mysql:host=danielgomes.pro.br;dbname=danielgo_contato', 'danielgo_alunos', 'estacio2022');
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
    $stmt = $pdo->prepare('INSERT INTO pessoas  VALUES(:id, :nome, :fone, :email, :insta)');
    $stmt->execute(array(
      ':id' => Null,
      ':nome' => $nome,
      ':fone' => $fone,
      ':email' => $email,
      ':insta' => $insta,
    ));
  
    echo("<script>alert('Dados registrados com sucesso..');</script>");
  } 
  catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }  
?>