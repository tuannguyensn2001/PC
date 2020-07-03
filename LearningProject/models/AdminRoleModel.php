<?php


class AdminRoleModel extends Model
{
    public function getRole()
    {
        $query="SELECT * FROM role";
        return $this->getData($query);
    }
}