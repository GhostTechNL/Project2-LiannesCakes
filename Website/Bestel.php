<!DOCTYPE html>
<html>
<head>
	<title>LiannasCakes | ❤ Bestel</title>
	<link rel="stylesheet" type="text/css" href="CSS/bestcs.css">
	<script type="text/javascript" src="JS/bestjav.js"></script>

	<meta charset="utf-8">
	<meta name="author" content="Tyno schrama">
	<meta name="Viewport" content="width=device-width, initial-scale=1">

</head>
<body onload="dropdown('drop-product')">
	<!-- Navigatie-->
	<div class="Navi">
	  <div class="but">
	  	<a href="Home.html"><li>Home</li></a>
	  	<a href="Product.html"><li>Producten</li></a>
	  	<a href="Thema.html"><li>Thema</li></a>
	  	<a href="Overons.html"><li>Over ons</li></a>
	  	<a href="Bestel.php"><li>Bestellen</li></a>
	  </div>
	  <img id="Logo" src="IMG/LC_Logo.png" width="100" height="100">
	  <div class="wave"></div>
	  </div>
	<!-- content -->
	<section>
	<div class="Content1">

		<div class="content2">
			<!-- Niet gebruiken. werk als tussenschot-->
			<!-- -->
		</div>
		<div class="content3">
			<div class="Bestel">
				<label>Bestel overzicht</label>
				<button class="drop" onclick="dropdown('drop-product')">Voeg een product toe</button>
				<div class="drop-product down">
					<div class="product">
						<img src="IMG/Productsp/Item1.png">
						<h3>Aardbeien vanille</h3>
						<p>€ 5</p>
					</div>
					<div class="product">
						<img src="IMG/Productsp/Item2.png">
						<h3>Unicorn taart</h3>
						<p>€ 11</p>			
					</div>
					<div class="product">
						<img src="IMG/Productsp/Item3.png">
						<h3>Kwarktaart</h3>
						<p>€ 7</p>	
					</div>
					<div class="product">
						<img src="IMG/Productsp/Item4.png">
						<h3>Bananen kwarktaart</h3>
						<p>€ 5</p>
					</div>
					<div class="product">
						<img src="IMG/Productsp/Item5.png">
						<h3>Oreo taart</h3>
						<p>€ 8,50</p>
					</div>
						<div class="product">				
							<img src="IMG/Productsp/Item6.png">
						<h3>Chocolate taart</h3>
						<p>€ 7</p>
					</div>
					<div class="product">
						<img src="IMG/Productsp/Item7.png">
						<h3>Chocolade cupcakes</h3>
						<p id="prijs">€ 4</p>
					</div>
					<div class="product">
						<img src="IMG/Productsp/Item8.png">
						<h3>Unicorn cupcakes</h3>
						<p id="prijs">€ 5</p>
					</div>
					<div class="product">
						<img src="IMG/Productsp/Item9.png">
						<h3>Luchtige chocolade taart</h3>
						<p id="prijs">€ 8</p>
					</div>
					<div class="product">
						<img src="IMG/Productsp/Item10.png">
						<h3>Regenboog taart</h3>
						<p id="prijs">€ 9</p>
					</div>
				</div>
				<div class="Bestelform">
					<div class="overzicht">
						<img src="IMG/Productsp/Item1.png">
						<h3>Aarbeien vanille taart</h3>
						<h2 id="del">X</h2>
						<p id="prijs">€ 5</p>	
					</div>
					<div class="overzicht">
						<img src="IMG/Productsp/Item2.png">
						<h3>Unicorn taart</h3>
						<h2 id="del">X</h2>
						<p id="prijs">€ 11</p>
					</div>
				</div>
				<div class="Bedragen">
					<h5 class="Bedrag">Bedrag € </h5>
					<h5 class="Verzend">Verzendkost € </h5>
					<h5 class="Totaal">Totaalbedrag € </h5>
				</div>
			</div>
			<div class="Gegevens">
				<label>Adres gegevens</label>
				<input type="text" name="Vnaam" placeholder="Voornaam*" required>
				<input type="text" name="Tusvoegel" placeholder="Tussenvoegel">
				<input type="text" name="Anaam" placeholder="Achternaam*" required>
				<input id="emad"type="text" name="EAdres" placeholder="Email adres*" required>

				<input id="straat" type="text" name="Strnaam" placeholder="Straatnaam*" required>
				<input id="straat" type="number" name="Hnummer" placeholder="Huisnummer*" required>
				<input id="code" type="text" name="PCode" placeholder="Postcode*" required>
				<input id="telefoon" type="text" name="tele" placeholder="Telefoonnummer">

				<textarea placeholder="Opmerking/Allergieën enzo"></textarea>
				<input type="submit" value="Bestel">
			</div>
			<div class="AD"></div>
		</div>
	</div>
	</section>
	<!-- Footer -->
	<div class="Footer">
		<h3>© Copyright 2018 - LiannasCakes</h3>
		<div class="Contact">
			<p><strong>Contact:</strong><br>
			<br>
			Liannascakes@chef.nl <br>
			06-123123123</p>
		</div>
		<div class="Volg">
			<h4>Volg ons</h4>
			<a href="#"><img src="IMG/faceb-icon.png" width="30" height="30"></a>
			<a href="https://www.instagram.com/liannanascakes/"><img src="IMG/Insta-icon.png" width="30" height="30"></a>
		</div>
	</div>

</body>
</html>