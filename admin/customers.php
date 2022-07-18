 <?php session_start()?>
<?php if(!isset($_SESSION['admin'])){
  header('location:login.php');
}?>
<?php include 'template_admin/header.php'?>
<?php include 'template_admin/sidebar.php'?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">
 <h2>CUSTOMERS TABLE</h2>
 
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">card_id</th>
              <th scope="col">ccv</th>
              <th scope="col">delete</th>
              <th scope="col">edit</th>
            </tr>
          </thead>
          <tbody>
<?php 
include 'template_admin/functions.php';
$users=getallusers();
foreach ($users as $user) {
  print '<tr>
              <td>'.$user['id_user'].'</td>
              <td>'.$user['card_id'].'</td>
              <td>'.$user['ccv'].'</td>
              <td><a href="customers.php?id='.$user['id_user'].'"><button id="alert" type="submit">delete</button></a></td>
              <td><a href=""><button id="alert" type="submit">edit</button></a></td>
            </tr>';
}
 ?>

 <script type="text/javascript">
    document.getElementById("alert").addEventListener("click", ()=>{
      alert('are you sure');
    });
 </script>
 <style type="text/css">
   #alert{
    background-color: black;
    color: white;
   }
   #alert:hover{
    background-color: blue;
    transition: 200ms;
   }
 </style>
 
 
            
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<?php include 'template_admin/footer.php'?>