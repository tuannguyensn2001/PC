<?php


class AdminUser extends  Controller
{
    var $user,$course;
    var $data;
    public function __construct()
    {
        $this->user=$this->model("AdminUserModel");
        $this->course=$this->model("AdminCourseModel");
        $this->data['listUser']=$this->user->getUser();
        $this->data['listCourse']=$this->course->getCourseActive();
    }

    public function viewUser()
    {


        $this->view("Admin/UserManager/viewUser",$this->data);
    }
    public function editUser()
    {
        if ( empty($_POST['password'])) unset($_POST['password']);
        $data=$_POST;
        $mycourse=$this->user->getUser($_POST['id'])[0]['mycourse'];
        $mycourse=json_decode($mycourse,true);
        foreach($mycourse as $key=>$index){
            $mycourse[$key]= isset($data[$key]) ? 1 : 0;
            unset($data[$key]);
        }
       $data['mycourse']=json_encode($mycourse);
        $this->user->editUser($data);

        header("Location: viewUser");

    }
    public function showUser()
    {
        $id=$_POST['id'];
        $data=$this->user->getUser($id)[0];
        echo json_encode($data);
    }

}