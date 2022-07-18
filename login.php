<?php session_start();?>

<?php 




include 'templates/functions.php';

if(!empty($_POST)){
	$user=ConnectUser($_POST);
	if (is_array($user) && count($user)>0){
		$_SESSION['card_id']=$_POST['card-n'];
		$_SESSION['ccv']=$_POST['ccv'];
	}
	else{
		echo 'not in';
	}

}else{
	echo 'xcv';
}
if(isset($_SESSION['card_id'])){
	header('location: home.php');
}


?>


<?php include 'templates/header.php'?>
<?php include 'templates/nav.php'?>

  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">login</h1>
        <p class="col-lg-10 fs-4">la ghaliba ila lah</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form action='login.php' method="post" class="p-4 p-md-5 border rounded-3 bg-light">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="000xxxxxxxx" name='card-n'>
            <label for="floatingInput">Card Number</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="ccv">
            <label for="floatingPassword">CCV</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
          <hr class="my-4">
          <small class="text-muted">By clicking Login, you agree to the terms of use.</small>
        </form>
      </div>
    </div>
  </div>


<?php include 'templates/footer.php'?>