<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="http://localhost/www.httpcafe.com/img/coffee-cup.png" type="image/x-icon"/>
        <meta charset="UTF-8">  
        <title>1337-Cafe</title>
        <link rel="stylesheet" href="http://localhost/www.httpcafe.com/css/ProductsPage1.css">
    </head>
    <body>
        <header>
            <nav>
                <div id="logo">
                    <a href="http://localhost/www.httpcafe.com/home"> <img src="http://localhost/www.httpcafe.com/img/Logo2.jpg" alt="Logo"> </a>
                </div>
                <div class="pages" id="menu"> 
                    <a href="http://localhost/www.httpcafe.com/menu"><p></p></a> 
                </div>
                <div class="pages" id="products"> 
                    <p></p>
                </div>
                <div class="pages" id="contact" > 
                    <a href="http://localhost/www.httpcafe.com/contact"><p></p></a>
                </div>
            </nav>
        </header>
        <h1>Meniu</h1>
        <div class="menu">
            <img src="http://localhost/www.httpcafe.com/img/ImageMenu.jpg" alt="Menu Image">
            <div class="submenu" id="coffee">
                <div class="nameSubmenu"><p>Coffee</p></div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Drip" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">5</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="French Press" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">7.5</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Vacuum Pot" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">8.5</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
            </div>
            <div class="submenu" id="espresso">
                <div class="nameSubmenu"><p>Espresso</p></div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Americano" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">10</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Cafe Mocha" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">11</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Cafe Latte" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">12</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Cappucino" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">10</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
               <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Frappucino" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">10</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Caramel Macchiato" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">13</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Mint Chocolate" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">10</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Espresso" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">9</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Vanilla Latte" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">11</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
            </div>
            <div class="submenu" id="tea">
                <div class="nameSubmenu"><p>Tea</p></div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Earl Grey" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">5.75</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="English Breakfast" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">6.5</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Green Tea" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">6.5</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Jasmine Tea" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">6</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
            </div>
            <div class="submenu" id="colddrinks">
                <div class="nameSubmenu"><p>Cold Drinks</p></div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Orange Juice" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">9</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Apple Juice" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">8</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Iced Latte" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">7</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Iced Mocha" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">6</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Ice Tea" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">5</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Lemonade" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">10</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Soda" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">5</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
            </div>
            <div class="submenu" id="alchool">
                <div class="nameSubmenu"><p>Alchool</p></div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Beer" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">7</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="varsta" type="hidden" name="age"/>
                        <input id="buton" type="submit" value="Comanda" onclick="return askAge();">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Wine" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">12</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="varsta" type="hidden" name="age"/>
                        <input id="buton" type="submit" value="Comanda" onclick="return askAge();">
                    </form>
                </div>
            </div>
            <div class="submenu" id="sweets">
                <div class="nameSubmenu"><p>Sweets</p></div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Peacon Pie" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">25</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Cheesecake" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">23</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Coffee Java" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">20</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Macaron" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">21</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div>
                <div class="product">
                    <form action="http://localhost/www.httpcafe.com/confirmation" method="post">
                        <input class="static" id="nume" type="text" name="product" value="Croissant" readonly="true"/>
                        <label class="static" id="puncte">.............................................</label>
                        <label class="static" id="pret">15</label>
                        <label class="static" id="cant">Cantitate:</label>
                        <input id="cantitate" required type="number" name="quantity" min="1" max="9"><span class="validity"></span>
                        <input id="buton" type="submit" value="Comanda">
                    </form>
                </div> 
            </div>
        </div>
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
                if(s[4] == "confirmation") {
                    location.href = "http://localhost/www.httpcafe.com/confirmation";
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
            
            function askAge() {
                var age = prompt("Ce varsta aveti?", "Exemplu: 21");
                if(age == null || age == '' || (parseInt(age) < 18)) {
                    location.href = "http://localhost/www.httpcafe.com/error/products";
                    return false;
                } else {
                    document.getElementById("varsta").value = age;
                    return true;
                }
            }
        </script> 
    </body>
</html>