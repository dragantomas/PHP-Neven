<?php
    $page = 'Login';
    include_once "sys/includes/head.php";
    include_once "sys/includes/navigation.php";
?>

<section id="main" >
    <div class="container ">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <form action="sys/controllers/login_check.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="loginEmail">Email</label>
                            <input type="email" class="form-control" id="loginEmail" name="loginEmail" placeholder="Email" aria-describedby="emailHelp" value="asd@asd.asd">
<!--                            <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>-->
                        </div>
                        <div class="form-group forgot-password-hide">
                            <label for="loginPassword">Password</label>
                            <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Password" autocomplete="on">
                        </div>
                    </div>

                    <div class="modal-footer main-color-bg-dark">
                        <a class="mr-auto main-color-bg-dark forgot-password-hide" href="javascript:hidePasswordField()" >Forgot your password? </a>
                        <a class="btn main-color-bg-dark d-none" href="index.php">Resend</a>
                        <button type="submit" class="btn main-color-bg-dark forgot-password-hide">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
    include_once "sys/includes/foot.php";
?>
