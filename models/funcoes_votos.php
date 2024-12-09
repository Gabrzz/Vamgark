<?php
require_once "Conexao.php";

function calcularPorcentagemVotos($conexao, $casa) {
  // Consulta SQL para obter o total de votos
  $sql_total = "SELECT COUNT(*) AS total FROM voto";
  $result_total = $conexao->query($sql_total);
  $total_votos = $result_total->fetch_assoc()['total'];

  // Consulta SQL para obter o total de votos da casa especificada
  $sql_casa = "SELECT COUNT(*) AS total_casa FROM voto WHERE casa = '$casa'";
  $result_casa = $conexao->query($sql_casa);
  $total_casa = $result_casa->fetch_assoc()['total_casa'];

  // Calcula a porcentagem de votos da casa
  if ($total_votos > 0) {
    $porcentagem = round(($total_casa / $total_votos) * 100);
  } else {
    $porcentagem = 0;
  }

  return $porcentagem;
}

?>