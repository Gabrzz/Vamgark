<?php
require_once './Conexao.php';

// Consulta SQL para obter a contagem de votos por casa
$sql = "SELECT casa, COUNT(*) AS total FROM voto GROUP BY casa";
$result = $conexao->query($sql);

$votos = [];
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $votos[$row['casa']] = $row['total'];
  }
}

// Calcula a porcentagem de votos para cada casa
$total_votos = array_sum($votos);
$porcentagens = [];
foreach ($votos as $casa => $total) {
  $porcentagens[$casa] = round(($total / $total_votos) * 100);
}

// Retorna as porcentagens em formato JSON
echo json_encode($porcentagens);

$conexao->close();
?>