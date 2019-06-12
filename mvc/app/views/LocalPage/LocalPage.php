<!DOCTYPE html>
<html lang="ro">
	<head>
            <link rel="icon" href="http://localhost/www.httpcafe.com/img/coffee-cup.png" type="image/x-icon"/>
            <meta charset="UTF-8">  
            <title>1337-Cafe</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href= "http://localhost/www.httpcafe.com/css/LocalPage.css">
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
                <div class="pages" id="local"> 
                    <p></p>
                </div>
                <div class="pages" id="contact" > 
                    <a href="http://localhost/www.httpcafe.com/contact"><p></p></a>
                </div>
            </nav>
        </header>
        
        <div id = "content">
            <div id = "local">
                <div id = "localImage">
                    <?php
                   session_start();
                   if(isset($_SESSION['myTable']))
                   {
                        $index = 0;
                        for($i = 1; $i < 11; $i++)
                        {
                            if(in_array($i,$data))
                            {
                                if($_SESSION['myTable'] == $data[$index])
                                {
                                    echo '<div id = "masa' . $data[$index] . '" onclick="location.href=\'http://localhost/www.httpcafe.com/menu\'"><span class = "myTable">Masa mea</span></div>';
                                }
                                else
                                {
                                    echo '<div id = "masa' . $data[$index] . '"><span class = "ocupat">Ocupat' . $data[$index] . '</span></div>';
                                }
                                $index++;
                            }
                            else
                            {
                                echo '<div id = "masa' . $i . '" onclick="location.href=\'http://localhost/www.httpcafe.com/menu/ocupa/' . $i . '\'"><span class = "liber">Liber' . $i . '</span></div>';
                            }
                        }
                   } 
                   else 
                   {
                        for($i = 1; $i < 11; $i++)
                        {  
                            echo '<div id = "masa' . $i . '" onclick="location.href=\'http://localhost/www.httpcafe.com/menu/ocupa/' . $i . '\'"><span class = "liber">Liber' . $i . '</span></div>';
                        }
                   }
                      ?>
                   <!--
                    <div id = "masa1" onclick="location.href='http://localhost/www.httpcafe.com/menu/ocupa/2';"><span class = "ocupat"></span></div>
                    <div id = "masa2" onclick="location.href='http://localhost/www.httpcafe.com/menu/ocupa/3';"><span class = "ocupat"></span></div>
                    <div id = "masa3" onclick="location.href='http://localhost/www.httpcafe.com/menu/ocupa/4';"><span class = "ocupat"></span></div>
                    <div id = "masa4" onclick="location.href='http://localhost/www.httpcafe.com/menu/ocupa/5';"><span class = "ocupat"></span></div>
                    <div id = "masa5" onclick="location.href='http://localhost/www.httpcafe.com/menu/ocupa/6';"><span class = "ocupat"></span></div>
                    <div id = "masa6" onclick="location.href='http://localhost/www.httpcafe.com/menu/ocupa/7';"><span class = "ocupat"></span></div>
                    <div id = "masa7" onclick="location.href='http://localhost/www.httpcafe.com/menu/ocupa/8';"><span class = "ocupat"></span></div>
                    <div id = "masa8" onclick="location.href='http://localhost/www.httpcafe.com/menu/ocupa/9';"><span class = "ocupat"></span></div>
                    <div id = "masa9" onclick="location.href='http://localhost/www.httpcafe.com/menu/ocupa/10';"><span class = "ocupat"></span></div>
                    <div id = "masa10" onclick="location.href='http://localhost/www.httpcafe.com/menu/ocupa/11';"><span class = "ocupat"></span></div>
                -->
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
