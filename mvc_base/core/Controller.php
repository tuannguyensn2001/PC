<?php


class Controller
{
    public function view($views)
    {
        require_once ("./views/".$views.".php");
    }
    public function model($model){
        require_once ("./models/".$model.".php");
        $model = new $model;
        return $model;
    }

}