<?php

class homePageController1 extends Controller
{
    public function index()
    {
        $user= $this->model('UserService');
        $user->removeOldUsers();
        
        session_start();
        
        if(!isset($_COOKIE['userCookie']))
        {
            setcookie('userCookie',  "\x00", time() + 60 * 60); // 1 ora
            
            if(isset($_SESSION['user_token'])) 
            {
                $user=$this->model('UserService');
                $user->removeUser($_SESSION['user_token']);
            }
            
            $gen = new TokenGenerator;
            $_SESSION['user_token'] = $gen->generateToken();
         } 
        
        $this->view('HomePage/HomePage');
    }
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