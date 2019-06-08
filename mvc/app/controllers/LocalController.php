<?php

class LocalController extends Controller
{
    public function index($token = '')
    {
        if(isset($_SERVER['HTTP_REFERER']))
        {
            if($_SERVER['HTTP_REFERER'] == "http://localhost/mvc/public/HomePageController/index")
            {
                $local = $this->model('LocalModel'); // $local este obiectul model
                $local->name = $token;
                
                $this->view('local/local', ['name' => $local->name]);
            }
            else
            {
                $this->view('errors/403');
            }
        }
        else
        {
            $this->view('errors/403');
        }
    }
}