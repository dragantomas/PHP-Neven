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