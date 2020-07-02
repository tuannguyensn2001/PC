<?php


class Admin extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        if (!isset($_SESSION['adminisLogin']) || $_SESSION['adminisLogin'] == false)
        $this->view("Admin/login");
        else{
            $this->view("Admin/index");
        }
    }
    public function adminLogin()
    {

       if (isset($_POST['username']) && isset($_POST['password'])){
           $data['username']=$_POST['username'];
           $data['password']=$_POST['password'];
           $admin=$this->model("AdminModel");
           $result=$admin->login($data);
           if (empty($result)) {
               setcookie("msgAdmin","Đăng nhập không thành công",time()+10);
               header("Location: ../Admin");

           } else{
               $_SESSION['adminisLogin']=true;
               header("Location: ../Admin");
           }
    }


    }
    public function adminLogout()
    {
        unset($_SESSION['adminisLogin']);
        header("Location: ../Admin");
    }


}