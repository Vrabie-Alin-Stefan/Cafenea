<html lang="ro">
	<head>
		<link rel="icon" href="../img/coffee-cup.png" type="image/x-icon"/>
        <meta charset="UTF-8">  
		<title>1337-Cafe</title>
		<link rel="stylesheet" href="../css/products.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	
	<body>
		<header>
            <nav>
                <div id="logo">
                    <a href="../HomePageController/index"> <img src="../img/logo2.jpg" alt="Logo"> </a>
                </div>
                <div class="pages" id="home"> 
                    <a href="../HomePageController/index"><p></p></a> 
				</div>
				<div class="pages" id="local"> 
                    <a href="../localController/index"><p></p></a> 
                </div>
                <div class="pages" id="contact" > 
                    <a href="../contactController/index"><p></p></a>
                </div>
            </nav>
		</header>
		
		<div id = "content">
            <div id = "presentation">
				<div class = "item">
					<div id = "photo1" onclick="window.location='../ProductPageController/index';"></div>
					<div class = "description">
						<br>
						Ce poate fi mai elegant decat servirea unei cafele fierbinti  <br>
						sau poate doresti doar sa savurezi o cafea de o calitate superioara.
					</div>
				</div>
				<div class = "item">
					<div class = "description">
						<br>
						Ce se potriveste mai bine la o iesire cu baietii decat o bere rece<br>
						sau poate esti un adept al licorii lui Bacus
					</div>
					<div id = "photo2" onclick="window.location='../ProductPageController/index';"></div>
				</div>
				<div class = "item">
					<div id = "photo3" onclick="window.location='../ProductPageController/index';"></div>
					<div class = "description">
							<br>
							Pentru oamenii fara vicii sau poate care doar doresc sa incerce diferite arume<br>
							avem o solutie simpla "sucul de la frigider" 
					</div>
				</div>
            </div>
		</div>
		<footer>
				<p>Proiect realizat de: Vrabie Alin-Stefan si Adam Cristian</p>
				<p>Contact information: <a href="mailto:alinvs09@gmail.com">alinvs09@gmail.com</a>.</p>
		</footer>
	</body>
</html>