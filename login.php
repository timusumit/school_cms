<?php include('includes/head.php'); ?>

<!-- header part start-->
<?php include('includes/header.php'); ?>
<!-- header part end-->
<style>
.head_main{
opacity:1 !important;
}
</style>
<!-- content area-->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cont-main">
<div class="col-lg-4 col-md-4 col-sm-3 hidden-xs">
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="background:#f9f9f9; padding:20px;">
<h3>Admin Login</h3>
<form method="post" action="logged_in.php">
<input name="uname" type="text" class="form-control" placeholder="Username">
<br>
<input name="pwd" type="password" class="form-control" placeholder="Password">
<br>
<button class="btn btn-success"  type="submit">Login</button>
<br>
<a href="#">Forgot Password/Username?</a>
</form>
</div>
<div class="col-lg-4 col-md-4 col-sm-3 hidden-xs">
</div>
</div>
<!-- content area-->

<!-- footer part-->
<?php include('includes/footer.php'); ?>
<!-- footer part-->

