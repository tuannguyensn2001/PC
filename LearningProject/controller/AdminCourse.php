<?php


class AdminCourse extends  Controller
{
    var $course;
    var $category;
    var $data=array();
    public function __construct()
    {
        if (!isset($_SESSION['adminisLogin']) || $_SESSION['adminisLogin'] == false){
            header("Location: ../Admin");
        }
        $this->category=$this->model("AdminCategoryModel");

        $this->course = $this->model("AdminCourseModel");
        $this->data['listCategory']=$this->category->getCategory();
        $this->data['listCourse']=$this->listCourse();
    }

    public function viewCourse()
    {

        $this->view("Admin/CourseManager/index",$this->data);
    }
    public function listCourse()
    {

       return $this->course->getCourse();
    }
    public function showCourse()
    {


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

       header("Location: viewCourse");

    }
    public function addCourse()
    {

        $this->view("Admin/CourseManager/addCourse",$this->data);
    }
    public function createCourse()
    {
     $this->course->createCourse();


     header("Location: viewCourse");
    }


}