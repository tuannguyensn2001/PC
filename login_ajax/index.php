<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <form action="">
              <div class="form-group">
                  <label for="">Tên đăng nhập</label>
                  <input type="text" class="form-control" name="username" id="username">
              </div>
              <div class="form-group">
                  <label for="">Mật khẩu</label>
                  <input type="password" class="form-control" name="password" id="password">
              </div>
                <button class="btn btn-primary" type="button">Đăng ký</button>
          </form>
      </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
       $("button").click(function(event){
           event.preventDefault();
           let username=$("#username").val();
           let password=$("#password").val();

           $.ajax({
               url:'signUp.php',
               type:"post",
               data:{
                   username,password
               },
               success:function(data){
                   console.log(data);
               }
           })
       })
    })
    </script>
 
  </body>
</html>