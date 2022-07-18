<?php
function connect(){
	$con=mysqli_connect('localhost','root','','carel');
	if (!$con){
		echo 'error: ' . mysql_connect_error();
	}
	return $con;}

function ConnectUser($data){
    $con = connect();
    $card_n = $data['card-n'];
    $ccv = $data['ccv'];	
	$sql="SELECT * from users where card_id='$card_n' and ccv='$ccv'";
	$result=mysqli_query($con,$sql);
	$user=mysqli_fetch_all($result,MYSQLI_ASSOC);
	return $user;
	
}?>