<?php


class UserController extends Controller
{
  public function signIn(){
      $this->view("Outside/login");
  }
  public function signInAction()
  {
     $user=$this->model("UserModel");
     $result= $user->checkUser($_POST);
     if (!empty($result)){
         $_SESSION['isLogin']=true;
         $_SESSION['dataUser']=$result[0];
         header('Location: ../');
     } else{
         setcookie("isLogin","Đăng nhập không thành công",time()+5);
         header("Location: signIn");
     }

  }
  public function signOut(){
      unset($_SESSION['isLogin']);
        header('Location: ../');

  }

}