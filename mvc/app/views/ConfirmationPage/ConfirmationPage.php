<!DOCTYPE html>
<html lang="ro">
	<head>
        <link rel="icon" href="http://localhost/www.httpcafe.com/img/coffee-cup.png" type="image/x-icon"/>
        <meta charset="UTF-8">  
		<title>1337-Cafe</title>
		<link rel="stylesheet" href="http://localhost/www.httpcafe.com/css/ConfirmationPage.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	
	<body>
            <header>
            <nav>
                <div id="logo">
                    <a href="http://localhost/www.httpcafe.com/home"> <img src="http://localhost/www.httpcafe.com/img/logo2.jpg" alt="Logo"> </a>
                </div>
                <div class="pages" id="menu"> 
                    <a href="http://localhost/www.httpcafe.com/menu"><p></p></a> 
                </div>
                <div class="pages" id="order"> 
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
			<div id = "photo1"></div>
                        <div class = "description">
						<br>
                                Comanda a fost preluata cu succes iar in cel mai scurt timp<br>
                                va veni cineva sa va aduca bautura dorita!
                        </div>
                        <div id = "photo2"></div>
                    </div>
                    <div class = "item">
                        <input type="button" class="button" value="Nota" onclick="location.href = 'http://localhost/www.httpcafe.com/local';">
                        <input type="button" class="button" value="Mai comanda" onclick="location.href = 'http://localhost/www.httpcafe.com/menu';">
                    </div>
                </div>
            </div>
            <footer>
		<p>Proiect realizat de: Vrabie Alin-Stefan si Adam Cristian</p>
		<p>Contact information: <a href="mailto:alinvs09@gmail.com">alinvs09@gmail.com</a>.</p>
            </footer>
            <script type="text/javascript">
                if(performance.navigation.type == 2){
                    var url = getCookie("url_previous_page"); 
                    console.log(url);
                    var s = url.split('/');
                    console.log(s[4]);
                    if(s[4] == "contact") {
                        location.href = "http://localhost/www.httpcafe.com/home";
                    } 
                    if(s[4] == "home") {
                        location.href = "http://localhost/www.httpcafe.com/home";
                    }
                    if(s[4] == "menu") {
                        location.href = "http://localhost/www.httpcafe.com/menu";
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