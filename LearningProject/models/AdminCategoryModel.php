<?php


class AdminCategoryModel extends Model
{
    public function getCategory()
    {
        $query="SELECT * FROM category";
        return $this->getData($query);
    }

}