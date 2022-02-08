<?php

$page = @$_GET['page'];

switch ($page) {
	case '':
		$module = 'main';
		break;
	case 'about':
	case 'pricing':
	case 'services':
	case 'gallery':
	case 'register':
	case 'contact':
	case 'logout':
	case 'login':
	case 'admin_panel':
		$module = $page;
		break;
	default:
		$module = '404';
		break;
}


  include_once ('header.php');
		 include_once ('connection.php');
  include_once ($module . ".php");

  include_once ('footer.php');

	// $stmt="SELECT * FROM korisnik";
	// $result = $conn->query($stmt)->fetch();
	// echo $result->username;
?>
