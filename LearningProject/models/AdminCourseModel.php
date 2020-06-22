<?php


class AdminCourseModel extends Model
{
    public function getCourse($id='')
    {
        if (empty($id)){
        $query = "SELECT c.*,cate.`name` as category
FROM `course` c 
LEFT JOIN category cate ON c.category_id=cate.id"; } else{
            $query = "SELECT c.*,cate.`name` as category
FROM `course` c
LEFT JOIN category cate ON c.category_id=cate.id WHERE c.id=$id";
        }
        return $this->getData($query);
    }
    public function editCourse($data)
    {

        echo "<pre>";
       if (isset($data['typethumbnail'])){
           $thumbnail=explode(".",$data['typethumbnail']['name'])[1];
           $target_dir="views/Outside/img/course/".$data['id']."/thumbnail.".$thumbnail;
           if(file_exists($target_dir))
           {
               chmod($target_dir,0755);
               unlink($target_dir);
           }
        $filenames= $data['typethumbnail']['tmp_name'];
        echo $target_dir;
            move_uploaded_file($filenames,$target_dir);








           $data['typethumbnail']=$thumbnail;


       }



//        header("Location: .././developer.jpg");



       $this->update($data,"course");

    }
}