<?php

class ProductPageController extends Controller
{
    public function index($token = '')
    {
        $local = $this->model('ProductPageModel'); // $local este obiectul model
        $local->name = $token;
        $this->view('ProductPage/ProductPage', ['name' => $local->name]);
    }

    public function meniul()
    {
        $meniu = $_GET['meniu'];
        $local = $this->model('ProductPageModel'); // $local este obiectul model
        $this->viewReferal('ProductPage/ProductPage', $meniu);
    }
}