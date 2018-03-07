<?php
//    include_once "sys/controllers/user_check.php";

    $page = 'Dashboard';
    // include_once "sys/includes/head.php";
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link id="nocss" rel="stylesheet" href="css/custom/style.css">

    <!--    Font Awsome-->
    <script defer src="js/fa-all.js"></script>
    <!--    CDN CKEditor-->
    <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
    <!--    ANIMATE CSS-->
    <link rel="stylesheet" href="css/animate.min.css">

    <title>Admin Area | Dashboard</title>
    <link rel="icon" type="image/png" href="img/favicon.png"/>

</head>
<body class="main-color-bg-dark">
<?php
    // include_once "sys/includes/navigation.php";
?>

<?php if($page == 'Login') {?>

<header id="header" class="main-color-bg-green mt-1">
    <div class="container pt-3 pb-3">
        <div class="row ">
            <div class="col-md-10">
                <h1><i class="fas fa-cogs"></i> <?=$page ?></h1>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
</header>

<?php } else { ?>

    <nav class="navbar navbar-expand-md pb-0 pt-0"> <!-- fixed-top -->
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
           <a class="navbar-brand " href="#" ><img src="img/semos_edu_logo_color.svg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if($page == 'Dashboard') {?>active <?php }?>"><a class="nav-link" href="index.php"> Dashboard <span
                            class="sr-only">(current)</span></a></li>
                <li class="nav-item <?php if($page == 'Pages') {?>active <?php }?>"><a class="nav-link" href="pages.php">Pages</a></li>
                <li class="nav-item <?php if($page == 'Posts') {?>active <?php }?>"><a class="nav-link" href="posts.php">Posts</a></li>
                <li class="nav-item <?php if($page == 'Users') {?>active <?php }?>"><a class="nav-link" href="users.php">Users</a></li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="login.php">Logout</a></li>
                <li class="nav-item animated flash infinite"><a class="nav-link " href="javascript:toggleCss();">Toggle Colors</a></li>
            </ul>

        </div>
    </nav>

<header id="header" class="main-color-bg-green mt-1">
    <div class="container pt-3 pb-3">
        <div class="row ">
            <div class="col-md-10">
                <h1><i class="fas fa-cogs"></i> <?=$page ?> &nbsp;&nbsp;&nbsp;<small class="offset-lg-2">Wellcome Neven</small></h1>
            </div>
            <div class="col-md-2">
                <div class="dropdown ">
                    <button class="btn main-color-bg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Create Content
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="" data-toggle="modal" data-target="#exampleModal">Add Page</a>
                        <a class="dropdown-item" href="login.php">Log In</a>
                        <a class="dropdown-item" href="javascript:alert(321);">Add Post</a>
                        <a class="dropdown-item" onclick="alert(123);" href="javascript:void(0);">Add User</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php } ?>
<section>
    <div class="container mt-2">
        <ol class="breadcrumb main-color-bg-white">
            <marquee behavior="scroll" direction="left"><span class="font-weight-bold"> Don't Be Lazy -  <a
                        href="https://youtu.be/ZXsQAXx_ao0" target="_blank">Just Do It</a> </span></marquee>
        </ol>
    </div>
</section>


    <!-- MAIN  index.php-->
    <section id="main"  class="mt-4">
        <div class="container ">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="index.php" class="list-group-item list-group-item-action main-color-bg-red-text-black"> <i class="fas fa-cogs"></i> Dashboard <span class="badge main-color-bg-dark float-right">15</span></a>
                        <a href="pages.php" class="list-group-item list-group-item-action main-color-bg">     <i class="fas fa-file-alt"></i> Pages <span class="badge main-color-bg-dark float-right">23</span></a>
                        <a href="posts.php" class="list-group-item list-group-item-action main-color-bg">     <i class="fas fa-edit"></i> Posts     <span class="badge main-color-bg-dark float-right">32</span></a>
                        <a href="users.php" class="list-group-item list-group-item-action main-color-bg">     <i class="fas fa-users"></i> Users    <span class="badge main-color-bg-dark float-right">41</span></a>
                    </div>
                    <h4>Progress</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped main-color-bg-green" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100">66%</div>
                    </div>
                </div>
                <div class="col-md-9">
<!--                WEBSITE OVERVIEW-->

                <div class="card main-color-bg">
                    <div class="row">
                        <div class="col-1" style=" left:10px;"></div>
                        <h2 class="col-10 card-header main-color-bg-red-text-black text-center align-bottom neno-header" >Website Overview</h2>
                        <div class="col-1" style=" left:-10px;"></div>
                    </div>
                    <div class="card-body">
                        <div class="card-group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="list-group-item list-group-item-action main-color-bg ">  <i class="fas fa-file-alt fa-5x"></i>  <span class="badge main-color-bg-dark float-right">23</span></a>Pages</h5>
                                    <p class="card-text">This content is a little bit longer.</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="list-group-item list-group-item-action main-color-bg">     <i class="fas fa-edit fa-5x"></i>  <span class="badge main-color-bg-dark float-right">32</span></a>Posts</h5>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="list-group-item list-group-item-action main-color-bg">     <i class="fas fa-users fa-5x"></i>  <span class="badge main-color-bg-dark float-right">41</span></a>Users</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!--                TABLE-->

                <div class="mt-4 card main-color-bg">
                    <div class="row">
                        <div class="col-1" style=" left:10px;"></div>
                        <h2 class="col-10 card-header main-color-bg-red-text-black text-center align-bottom neno-header" > Latest Users</h2>
                        <div class="col-1" style=" left:-10px;"></div>
                    </div>

                    <div class="card-body">
                    <table class="table table-striped table-bordered main-color-bg-white text-center">
                        <thead class="main-color-bg-red-text-black">
                            <tr class="">
                                <th>Name</th>
                                <th>Email</th>
                                <th>Joined</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>asd@asd.asd</td>
                                <td>2015-04-14 12:50:44</td>
                            </tr>
                            <tr>
                                <td>Sam Semov</td>
                                <td>asd@asd.asd</td>
                                <td>2015-04-14 12:50:44</td>
                            </tr>
                            <tr>
                                <td>Vesna Zmijanac</td>
                                <td>asd@asd.asd</td>
                                <td>2015-04-14 12:50:44</td>
                            </tr>
                            <tr>
                                <td>Stavre Mihailov</td>
                                <td>asd@asd.asd</td>
                                <td>2015-04-14 12:50:44</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    // include_once "sys/includes/foot.php";
?>
<?php if($page == 'Login') {?>

<footer class="main-color-bg-green footer pt-0 border-0">
    <div class="container">
        <small class="font-weight-bold text-center mb-0 ">Copyright NenoLand, &copy; 2018</small>
    </div>
</footer>

<?php } else { ?>

<footer class="main-color-bg-green card-footer pt-0 border-0">
    <small class="font-weight-bold text-center mb-0 ">Copyright NenoLand, &copy; 2018</small>
</footer>

<?php } ?>


<!--MODAL-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content main-color-bg">
            <div class="modal-header main-color-bg-red-text-black">
                <h5 class="modal-title" id="exampleModalLabel">Add Page</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="textAreaEditor">City</label>
                            <textarea class="form-control" id="textAreaEditor" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer main-color-bg-dark">
                    <button type="submit" class="btn main-color-bg-dark">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<script src="js/custom/custom.js"></script>
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>