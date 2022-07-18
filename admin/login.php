<?php session_start();?>

<?php 

include 'template_admin/functions.php';

if(!empty($_POST)){
	$admin=connectadmin($_POST);
	if (is_array($admin) && count($admin)>0){
		$_SESSION['admin']=$_POST['email'];
		$_SESSION['password']=$_POST['password'];
	}
	else{
		echo 'not in';
	}

}else{
	echo 'post empty';
}
if(isset($_SESSION['admin'])){
	header('location: profile.php');
}


?>


<?php include 'template_admin/header.php'?>


  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Espace Admin</h1>
        <p class="col-lg-10 fs-4">la ghaliba ila lah</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form action='login.php' method="post" class="p-4 p-md-5 border rounded-3 bg-light">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@exemple.com" name='email'>
            <label for="floatingInput">Email acount</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
          <hr class="my-4">
          <small class="text-muted">By clicking Login, you agree to the terms of use.</small>
        </form>
      </div>
    </div>
  </div>


<?php include 'template_admin/footer.php'?>