<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="http://localhost/www.httpcafe.com/img/coffee-cup.png" type="image/x-icon"/>
        <meta charset="UTF-8">  
        <title>1337-Cafe</title>
        <link rel="stylesheet" type="text/css" href="http://localhost/www.httpcafe.com/css/HomePage1.css">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
    </head>
    <body>
        <header>
            <a href="http://localhost/www.httpcafe.com/home"> <img id="logo" src="http://localhost/www.httpcafe.com/img/Logo2.jpg" alt="Logo"> </a>
            
        </header>
        <div class="button">
            <div id="button1">
                <a href="#descriere">Despre noi</a>
            </div>
            <div>
                <a href="http://localhost/www.httpcafe.com/contact">Contact</a>
            </div>
        </div>
        <div id="visit">
            <img src="http://localhost/www.httpcafe.com/img/VisitCaffeImage.jpg" alt="Cafe Image">
            <div>
                <button onclick="getLocation()" href="http://localhost/www.httpcafe.com/local">Viziteaza 1337 Café</button>
                <script type="text/javascript">
                function getLocation() {
                    if(navigator.geolocation) {
                        navigator.permissions.query({name:'geolocation'})
                            .then(function(permissionStatus) 
                            {
                                if(permissionStatus.state == 'prompt' || permissionStatus.state == 'granted') 
                                {
                                    navigator.geolocation.getCurrentPosition(function(position) 
                                    {
                                        document.cookie = "latitude =" + position.coords.latitude + "; path=/";
                                        document.cookie = "longitude =" + position.coords.longitude + "; path=/";
                                        location.href = "http://localhost/www.httpcafe.com/local"
                                    });
                                } 
                                else if(permissionStatus.state == 'denied') 
                                {
                                    alert('The GPS was blocked by the user!');
                                }
                            },  function error(msg) {alert('Please enable your GPS position feature.');},  
                            {maximumAge:10000, timeout:5000, enableHighAccuracy: true});
                        }
                    }
            </script>
            </div>
        </div>
        <div id="descriere">
            <div id="imagine">
                <img src="http://localhost/www.httpcafe.com/img/CoffeeShop.jpg" alt="Coffe Shop">
            </div>
            <div id="text">
                <h1>Povestea Nostra</h1>
                <p><span><strong>1337 Café</strong></span>, un coffee shop care implementeaza conceptul de cafenea de specialitate, a fost lansat recent si se adreseaza in special informaticienilor. Este 100% produs romanesc, pornind de la ideea de a combina utilul (programarea) cu placutul (savurarea unei cafele). Incercam si reusim sa oferim clientilor o gama diversificata de cafea, avand peste 35 specialitati din cafea la alegere. Ai posibilitatea sa servesti la bar cafeaua ta preferata (Perle Noir 100% Arabica, Pure origins Massaya, Pure Origins Columbia, Costa Rica Tarazu si alte cafele de origine), sa achizitionezi pentru acasa din peste 100 tipuri de cafea (boabe, macinata sau instant) sau poti savura o prajitura cu ciocolata belgiana de la Cacao Barry.</p>
            </div>
        </div>
        <footer>
            <div class="feed">
                <a href="http://localhost/www.httpcafe.com/local/AtomFeed"><img src="http://localhost/www.httpcafe.com/img/Atom.jpg" style="width:25px;border-radius:25%"></a>
                <a href="http://localhost/www.httpcafe.com/local/JsonFeed"><img src="http://localhost/www.httpcafe.com/img/Json.png" style="width:25px;border-radius:25%"></a>
            </div>
            <p>Proiect realizat de: Vrabie Alin-Stefan si Adam Cristian</p>
            <p>Contact information: <a href="mailto:1337Cafe@gmail.com">1337Cafe@gmail.com</a>.</p>
        </footer>
        <script type="text/javascript">
            document.cookie = "url_previous_page =" + window.location.href + "; path=/";
        </script>
    </body>
</html>