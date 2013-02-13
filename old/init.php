<?
session_start();
function is_authenticated() {
	return isset($_SESSION[authenticated]) &&
	$_SESSION[authenticated] == "yes";
}

function require_authentication() {
	if (!is_authenticated()) {
		header("Location:login.php?error=".urlencode("Not authenticated"));
		exit;
	}
}
require_once("connect.php");
?>
