<?php
/**
 * Page for resultados
 */
?>
<?php
require_once 'diagnostic.php';
if (!isset($_SESSION)) {
  // session isn't started
  session_start();
}
?>

<h1>Página de resultados</h1>
<table>
  <th>Rangos</th>
  <th>Pautas de Interpretación</th>
  <?php foreach(getAllInterpretationScore() as $range => $interpretationScore): ?>
    <tr>
      <td><?php print $range ?></td>
      <td><?php print $interpretationScore ?></td>
    </tr>
  <?php endforeach; ?>
</table>
<h2>Este es tu score:</h2>
SCORE ICENA: <?php print $scoreICENA ?> <br>
INTERPRETACIÓN ICENA: <?php print $scoreInterpretationICENA; ?>


