<?php


class AdminCategoryModel extends Model
{
    public function getCategory()
    {
        $query="SELECT * FROM category";
        return $this->getData($query);
    }
    public function countCategory()
    {
        $query="SELECT COUNT(id) AS NumberOfCategory FROM category";
        return $this->getData($query);
    }

}