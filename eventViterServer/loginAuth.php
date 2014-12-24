<?php
/***************************************************************************************
return true if the user is autheticated. else return false
***************************************************************************************/

require_once 'config.php';
session_start();
$uName = $_POST['name'];
$pWord = $_POST['pwd'];
$qry = "SELECT userid, username FROM users WHERE username='".$uName."' AND password='".$pWord."'";
$res = mysqli_query($con,$qry);
$num_row = mysqli_num_rows($res);
$row=mysqli_fetch_assoc($res);
if( $num_row == 1 ) {
	echo 'true';
	$_SESSION['uName'] = $row['username'];
	}
else {
	echo 'false';
}

?>