<!DOCTYPE html>
<html lang="it">
<?php include 'header.php'; ?>

<body>
  <div class="container">
    <div class="contenuto">
      <div class="column-gusti">
        <?php
        $nomegusto = $_GET['gusto'];
        $query = "SELECT * FROM gusti where g_nome='$nomegusto';";
        $result = $Dbconn->query($query);
        while ($row = $result->fetch_assoc()) {
          $titolo = $row['g_titolo'];
          $descrizione = $row['g_desc'];
          $prezzo = $row['g_prezzo'];
          $moneta = $row['g_moneta'];
          $imagePath = $row['g_image'];
          echo '<img src="' . $imagePath . '" alt="Immagine">';
          echo "<h1>$titolo</h1>";
          echo "<p> $descrizione</p>";
          echo "<h1>$prezzo  $moneta</h1>";
        }
        $Dbconn->close();
        ?>
      </div>
    </div>
  </div>
</body>
<?php include 'footer.php'; ?>

</html>