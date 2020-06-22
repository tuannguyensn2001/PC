

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./views/Outside/css/style.css">
    <link rel="stylesheet" href="./views/Outside/css/mediaquery.css">

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
                    <a class="nav-link" href="#"><b>Bài viết</b></a>
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

                        <a href="" class="btn vip-acc"><b>Xin chào <?=$_SESSION['dataUser']['username']?></b></a>
                        <a href="UserController/signOut" class="btn  sign-in"><b>Đăng xuất</b></a>

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
            <div class="row">
                <a href="./CourseController/index/<?=$data[0]['id']?>/1" class="col-md-6">
                    <div class="content-course-details">

                    <div class="content-course-details-img">
                          <img src="./views/Outside/img/course/<?=$data[0]['id']?>/thumbnail.png" alt="" height="275" width="100%">
                     </div>
                 
                        <div class="content-course-details-title"><?=$data[0]['name']?></div>
                        <div class="content-course-details-description"><?=$data[0]['description']?>

                        </div>
                        <div>
                            <div class="content-course-details-status">Đã sẵn sàng</div>
                            <div class="content-course-details-price">Giá: <?=$data[0]['price']?></div>
                        </div>
                   
                    </div>
                </a>
                <a href="" class="col-md-6">
                    <div class="content-course-details">

                    <div class="content-course-details-img">
                          <img src="./views/Outside/img/android.png" alt="" height="275" width="100%">
                     </div>
                 
                        <div class="content-course-details-title">Golang + Flutter</div>
                        <div class="content-course-details-description">Trong khoá học này chúng ta sẽ cùng nhau sử dụng Golang và Flutter để triển khai ứng dụng Github Trending (lấy về những repository đang hot trên Github). Đối với Golang chúng ta sẽ dùng Echo Framework để viết API, còn đối với Flutter được sử dụng làm mobile app để kiểm tra thành quả API được viết bởi Golang trước đó.

                        </div>
                        <div>
                            <div class="content-course-details-status">Đã sẵn sàng</div>
                            <div class="content-course-details-price">Giá: 750.000VND</div>
                        </div>
                   
                    </div>
                </a>
            </div>
            <div class="row">
                <a href="" class="col-md-6">
                    <div class="content-course-details">

                    <div class="content-course-details-img">
                          <img src="./img/android.png" alt="" height="275" width="100%">
                     </div>
                 
                        <div class="content-course-details-title">Golang + Flutter</div>
                        <div class="content-course-details-description">Trong khoá học này chúng ta sẽ cùng nhau sử dụng Golang và Flutter để triển khai ứng dụng Github Trending (lấy về những repository đang hot trên Github). Đối với Golang chúng ta sẽ dùng Echo Framework để viết API, còn đối với Flutter được sử dụng làm mobile app để kiểm tra thành quả API được viết bởi Golang trước đó.

                        </div>
                        <div>
                            <div class="content-course-details-status">Đã sẵn sàng</div>
                            <div class="content-course-details-price">Giá: 750.000VND</div>
                        </div>
                   
                    </div>
                </a>
                <a href="" class="col-md-6">
                    <div class="content-course-details">

                    <div class="content-course-details-img">
                          <img src="./img/android.png" alt="" height="275" width="100%">
                     </div>
                 
                        <div class="content-course-details-title">Golang + Flutter</div>
                        <div class="content-course-details-description">Trong khoá học này chúng ta sẽ cùng nhau sử dụng Golang và Flutter để triển khai ứng dụng Github Trending (lấy về những repository đang hot trên Github). Đối với Golang chúng ta sẽ dùng Echo Framework để viết API, còn đối với Flutter được sử dụng làm mobile app để kiểm tra thành quả API được viết bởi Golang trước đó.

                        </div>
                        <div>
                            <div class="content-course-details-status">Đã sẵn sàng</div>
                            <div class="content-course-details-price">Giá: 750.000VND</div>
                        </div>
                   
                    </div>
                </a>
            </div>
            <div class="row">
                <a href="" class="col-md-6">
                    <div class="content-course-details">

                    <div class="content-course-details-img">
                          <img src="./img/android.png" alt="" height="275" width="100%">
                     </div>
                 
                        <div class="content-course-details-title">Golang + Flutter</div>
                        <div class="content-course-details-description">Trong khoá học này chúng ta sẽ cùng nhau sử dụng Golang và Flutter để triển khai ứng dụng Github Trending (lấy về những repository đang hot trên Github). Đối với Golang chúng ta sẽ dùng Echo Framework để viết API, còn đối với Flutter được sử dụng làm mobile app để kiểm tra thành quả API được viết bởi Golang trước đó.

                        </div>
                        <div>
                            <div class="content-course-details-status">Đã sẵn sàng</div>
                            <div class="content-course-details-price">Giá: 750.000VND</div>
                        </div>
                   
                    </div>
                </a>
            
            </div>
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

















<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
</body>
</html>