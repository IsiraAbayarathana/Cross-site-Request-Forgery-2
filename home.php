<?php
class token {

	public static function checkToken($token,$cookiecsrf){
			if($cookiecsrf == $token){
				return true;
			}
	}


}
$val = $_POST["token"];


if(isset($_POST['updatepost'])){
	if(token::checkToken($val,$_COOKIE['csrfCookie'])){
		echo "hello ".$_POST['updatepost'];
	}
	else{
	echo "wrong".$_COOKIE['csrfCookie'];
	}
}
 ?>
