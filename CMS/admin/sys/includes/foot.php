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