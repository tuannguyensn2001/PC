<?php


class AdminCourse extends  Controller
{
    var $course;
    var $data=array();
    public function __construct()
    {

        $this->course = $this->model("AdminCourseModel");
    }

    public function index()
    {

        $category=$this->model("AdminCategoryModel");
        $this->data['listCategory']=$category->getCategory();
        $this->data['listCourse']=$this->listCourse();
        $this->view("Admin/CourseManager/index",$this->data);
    }
    public function listCourse()
    {

       return $this->course->getCourse();
    }
    public function showCourse()
    {
        $category=$this->model("AdminCategoryModel");

        $id=$_POST['content'];
        $courseDetails['courseDetails']=$this->course->getCourse($id)[0];
//        $courseDetails['listCategory']=$category->getCategory();
        echo json_encode($courseDetails);
    }
    public function editCourse()
    {



       $data=$_POST;
       if (!empty($_FILES['thumbnail']['name'])) $data['typethumbnail']=$_FILES['thumbnail'];


       $this->course->editCourse($data);
       header("Location: ../AdminCourse");

    }

}