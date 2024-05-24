
<!DOCTYPE html>
<html hreflang="it">

<head>
	<?php include 'header.php'; ?>
	<style>
		.left-column {
			flex: 1;

		}

		.container .left-column img {
			width: 90%;
			height: auto;
			top: 20px
		}

		.right-column {
			flex: 1;
			padding: 20px;

		}

		.right-column h2 {
			font-size: 24px;
			margin-bottom: 10px;
		}

		.right-column p {
			margin-bottom: 10px;
		}

		.right-column select {
			width: 100%;
			padding: 8px;
			margin-bottom: 10px;
		}

		.format select {
			margin-bottom: 10px;
		}

		.select-group {
			display: flex;
			flex-wrap: wrap;
		}

		.select-group select {
			flex: 1;
		}

		.quarter-page {
			flex-basis: 50%;
			padding-right: 10px;
			box-sizing: border-box;
		}

		.half-page {
			flex-basis: 50%;
			padding-right: 10px;
			box-sizing: border-box;
		}

		.sticky-image {
			position: sticky;
			top: 1.25rem;

		}

		/* Aggiungi altri stili CSS necessari */
	</style>
</head>
<?php

function gusti($Dbconn)
{

	$query = "SELECT g_nome FROM gusti where g_tipo=1;";
	
	$result = $Dbconn->query($query);
	while ($row = $result->fetch_assoc()) {
		echo "<option value=" . ucwords($row['g_nome']) . ">" . ucwords($row['g_nome']) . "</option>";
	}
}
?>

<body>
	<div class="container">
		<div class='contenuto'>
			<div class="left-column">
				<img src="img/torte/tortaalcioccolato.jpg" alt="Gelato" class="sticky-image">
			</div>
			<div class="right-column">
			<?php
        
        $query = "SELECT c_prezzo, c_moneta FROM confezione where c_nome='vaschetta';";
        $result = $Dbconn->query($query);
        while ($row = $result->fetch_assoc()) {
          $prezzo = $row['c_prezzo'];
          $moneta = $row['c_moneta'];
          echo "<h1>$prezzo  $moneta</h1>";
        }
        ?>
				<h2>Torte Gelato</h2>
				<p>Delizioso gelato artigianale per soddisfare la tua voglia di dolcezza.</p>
				<p>Formato:</p>
				<div class="half-page">
					<select>
						<option value="1000">1000Kg</option>
						<option value="700">700Kg</option>
						<option value="500">500Kg</option>
					</select>
				</div>
				
				<div class="button-container">
					<button id="decrement" class="round-button">-</button>
					<span id="value">0</span>
					<button id="increment" class="round-button">+</button>
				</div>
				<script src="script.js"></script>
			
				<div class="select-group">
					<div class="quarter-page">
						<h3>Primo Gusto</h3>
						<select name="primo gusto">
							<option value disabled="disabled" selected></option>
							<option value="nessuno">Nessuno</option>
							<?php gusti($Dbconn); ?>
						</select>
					</div>
					<div class="quarter-page">
						<h3>Secondo Gusto</h3>
						<select name="select2">
							<option value disabled="disabled" selected></option>
							<option value="nessuno">Nessuno</option>
							<?php gusti($Dbconn); ?>
						</select>
					</div>
				</div>
			
				<div class="select-group">
					<div class="quarter-page">
						<h3>Terzo Gusto</h3>
						<select name="select3">
							<option value disabled="disabled" selected></option>
							<option value="nessuno">Nessuno</option>
							<?php gusti($Dbconn); ?>
						</select>
					</div>
					<div class="quarter-page">
						<h3>Quarto Gusto</h3>
						<select name="select4">
							<<option value disabled="disabled" selected>
								</option>
								<option value="nessuno">Nessuno</option>
								<?php gusti($Dbconn); ?>
						</select>
					</div>
				</div>
				<div class="select-group">
					<div class="quarter-page">
						<h3>Quinto Gusto</h3>
						<select name="select5">
							<option value disabled="disabled" selected></option>
							<option value="nessuno">Nessuno</option>
							<?php gusti($Dbconn); ?>
						</select>
					</div>
					<div class="quarter-page">
						<h3>Sesto Gusto</h3>
						<select name="select6">
							<option value disabled="disabled" selected></option>
							<option value="nessuno">Nessuno</option>
							<?php gusti($Dbconn); ?>
						</select>
					</div>
				</div>

				<div class="half-page">
					<h3>Cannucce omaggio</h3>
					<select name="select7">
						<option value disabled="disabled" selected></option>
						<option value="nessuno">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				</div>
				<div class="half-page">
					<h3>Cannucce Extra</h3>
					<select name="select8">
						<option value disabled="disabled" selected></option>
						<option value="nessuno">0</option>
						<option value="1">1(+ €0,05 EUR)</option>
						<option value="2">2(+ €0,10 EUR)</option>
						<option value="3">3(+ €0,20 EUR)</option>
						<option value="4">4(+ €0,30 EUR)</option>
						<option value="5">5(+ €0,40 EUR)</option>
					</select>
				</div>
				<form action="cart.php" method="post">
					<input type="hidden" name="product" value="Milkshake">
					<input type="hidden" name="qta" value=1>
					<input type="hidden" name="price" value=<?php echo $prezzo; ?>>
					<button type="submit" class="round-button-cart" name="add">+</button>
				</form>
			</div>
		</div>
	</div>
</body>

</html>