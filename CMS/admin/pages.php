<?php
    $page = 'Pages';
    include_once "sys/includes/head.php";
    include_once "sys/includes/navigation.php";
?>
    <section id="main"  class="mt-4">
        <div class="container ">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="index.php" class="list-group-item list-group-item-action main-color-bg"> <i class="fas fa-cogs"></i> Dashboard <span class="badge main-color-bg-dark float-right">15</span></a>
                        <a href="pages.php" class="list-group-item list-group-item-action main-color-bg-red-text-black">     <i class="fas fa-file-alt"></i> Pages <span class="badge main-color-bg-dark float-right">23</span></a>
                        <a href="posts.php" class="list-group-item list-group-item-action main-color-bg">     <i class="fas fa-edit"></i> Posts     <span class="badge main-color-bg-dark float-right">32</span></a>
                        <a href="users.php" class="list-group-item list-group-item-action main-color-bg">     <i class="fas fa-users"></i> Users    <span class="badge main-color-bg-dark float-right">41</span></a>
                    </div>
                    <h4>Progress</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped main-color-bg-green" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100">66%</div>
                    </div>
                </div>
                <div class="col-md-9">

                </div>
            </div>
        </div>
    </section>
<?php
    include_once "sys/includes/foot.php";
?>