<?php


class AdminModel extends Model
{
    public function login($data)
    {
        $username=$data['username'];
        $password=$data['password'];
      $query="SELECT * FROM admin WHERE username='$username' AND password='$password'";
      return $this->getData($query);
    }
}