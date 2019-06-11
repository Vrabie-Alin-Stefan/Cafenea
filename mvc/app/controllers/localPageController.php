<?php

class localPageController extends Controller
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
            if($ref_page != 'home' && $ref_page != 'confirmation') // Pagini care nu pt fi accesate
            {
                $this->view('Errors/403Page');
                echo '<button onclick="location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'">Intoarceti-va la pagina anterioara</button>';
            } 
            else // Pagini care pot fi accesate
            {
                return true;
            }
        } 
        else // cand nu este nici un referer
        {
            $this->view('LocalPage/LocalPage');
            echo '<link rel="stylesheet" type="text/css" href="http://localhost/www.httpcafe.com/css/modal.css">';
            echo 
                '<div class="modal-overlay" id="modal-overlay"></div>
                    <div class="modal" id="modal">
                    <div class="modal-guts">
                        <p id="oops">Oops!</p>
                        <p id="error">S-a produs o eroare!</p>
                        <p id="text-error">Nu puteti deschide pagina, deoarece nu va este permis accesul direct la ea.</p> 
                        <p id="text-counter">Veti fi redirectionat in <span id="counter">5</span> secunde la pagina de inceput, daca nu apasati butonul.</p>
                        <button onclick="location.href=\'http:///localhost/www.httpcafe.com/home\';">Mergiti la pagina principala</button> 
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
                    setInterval(function() {  location.href = "http:///localhost/www.httpcafe.com/home";  }, 6000);
                </script>';
        }
    }

    public function index()
    {
        if($this->referer() == true) 
        {
            session_start();
            
            $ocupiedTables = [];
            $table = $this->model('TableService'); // $local este obiectul model
            $ocupiedTables = $table->GetOcupiedTables();


            $this->view('LocalPage/LocalPage', $ocupiedTables);
            //echo '<br>' . htmlspecialchars($_SESSION['user_token']);
            //echo '<br>' . $_COOKIE["latitude"];
            //echo '<br>' . $_COOKIE["longitude"];
        }
        
        /*if(isset($_SERVER['HTTP_REFERER']))
        {
            if($_SERVER['HTTP_REFERER'] == "http://localhost/www.httpcafe.com/home")
            {
                $local = $this->model('LocalModel'); // $local este obiectul model
                $local->name = $token;
                
                $this->view('LocalPage/LocalPage', ['name' => $local->name]);
            }
            else
            {
                $this->view('Errors/403Page');
            }
        }
        else
        {
            $this->view('Errors/403Page');
        }*/
    }
}