
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-around py-3 mb-4 border-bottom ">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap" src="img/mdb-favicon.ico">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
      </ul>
<?php if(isset($_SESSION['card_id'])){
  print '<div class="col-md-3 text-end">
        <a href="logout.php"><button type="button" class="btn btn-outline-primary me-2">Logout</button></a>';
}else{
  print '<div class="col-md-3 text-end">
        <a href="Login.php"><button type="button" class="btn btn-outline-primary me-2">Login</button></a>';
}?>
              
      </div>
    </header>