<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../views/Outside/css/style.css">
    <link rel="stylesheet" href="../views/Outside/css/mediaquery.css">
    <link rel="stylesheet" href="../views/Outside/css/course-style.css">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
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
                <a href="" class="btn  sign-in"><b>Đăng nhập</b></a>
                <a href="" class="btn vip-acc"><b>TÀI KHOẢN VIP</b></a>
              </div>
             
            </div>
          </nav>
    </header>
    <section>
        <div class="container ">
          <div class="form-login">
              <form action="signInAction" method="post">
                <?php if(isset($_COOKIE['isLogin'])){
                    echo $_COOKIE['isLogin'];
                } ?>
                  <div class="form-group">
                      <label for="">Email</label>
                      <input type="text" class="form-control" name="email">
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password">
                   
                </div>
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
                <p>Bạn chưa có tài khoản ?</p>
                <a href="">Đăng ký ngay</a>
              </form>
         
          </div>
         
        </div>

    </section>
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