<?php

class confirmationController extends Controller
{
    public function index($token = '')
    {
        $local = $this->model('confirmationModel'); // $local este obiectul model
        $local->name = $token;
        $this->view('confirmatio/confirmatio', ['name' => $local->name]);
    }
}