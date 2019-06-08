<!DOCTYPE html>
<html lang="ro">
	<head>
        <link rel="icon" href="../img/coffee-cup.png" type="image/x-icon"/>
        <meta charset="UTF-8">  
		<title>1337-Cafe</title>
		<link rel="stylesheet" href="../css/confirmation.css">
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
                    <a href="../contactontroller/index"><p></p></a>
                </div>
            </nav>
		</header>
		
		<div id = "content">
            <div id = "presentation">
				<div class = "item">
					<div id = "photo1"></div>
					<div class = "description">
						<br>
                        Comanda a fost preluata cu succes iar in cel mai scurt timp<br>
                        va veni cineva sa va aduca bautura dorita!
                    </div>
                    <div id = "photo2"></div>
				</div>
				<div class = "item">
                    <input type="button" class="button" value="Nota" onclick="location.href = '../local/local.html';">
                    <input type="button" class="button" value="Mai comanda" onclick="location.href = '../products/products.html';">
				</div>
            </div>
        </div>
        <footer>
				<p>Proiect realizat de: Vrabie Alin-Stefan si Adam Cristian</p>
				<p>Contact information: <a href="mailto:alinvs09@gmail.com">alinvs09@gmail.com</a>.</p>
		</footer>
	</body>
</html>