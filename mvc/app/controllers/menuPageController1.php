<?php

class menuPageController1 extends Controller
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
            
            if($ref_page == 'contact' || $ref_page == 'home') //Pagini care sunt tratate diferit 
            {
                $this->view('MenuPage/MenuPage');        
            }     
            else if($ref_page != 'local' && $ref_page != 'products' && $ref_page != 'confirmation' && $ref_page != 'error') // Pagini care nu pt fi accesate
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
            $this->view('MenuPage/MenuPage');
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
        if($this->referer()) 
        {
            $this->view('MenuPage/MenuPage');
        }
    }

    public function ocupa($masa ='')
    {
        if($this->referer())
        {
            session_start();
            $user = $this->model('UserService');
            if($user->getUser($_SESSION['user_token']) == 0)
            {
                $_SESSION['myTable']=$masa;
                echo '<script type="text/javascript"> console.log(' . $_SESSION['myTable'] . '); </script>';
                $user->setUser($_SESSION['user_token']);
            } 
            else if(!isset($_SESSION['myTable'])) 
            {
                $_SESSION['myTable']=$masa;
            }
            $table = $this->model('TableService'); // $local este obiectul model
            if(isset($_SESSION['myTable']))
            {
                if($table->getTable($_SESSION['user_token']) == 0 )
                {
                    if($_SESSION['myTable'] != 0)
                    {
                        $_SESSION['myTable'] = $masa;
                    }
                    $table->SetTable($masa, $_SESSION['user_token']);
                }
            }
            $this->view('MenuPage/MenuPage');

        }
    }
}