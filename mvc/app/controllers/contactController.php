<?php

class contactController extends Controller
{
    public function index($token = '')
    {
        $local = $this->model('contactModel'); // $local este obiectul model
        $local->name = $token;
        $this->view('contact/contact', ['name' => $local->name]);
    }
}