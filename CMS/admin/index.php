<?php
//    include_once "sys/controllers/user_check.php";

    error_reporting(0);

    $page = 'Dashboard';

    include_once "sys/includes/head.php";

    include_once "sys/includes/navigation.php";

?>

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
    include_once "sys/includes/foot.php";
?>
