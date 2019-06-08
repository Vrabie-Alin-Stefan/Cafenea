<?php

class Home extends Controller
{
    public function index($name = '')
    {
        $user = $this->model('User'); // $user este obiectul model
        $user->name = $name;
        
        $this->view('home/index', ['name' => $user->name]);
    }

}