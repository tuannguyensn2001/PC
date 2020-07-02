<?php




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Xem khóa học</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../../views/Admin/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>

</head>

<body>
    <div class="wrapper">

         <nav id="sidebar">
            <div class="sidebar-header">
                <h3>ADMIN</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Dummy Heading</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">QUẢN LÝ KHÓA HỌC</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="../../AdminCourse/viewCourse" class="link-viewCourse">Xem các khóa học</a>
                        </li>


                    </ul>
                </li>
                <li class="active">
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">QUẢN LÝ NGƯỜI DÙNG</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu1">
                        <li>
                            <a href="../../AdminUser/viewUser" class="link-viewCourse">Xem người dùng</a>
                        </li>


                    </ul>
                </li>
                </li>
                <li class="active">
                    <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">QUẢN LÝ BÀI GIẢNG</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu3">
                        <li>
                            <a href="../../AdminLesson/viewLesson" class="link-viewCourse">Xem bài giảng</a>
                        </li>


                    </ul>
                </li>
                <li class="active">
                    <a href="#homeSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">QUẢN LÝ BÀI VIẾT</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu4">
                        <li>
                            <a href="../../AdminPost/viewPost" class="link-viewCourse">Xem bài viết</a>
                        </li>

                        <li>
                            <a href="../../AdminPost/addPosts">Thêm bài viết</a>
                        </li>
                    </ul>
                </li>




            </ul>
            <!---->
            <!--            <ul class="list-unstyled CTAs">-->
            <!--                <li>-->
            <!--                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>-->
            <!--                </li>-->
            <!--                <li>-->
            <!--                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>-->
            <!--                </li>-->
            <!--            </ul>-->
        </nav>


        <!-- Page Content  -->
        <div id="content">

            <?php require_once "./views/Admin/components/nav.php";?>

            <form action="../../AdminPost/editPostAction" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tiêu đề bài viết</label>
                    <input type="text" hidden name="id" value=<?=$data['recentPost']['id']?>>
                    <input type="text" name="title" class="form-control" value="<?=$data['recentPost']['title']?>">
                </div>
                <div class="form-group">
                    <label for="">Mô tả bài viết</label>
                    <input type="text" name="description" class="form-control" value="<?=$data['recentPost']['description']?>">
                </div>
                <div class="form-group">
                    <label for="">Nội dung bài viết</label>
                    <textarea name="content" id="editor" class="form-control" ><?=$data['recentPost']['content']?></textarea>
                </div>
                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select class="custom-select" name="category_id">

                        <?php foreach($data['listCategory'] as $index){ ?>
                            <option value=<?=$index['id']?>
                            <?php
                            if ($data['recentPost']['category_id'] == $index['id'])
                                echo "selected";
                            ?>

                            ><?=$index['name']?></option>
                        <?php } ?>
                    </select>
                </div>

                <hr>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" value=1
                           <?php
                           if ($data['recentPost']['is_active'] == 1)
                               echo "checked";
                           ?>

                           name="is_active">
                    <label class="custom-control-label" for="customCheck1"  >Hiển thị bài viết</label>
                </div>
                <hr>
                <button type="submit" class="btn btn-success">Sửa bài viết</button>

            </form>




    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->

    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script >

        $(document).ready(function () {


            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');

            });







        });
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );


    </script>

</body>

</html>