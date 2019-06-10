<?php

class homePageController extends Controller
{
    public function index()
    {
        session_start();
        
        if(!isset($_COOKIE['userCookie']))
        {
            setcookie('userCookie',  "\x00", time() + 60 * 60); // 1 ora
            $gen = new TokenGenerator;
            
            $_SESSION['user_token'] = $gen->generateToken();
         } 
        
        //$this->findLocation();  
        $this->view('HomePage/HomePage');
    }
    
    
    /*private function findLocation() {
        echo '<script type="text/javascript">
                function getLocation() {
                    if(navigator.geolocation) {
                        navigator.permissions.query({name:\'geolocation\'})
                            .then(function(permissionStatus) 
                            {
                                if(permissionStatus.state == \'prompt\' || permissionStatus.state == \'granted\') 
                                {
                                    navigator.geolocation.getCurrentPosition(function(position) 
                                    {
                                        document.cookie = "latitude =" + position.coords.latitude;
                                        document.cookie = "longitude =" + position.coords.longitude;
                                        location.href = "http://localhost/www.httpcafe.com/local"
                                    });
                                } 
                                else if(permissionStatus.state == \'denied\') 
                                {
                                    alert(\'The GPS was blocked by the user!\');
                                }
                            },  function error(msg) {alert(\'Please enable your GPS position feature.\');},  
                            {maximumAge:10000, timeout:5000, enableHighAccuracy: true});
                    }
                }
              }
            </script>';
    }*/
}

class TokenGenerator 
{
    protected $chars;

    public function __construct()
    {
        $this->chars = implode(range('a','z')) . implode(range('A', 'Z')) . implode(range(0, 9)) . implode(array(1 => '!', 2 => '"', 3 => '#', 4 => '$', 5 => '%', 6 => '^', 7 =>'\'', 8 => '(', 9 => ')', 10 => '*', 11 => '+', 12 => ',', 13 => '-', 14 => '.', 
                                                                                           15 => '/', 16 => ':', 17 => ';', 18 => '<', 19 => '=', 20 => '>', 21 => '?', 22 => '@', 23 => '[', 24 => '\\', 25 => ']', 26 => '^', 27 => '_', 28=> '`'));
        $this->chars = str_shuffle($this->chars); 
    }
                
    public function generateToken()
    {
        $token = "";
        for($i=1; $i<=32; $i++) 
        {
            $var1 = ord(random_bytes(1));
            $var2 = ord(random_bytes(1));
                        
            if($var1 < $var2) $randomPosition= random_int ($var1, $var2);
            else $randomPosition = random_int ($var2, $var1);
                        
            $randomPosition %= strlen($this->chars);
            if($this->chars[$randomPosition] === '\'' || $this->chars[$randomPosition] === '\\') 
            {
                $token .= '\\' . $this->chars[$randomPosition]; 
            } else {
                $token .= $this->chars[$randomPosition];
            }
        }
        return $token;
    }
}