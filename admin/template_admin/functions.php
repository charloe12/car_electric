<?php 
function connect(){
	$con=mysqli_connect('localhost','root','','carel');
	if(!$con){
		echo 'error: ' . mysql_connect_error();
	}
	return $con;
}
function connectadmin($data){
	$con=connect();
	$email=$data['email'];
	$password=$data['password'];
	$sql="SELECT * from administrateur where email='$email' and mp='$password'";
	$result=mysqli_query($con,$sql);
	$admin=mysqli_fetch_all($result,MYSQLI_ASSOC); 
	return $admin;


}
function getallusers(){
	$con=connect();
	$sql='SELECT * from users';
	$result=mysqli_query($con,$sql);
	$users=mysqli_fetch_all($result,MYSQLI_ASSOC); 
	return $users;
}
function deleteuser($id){
	$con=connect();
	$sql="DELETE from users where id_user='$id'";
	$result=mysqli_query($con,$sql);
	$users=mysqli_fetch_all($result,MYSQLI_ASSOC); 
	return $users;
}
?>
