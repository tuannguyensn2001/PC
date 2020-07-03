


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
    <link rel="stylesheet" href="../views/Admin/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <style>
        .fa-eye:hover{
            cursor:pointer;
        }
        .information{
            display: none;
        }

    </style>

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
                            <a href="../AdminCourse/viewCourse" class="link-viewCourse">Xem các khóa học</a>
                        </li>


                    </ul>
                </li>
                <li class="active">
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">QUẢN LÝ NGƯỜI DÙNG</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu1">
                        <li>
                            <a href="../AdminUser/viewUser" class="link-viewCourse">Xem người dùng</a>
                        </li>


                    </ul>
                </li>
                </li>
                <li class="active">
                    <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">QUẢN LÝ BÀI GIẢNG</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu3">
                        <li>
                            <a href="../AdminLesson/viewLesson" class="link-viewCourse">Xem bài giảng</a>
                        </li>


                    </ul>
                </li>
                <li class="active">
                    <a href="#homeSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">QUẢN LÝ BÀI VIẾT</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu4">
                        <li>
                            <a href="../AdminPost/viewPost" class="link-viewCourse">Xem bài viết</a>
                        </li>

                        <li>
                            <a href="../AdminPost/addPosts">Thêm bài viết</a>
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
            <?php
           if ( isset($_COOKIE['editUser '])){ ?>


            <h5><?=$_COOKIE['editUser']?></h5>
            <?php } ?>
            <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên tài khoản</th>

                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data['listadmin'] as $index){ ?>
                    <tr>
                        <th scope="row"><?=$index['id']?></th>
                        <td><?=$index['username']?></td>

                        <td ><button class="btn btn-primary view-details" content="<?=$index['id']?>" data-toggle="modal" data-target="#exampleModal"><i class='fas fa-eye ' style='font-size:24px'  ></i></button>

                        </td>

                    </tr>
                <?php } ?>

                </tbody>
            </table>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa khóa học</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="editAdmin" method="post" enctype="multipart/form-data">
                            <input type="text" class="info-id" hidden name="id">
                        <div class="modal-body">
                            <?php foreach ($data['listRole'] as $index){ ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="<?=$index['id']?>" id="role-<?=$index['id']?>" value="<?=$index['id']?>"  >
                                    <label class="form-check-label" for="<?=$index['id']?>">
                                        <?=$index['name']?>
                                    </label>
                                </div>
                            <?php } ?>




                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-submit">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Button trigger modal -->

    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->

    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script >
        var elementCheckbox=document.querySelectorAll(".form-check > input");
        $(document).ready(function () {

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');

            });
            $(".view-details").click(function () {
                for(let i of elementCheckbox){
                    i.removeAttribute("checked");
                }
                var id=$(this).attr("content");
                $.ajax({
                    type: "POST",
                    url: "showAdmin",
                    data: {
                        id,
                    },
                    success: function (data) {
                        var result = JSON.parse(data);
                       let id=document.querySelector(".info-id");
                       id.setAttribute("value",result['id']);
                        result['myrole']=JSON.parse(result['myrole']);
                        for(let i in result['myrole']) {
                            let element = document.getElementById("role-" + i);

                            if (result['myrole'][i] == 1 && element) {
                                element.setAttribute("checked", "checked");
                            }

                        }


                    }
                })
            })

        });


    </script>

</body>

</html>