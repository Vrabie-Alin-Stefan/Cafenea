<?php

class confirmationPageController1 extends Controller
{
    private function referer() {
        if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']!='')
        {
            $url=$_SERVER['HTTP_REFERER'];
            $ref_page = strtok($url, '/');
            while ($ref_page !== 'www.httpcafe.com') 
            {
                $ref_page = strtok('/');
            }
            $ref_page = strtok('/'); 

            if($ref_page == 'contact' || $ref_page == 'home' || $ref_page == 'menu') //Pagini care sunt tratate diferit 
            {
                $this->view('ConfirmationPage/ConfirmationPage');        
            }
            else if($ref_page != 'products' && $ref_page != 'error') // Pagini care nu pt fi accesate
            {
                echo '<script type="text/javascript"> location.href="http://localhost/www.httpcafe.com/error/index/' . $ref_page . '"; </script>';
            } 
            else // Pagini care pot fi accesate
            {
                return true;
            }
        } 
        else // cand nu este nici un referer
        {
            $this->view('ConfirmationPage/ConfirmationPage');
            echo '<link rel="stylesheet" type="text/css" href="http://localhost/www.httpcafe.com/css/modal1.css">';
            echo 
                '<div class="modal-overlay" id="modal-overlay"></div>
                    <div class="modal" id="modal">
                    <div class="modal-guts">
                        <p id="oops">Oops!</p>
                        <p id="error">S-a produs o eroare!</p>
                        <p id="text-error">Nu puteti deschide pagina, deoarece nu va este permis accesul direct la ea.</p> 
                        <p id="text-counter">Veti fi redirectionat in <span id="counter">5</span> secunde la pagina de inceput, daca nu apasati butonul.</p>
                        <button onclick="location.href=\'http://localhost/www.httpcafe.com/home\';">Mergiti la pagina principala</button> 
                        <script type="text/javascript">
                            function countdown() {
                                var i = document.getElementById(\'counter\');
                                if(parseInt(i.innerHTML) <= 0) {
                                    document.getElementById(\'text-counter\').innerHTML = "Timpul a expirat! Veti fi redictionat automat!";
                                }
                                i.innerHTML = parseInt(i.innerHTML)-1;
                            }
                            setInterval(function() { countdown(); }, 1000);
                        </script>
                    </div>
                </div>
                <script type="text/javascript">
                    var h = window.innerHeight;
                    var w = window.innerWidth;;
                    if(w > 750) {
                        var rez = w/h * 35 / (16/9);
                        document.getElementById(\'modal\').style.height = rez + \'vh\';
                    }
                    else {
                        var rez = w/h * 22 / (9/16);
                        document.getElementById(\'modal\').style.height = rez + \'vh\';
                    }
                </script>
                <script type="text/javascript">
                    setInterval(function() {  location.href = "http://localhost/www.httpcafe.com/home";  }, 6000);
                </script>';
        }
    }
    
    public function index()
    {
        if($this->referer()) {
            if($_SERVER['REQUEST_METHOD'] === 'POST')
            {
                session_start();
                $user = $this->model('UserService');
                
                if(isset($_POST['age'])) 
                {
                    $user->setUserAge($_SESSION['user_token'],$_POST['age']);
                }
                if(isset($_POST['product']) && isset($_POST['quantity'])) 
                {
                    
                    $cantitateComanda = $_POST['quantity'];
                    
                    $order = $this->model('OrderService');
                    $stoc = $order->getProductStock($_POST['product']);
                    
                    if($cantitateComanda > $stoc) 
                    {
                        echo '<script type="text/javascript"> window.alert("Nu sunt suficiente produse in stoc si v-am alocat maximul posibil."); </script>';
                        $cantitateComanda = $stoc;
                    }
                    
                    if($cantitateComanda > 0)
                    {
                        $order->setOrder($user->getUserId($_SESSION['user_token']),$_POST['product'],$cantitateComanda);
                        $order->removeFromStock($_POST['product'],$cantitateComanda);
                    }
                        
                    $this->view('ConfirmationPage/ConfirmationPage');  
                    
                    $comenzi = $order->findUserProductsOrdered($user->getUserId($_SESSION['user_token']));
                    echo '<script type="text/javascript"> document.getElementById("description").innerHTML +="<br><br>Ati comandat pana acum:" </script>';
                    for($i=0;$i<count($comenzi);$i++)
                    {
                        $nameProduct = $order->getProductName($comenzi[$i]['id']);
                        if($comenzi[$i]['quantity'] != 0)
                        {
                            echo '<script type="text/javascript">
                                    document.getElementById("description").innerHTML += "<br> ' . $nameProduct . ' - ' . $comenzi[$i]['quantity'] . ' buc - ' . $comenzi[$i]['price'] . '"; 
                                </script>';
                        }
                    }
                    
                    
                    if($cantitateComanda == $stoc) 
                    {
                        echo '<script type="text/javascript">
                                var emailTo = "1337Cafe@gmail.com";
                                var emailSub = "Stoc terminat produs";
                                var emailBody = "Stocul s-a terminat pentru produsul ' . $_POST['product'] . '.";
                                location.href = "mailto:"+emailTo+\'&subject=\'+emailSub+\'&body=\'+emailBody; 
                             </script>';
                    }
                    
                }
                else
                {
                    echo '<script type="text/javascript"> location.href="http://localhost/www.httpcafe.com/error/index/confirmation"; </script>';
                }
            } 
            else
            {
                echo '<script type="text/javascript"> location.href="http://localhost/www.httpcafe.com/error/index/confirmation"; </script>';
            }
        }
    }
    
    public function modal() 
    {
        session_start();
        $user = $this->model('UserService');
        $order = $this->model('OrderService');
        $sum = $order->findTotalBillPrice($user->getUserId($_SESSION['user_token']));
        
        echo '<script type="text/javascript"> console.log('. $sum .'); </script>';
        
        $this->view('ConfirmationPage/ConfirmationPage');
        echo '<link rel="stylesheet" type="text/css" href="http://localhost/www.httpcafe.com/css/modal1.css">';
        echo 
            '<div class="modal-overlay" id="modal-overlay"></div>
                <div class="modal" id="modal">
                <div class="modal-guts">
                    <p id="oops">Poftim...</p>
                    <p id="error">S-a emis nota dumneavoastra de plata in valoare de ' . $sum  . '!</p>
                    <p id="text-error">Si acum urmeaza partea cand trebuie sa platiti...</p> 
                    <p id="text-counter">Plata se va face automat in <span id="counter">30</span> secunde, daca nu apasati pe butonul de mai jos.</p>
                    <button onclick="location.href=\'http://localhost/www.httpcafe.com/home\';">Platiti si mergiti la pagina principala</button> 
                    <script type="text/javascript">
                        function countdown() {
                            var i = document.getElementById(\'counter\');
                            if(parseInt(i.innerHTML) <= 0) {
                                document.getElementById(\'text-counter\').innerHTML = "Timpul a expirat! Plata s-a efectuat si veti fi redictionat automat!";
                            }
                            i.innerHTML = parseInt(i.innerHTML)-1;
                        }
                        setInterval(function() { countdown(); }, 1000);
                    </script>
                </div>
            </div>
            <script type="text/javascript">
                var h = window.innerHeight;
                var w = window.innerWidth;;
                if(w > 750) {
                    var rez = w/h * 35 / (16/9);
                    document.getElementById(\'modal\').style.height = rez + \'vh\';
                }
                else {
                    var rez = w/h * 22 / (9/16);
                    document.getElementById(\'modal\').style.height = rez + \'vh\';
                }
            </script>
            <script type="text/javascript">
                setInterval(function() {  location.href = "http://localhost/www.httpcafe.com/home";  }, 31000);
            </script>';
    }
    
}