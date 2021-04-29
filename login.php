<?php include 'header.php';?>

<div class="offset-2 col-md-8">
    <form method="POST" action="http://localhost/Chapter247/php/backendCode/loginController.php">
        <div class="form-group">
            <label for="">Email</label><span class="text-danger">*</span>
            <input type="text" name="email" placeholder="Email" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Password</label><span class="text-danger">*</span>
            <input type="password" name="password" placeholder="Password" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="Sign in" class="btn btn-primary">
        </div>
    </form>
</div>
<?php include 'footer.php';?>