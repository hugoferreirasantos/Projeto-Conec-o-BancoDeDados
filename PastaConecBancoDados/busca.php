<?php
require_once "conecta.php";

$cor = "#ffffff";
$consulta = $pdo->query("SELECT * FROM pessoas;");
echo "<table border=1>
      <tr>
      <td>ID</td>
      <td>NOME</td>
      <td>FONE</td>
      <td>EMAIL</td>
      <td>INSTA</td>
      </tr>";


while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    if($cor == "#ffffff"){$cor = "#cccccc";}else{$cor = "#ffffff";}
    echo 
    "<tr bgcolor=$cor>
      <td>{$linha['id']}</td>
      <td>{$linha['nome']}</td>
      <td>{$linha['fone']}</td>
      <td>{$linha['email']}</td>
      <td>{$linha['insta']}</td>
      <td><img src=imgs/edit.png height=30></td>
      <td><a href=deletar.php?id={$linha['id']}><img src=imgs/del.png height=30></a></td>
      </tr>";
}
 echo "</table><br><h1 onclick=print();>IMPRIMIR</h1>";
?>