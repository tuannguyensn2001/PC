<?php


class AdminPost extends Controller
{
    var $category,$data,$post;
    public function __construct()
    {
        if (!isset($_SESSION['adminisLogin']) || $_SESSION['adminisLogin'] == false){
            header("Location: ../Admin");
        }
        $this->category=$this->model("AdminCategoryModel");
        $this->post=$this->model("AdminPostModel");
        $this->data['listCategory']=$this->category->getCategory();
    }

    public function addPosts()
    {
        $this->view("Admin/PostManager/addPosts",$this->data);
    }
    public function createPost()
    {
        $datas=[];
        foreach($_POST as $key=>$value){
            $datas[$key]=$value;
        }
        $datas['is_acitve']= isset($_POST['is_active']) ? 1 : 0;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $datas['created_at']=date('Y-m-d H:i:s');
        $this->post->createPost($datas);
        header("Location: viewPosts");
    }
    public function viewPost()
    {
        $listPost=$this->post->getPost();

        $this->view("Admin/PostManager/viewPost",$listPost);
    }
    public function editPost($param)
    {
        $id=$param[0];
        $recentPost=$this->post->getPost($id);
        $this->data['recentPost']=$recentPost[0];
        $this->view("Admin/PostManager/editPosts",$this->data);
    }
    public function  editPostAction()
    {
        $editPost=[];
        foreach($_POST as $key=>$value){
            $editPost[$key]=$value;
        }
        $editPost['is_active']= isset($_POST['is_active']) ? 1 : 0;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $editPost['update_at']=date('Y-m-d H:i:s');
        $this->post->editPost($editPost);
        header("Location: viewPost");
    }
}