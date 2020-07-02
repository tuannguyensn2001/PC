


<?php


$course=[];
$count=0;
for($i=0;$i<count($data);$i+=2){
    $count++;
   $course[$count][0]=$data[$i];
   if (isset($data[$i+1]))  $course[$count][1]=$data[$i+1];
}




?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./views/Outside/css/style.css">
    <link rel="stylesheet" href="./views/Outside/css/mediaquery.css">
    <style>
        .users{
            position: relative;
            text-shadow: 0 1px 0 rgba(0,0,0,0.25);
            color: #fff;
            background-color: #212529;
        }
        .users:hover{
            color: #fff;
        }
        .outside-menu-acc{
        position: absolute;
        display: none;
       width: 150px;
        }
        .menu-acc{

            text-align: center;
            list-style-type: none;
            background-color: #ebebeb;

            display: flex;
            flex-direction: column;
        }
        .menu-acc a{
            margin-left: 10px;
            text-decoration: none;
        }
        .menu-acc a:hover{
        color: red;
        }
        .menu-acc .btn{

            margin-left: 0;
            background-color:#e5aa00;
            box-shadow: 0 3px 6px rgba(27,43,106,0.2);
            color: #424242;
            text-shadow: 0 1px rgba(180,0,0,0.16), 0 -1px rgba(255,255,255,0.16);
            border-top-color: rgba(255,255,255,0.5);
            border-bottom-color: rgba(180,0,0,0.2);
        }
    .menu-acc .btn:hover{
    color: #424242;
    box-shadow: 0 6px 14px rgba(27,43,106,0.24);
    background-color: #ffbd00;
    }
    </style>
</head>
<body>
 
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark  ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
              
              </span>
              
            </button>
            <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
              <a class="navbar-brand" href="#">Hidden brand</a>
              <ul class="navbar-nav  ">
                <li class="nav-item actived">
                  <a class="nav-link" href="#"><b>Trang chủ</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><b>Videos</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="PostController/viewPost"><b>Bài viết</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><b>Liên hệ</b></a>
                  </li>
              </ul>
              <div >
               <?php
                    if (!isset($_SESSION['isLogin']) || $_SESSION['isLogin']==false){ ?>
                        <a href="UserController/signIn" class="btn  sign-in"><b>Đăng nhập</b></a>
                <a href="" class="btn vip-acc"><b>TÀI KHOẢN VIP</b></a>
                 <?php   }    else{

                        ?>

                        <a href="" class="btn users"><b>Xin chào <?=$_SESSION['dataUser']['username']?></b>

                        </a>
                        <div class="outside-menu-acc">
                        <div class="menu-acc">
                            <a href="">Tài khoản của tôi</a>
                            <a href="CourseController/showMyCourse">Khóa học của tôi</a>
                            <a href="UserController/signOut" class="btn  sign-in"><b>Đăng xuất</b></a>
                        </div>
                        </div>


                <?php      }
               ?>
              </div>
             
            </div>
          </nav>
    </header>
    <div class="intro ">
        <h1>
           Code4Func.com
           <br>
           Đóng góp vào chất lượng
           <br>
           nhân sự CNTT Việt Nam
            
        </h1>
    </div>
    <div class="container content">
        <div class="content-videos">
            <h1>
                <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                <span>Videos</span>
            </h1>
            <a href="">
                <div class="content-videos-details">
                    
                        <img src="./views/Outside/img/js.png" alt="" height="100" width="100">
                       
                   
                    <div class="main ">
                    <span class="main-title"><b>Android</b></span>
                    <span class="main-content"><b>Bảo mật API</b></span>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="content-videos-details">
                    
                        <img src="./views/Outside/img/js.png" alt="" height="100" width="100">
                       
                   
                    <div class="main ">
                    <span class="main-title"><b>Android</b></span>
                    <span class="main-content"><b>Bảo mật API</b></span>
                    </div>
                </div>
            </a>
        </div>
        <div class="content-course">
            <h1>
                <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                <span>Khóa học</span>
            </h1>

                <?php foreach($course as $index){ ?>
            <div class="row">
                       <?php
                       $limit=1;
                       if (isset($index[1])) $limit=2;

                       for($i=0;$i<$limit;$i++){
                           if ($index[$i]['is_active'] == 1) {
                           ?>
                           <a href="./CourseController/index/<?=$index[$i]['id']?>/1" class="col-md-6">
                               <?php } else{ ?>
                               <a href="" class="col-md-6 course-disabled">
                          <?php  }?>
                               <div class="content-course-details">

                                   <div class="content-course-details-img">
                                       <img src="./views/Outside/img/course/<?=$index[$i]['id']?>/thumbnail.png" alt="" height="275" width="100%">
                                   </div>

                                   <div class="content-course-details-title"><?=$index[$i]['name']?></div>
                                   <div class="content-course-details-description"><?=$index[$i]['description']?>

                                   </div>
                                   <div>
                                       <div class="content-course-details-status"><?php
                                           if ($index[$i]['is_active'] == 1) echo "Sẵn sàng";
                                           else echo "Sắp ra mắt";
                                           ?></div>
                                       <div class="content-course-details-price">Giá: <?=$index[$i]['price']?></div>
                                   </div>

                               </div>
                           </a>
                <?php } ?>
                            </div>

            <?php } ?>
        </div>
      
    </div>
    <div class="before-footer">
       <a href="" class="btn btn-primary ">LIÊN HỆ VỚI CHÚNG TÔI </a>
    </div> 
    <footer>
        <div>
            <div class="footer-left">
                <a href="">Điều khoản sử dụng</a>
                <a href="">Bảo mật thanh toán</a>
                <a href="">Bảo mật thông tin cá nhân</a>
                <a href="">Giới thiệu Code4Func</a>
            </div>
            <div class="footer-center">
                <h5>Code4Func sẽ giúp bạn những gì</h5>
               <p>Code4Func sẽ đưa tới các bạn những kiến thức cơ bản vững chắc cũng như những kiến thức thực chiến về lập trình đồng thời Code4Func cũng mong muốn cùng bạn góp một phần sức nhỏ để tạo ra các sản phẩm IT chất lượng.</p>
              <a href="" class="btn">XEM CÁC KHÓA HỌC</a>
            </div>
            <div class="footer-right">
                <h5>Theo dõi Code4Func</h5>
                <form action="">
                   <div class="form-group">
                    <input type="email" placeholder="email@address.com" >
                    <button type="submit">Đăng ký</button>
                   </div>
                </form>
            </div>
        </div>
    </footer>













<script >
    var i = 0;
document.querySelector(".users").onclick=function(event){
    i++;
    event.preventDefault();
   var length=$(event.currentTarget).width();
    document.querySelector(".outside-menu-acc").style.width=length;
    if (i % 2 ==1 ){
        document.querySelector(".outside-menu-acc").style.display="block";

    } else{
        document.querySelector(".outside-menu-acc").style.display="none";
    }
}


</script>



<script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $(".course-disabled").click(function (event) {
                event.preventDefault();
            })
        })
    </script>


</body>
</html>