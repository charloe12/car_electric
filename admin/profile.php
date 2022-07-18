<?php session_start()?>
<?php if(!isset($_SESSION['admin'])){
	header('location:login.php');
}?>
<?php include 'template_admin/header.php'?>
<?php include 'template_admin/sidebar.php'?>
<?php include 'template_admin/footer.php'?>