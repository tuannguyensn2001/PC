<?php


class HomeController extends Controller
{
    public function index()
    {
    $course = $this->model("CourseModel");
    $data=$course->getCourse();
    $this->view("Outside/index",$data);
    }

}