<?php

class productsController extends Controller
{
    public function index($token = '')
    {
        $local = $this->model('productsModel'); // $local este obiectul model
        $local->name = $token;
        $this->view('products/products', ['name' => $local->name]);
    }

    public function ocupa()
    {
        $masa = $_GET['masa'];
        $local = $this->model('productsModel'); // $local este obiectul model
        $this->view('products/products', ['masa' => $local->name]);
    }
}