<?php


class UserModel extends Model
{
    public function get()
    {
        $query="SELECT * FROM categories";
        $array=$this->getData($query);
        return $array;
    }
}