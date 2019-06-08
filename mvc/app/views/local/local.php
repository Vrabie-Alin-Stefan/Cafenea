<!DOCTYPE html>
<html lang="ro">
	<head>
        <link rel="icon" href="../img/coffee-cup.png" type="image/x-icon"/>
        <meta charset="UTF-8">  
        <title>1337-Cafe</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href= "../css/local.css">
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
                <div class="pages" id="menu"> 
                    <a href="../productsController/index"><p></p></a> 
                </div>
                <div class="pages" id="contact" > 
                    <a href="../contactController/index"><p></p></a>
                </div>
            </nav>
        </header>
        
        <div id = "content">
            <div id = "local">
                <div id = "localImage">
                    <div id = "bar" onclick="window.location='../productsController/ocupa?masa=1';"><span class = "comanda"></span></div>
                    <div id = "masa1" onclick="window.location='../productsController/ocupa?masa=2';"><span class = "ocupat"></span></div>
                    <div id = "masa2" onclick="window.location='../productsController/ocupa?masa=3';"><span class = "ocupat"></span></div>
                    <div id = "masa3" onclick="window.location='../productsController/ocupa?masa=4';"><span class = "ocupat"></span></div>
                    <div id = "masa4" onclick="window.location='../productsController/ocupa?masa=5';"><span class = "ocupat"></span></div>
                    <div id = "masa5" onclick="window.location='../productsController/ocupa?masa=6';"><span class = "ocupat"></span></div>
                    <div id = "masa6" onclick="window.location='../productsController/ocupa?masa=7';"><span class = "ocupat"></span></div>
                    <div id = "masa7" onclick="window.location='../productsController/ocupa?masa=8';"><span class = "ocupat"></span></div>
                    <div id = "masa8" onclick="window.location='../productsController/ocupa?masa=9';"><span class = "ocupat"></span></div>
                    <div id = "masa9" onclick="window.location='../productsController/ocupa?masa=10';"><span class = "ocupat"></span></div>
                    <div id = "masa10" onclick="window.location='../productsController/ocupa?masa=11';"><span class = "ocupat"></span></div>
                </div>
            </div>
        </div>
        <footer>
				<p>Proiect realizat de: Vrabie Alin-Stefan si Adam Cristian</p>
				<p>Contact information: <a href="mailto:alinvs09@gmail.com">alinvs09@gmail.com</a>.</p>
		</footer>
	</body>
</html>