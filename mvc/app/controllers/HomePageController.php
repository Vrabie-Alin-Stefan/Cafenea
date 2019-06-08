<?php

class HomePageController extends Controller
{
    public function index($token = '')
    {
        $local = $this->model('HomePageModel'); // $local este obiectul model
        $local->name = $token;
        $this->view('HomePage/HomePage', ['name' => $local->name]);
    }
}