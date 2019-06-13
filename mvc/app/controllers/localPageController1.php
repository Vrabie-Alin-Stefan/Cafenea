<?php

class localPageController1 extends Controller
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
            
            if($ref_page == 'contact' || $ref_page == 'menu') //Pagini care sunt tratate diferit 
            {
                $this->view('LocalPage/LocalPage');        
            }
            else if($ref_page != 'home' && $ref_page != 'error') // Pagini care nu pt fi accesate
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
            $this->view('LocalPage/LocalPage');
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
        if($this->referer() == true) 
        {
            $ocupiedTables = [];
            $table = $this->model('TableService'); // $local este obiectul model

            
            //echo '<br>' . htmlspecialchars($_SESSION['user_token']);
            //echo '<br>' . $_COOKIE["latitude"];
            //echo '<br>' . $_COOKIE["longitude"];
            $longUser = 47.173876;
            $latUser = 27.574791;


            //-----------------Locatia facultatii------------------------------------------------------------
            $long1 = 47.173916; 
            $long4 = 47.173778;
            
            $lat1 = 27.574616;
            $lat4 = 27.575081;
            if($longUser < $long1 && $longUser > $long4)
            {
                if($latUser > $lat1 && $latUser < $lat4)
                {
                    $ocupiedTables = $table->GetOcupiedTables();
                    $this->view('LocalPage/LocalPage', $ocupiedTables);
                }
                else
                {
                    header('Location: http://localhost/www.httpcafe.com/home'); 
                }
            }
            else
            {
                header('Location: http://localhost/www.httpcafe.com/home'); 
            }
        }
        
    }

    public function AtomFeed()
    {
        //$tables = [];
        $table = $this->model('TableService');
        $users = $table->GetOcupiedTablesForFeed();
        $xml = new SimpleXMLElement("<xml/>");
        $feed = $xml->addChild('feed');
        $feed->addChild('title', 'Cafe feed');
        $feed->addChild('updated',  date("Y-m-d"));
        $author = $feed->addChild('author');
        $author->addChild('name','Vrabie Alin-Stefan');
        $author->addChild('name','Adam Cristian');
        $feed->addChild('id', '0');

        for($index = 0; $index < count($users); $index++)
        {
            $entry = $feed->addChild('entry');
            $entry->addChild('id', $users[$index]['id']);
            $entry->addChild('title', $users[$index]['table']);
            $entry->addChild('updated', $users[$index]['updated']);
        }
        $this->view('LocalPage/Atom', $xml);
    }

    public function JsonFeed()
    {
        //$tables = [];
        $table = $this->model('TableService');
        $users = $table->GetOcupiedTablesForFeed();
        $json = json_encode($users);
        $this->view('LocalPage/Json', $json);
    }
}