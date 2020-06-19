<?php


class HomeController extends Controller
{
    public function index()
    {
        $a=$this->model("UserModel");
        print_r($a->get());
    $this->view("index");
    }
    public function sum($array){
        print_r($array);
    }
}