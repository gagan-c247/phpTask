<?php include 'header.php';?>
<div class="offset-2 col-md-8">
    <form method="POST" action="http://localhost/Chapter247/php/backendCode/RegisterController.php">
        <div class="form-group">
            <label for=""> First Name</label><span class="text-danger">*</span>
            <input type="text" name="fname" placeholder="First Name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Last Name</label><span class="text-danger">*</span>
            <input type="text" name="lname" placeholder="Last Name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Email</label><span class="text-danger">*</span>
            <input type="email" name="email" placeholder="Email" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Password</label><span class="text-danger">*</span>
            <input type="password" name="password" placeholder="Password" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Confirm password</label><span class="text-danger">*</span>
            <input type="password" name="cpsw" placeholder="Confirm password" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="Sign up" class="btn btn-primary">
        </div>
    </form>
</div>
<?php include 'footer.php';?>