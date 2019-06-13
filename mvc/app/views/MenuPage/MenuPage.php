<html lang="ro">
	<head>
            <link rel="icon" href="http://localhost/www.httpcafe.com/img/coffee-cup.png" type="image/x-icon"/>
            <meta charset="UTF-8">  
            <title>1337-Cafe</title>
            <link rel="stylesheet" href="http://localhost/www.httpcafe.com/css/MenuPage1.css">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
            <meta http-equiv="Pragma" content="no-cache" />
            <meta http-equiv="Expires" content="0" />
	</head>
	
	<body>
            <header>
            <nav>
                <div id="logo">
                    <a href="http://localhost/www.httpcafe.com/home"> <img src="http://localhost/www.httpcafe.com/img/logo2.jpg" alt="Logo"> </a>
                </div>
                <div class="pages" id="menu"> 
                    <p></p>
                </div>
                <div class="pages" id="contact" > 
                    <a href="http://localhost/www.httpcafe.com/contact"><p></p></a>
                </div>
            </nav>
            </header>
		
		<div id = "content">
            <div id = "presentation">
				<div class = "item">
					<div id = "photo1" onclick="location.href='http://localhost/www.httpcafe.com/products/choose/coffee';"></div>
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
					<div id = "photo2" onclick="location.href='http://localhost/www.httpcafe.com/products/choose/alchool';"></div>
				</div>
				<div class = "item">
					<div id = "photo3" onclick="location.href='http://localhost/www.httpcafe.com/products/choose/colddrinks';"></div>
					<div class = "description">
							<br>
							Pentru oamenii fara vicii sau poate care doar doresc sa incerce diferite arome,<br>
							avem o solutie simpla "sucul de la frigider" 
					</div>
				</div>
            </div>
		</div>
            <footer>
				<p>Proiect realizat de: Vrabie Alin-Stefan si Adam Cristian</p>
				<p>Contact information: <a href="mailto:1337Cafe@gmail.com">1337Cafe@gmail.com</a>.</p>
            </footer>
            <script type="text/javascript">
       
                if(performance.navigation.type == 2){
                    var url = getCookie("url_previous_page"); 
                    var s = url.split('/');
                    if(s[4] == "contact") {
                        location.href = "http://localhost/www.httpcafe.com/home";
                    } 
                    if(s[4] == "home") {
                        location.href = "http://localhost/www.httpcafe.com/home";
                    }
                }       
                
                function getCookie(name) {
                    var cookieName = name + "=";
                    var decodedCookie = decodeURIComponent(document.cookie);
                    var cookies = decodedCookie.split(';');
                    for(var i=0;i<cookies.length;i++) {
                        var c = cookies[i];
                        while(c.charAt(0) == ' ') {
                            c=c.substring(1);
                        }
                        if(c.indexOf(name) == 0){
                            return c.substring(cookieName.length,c.length);
                        }
                    }
                    return "";
                }
                
                document.cookie = "url_previous_page =" + window.location.href + "; path=/";
            </script> 
	</body>
</html>