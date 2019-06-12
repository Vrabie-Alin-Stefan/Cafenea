<?php

class errorPageController1 extends Controller
{
    public function index($page = '')
    {
        $this->view('Errors/403Page');
        echo '<button onclick="location.href=\'http://localhost/www.httpcafe.com/' . $page . '\'">Intoarceti-va la pagina anterioara</button>';
    }
}

