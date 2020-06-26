<?php


class AdminUserModel extends Model
{

    public function  getUser($id='')
    {
        if (empty($id)){
            $query="SELECT * FROM users";
        }
        else{
            $query="SELECT * FROM users WHERE id=$id";
        }
        return $this->getData($query);
    }
    public function editUser($data)
    {


        $result=$this->update($data,"users");




    }
}