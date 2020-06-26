<?php


class AdminPost extends Controller
{
    public function addPosts()
    {
        $this->view("Admin/PostManager/addPosts");
    }
}