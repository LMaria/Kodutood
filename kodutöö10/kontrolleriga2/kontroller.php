<?php
session_start();
require_once("vaated/head.html");

$pildid = array(
		1=>array('src'=>"pildid/nameless1.jpg", 'alt'=>"nimetu 1"),
		2=>array('src'=>"pildid/nameless2.jpg", 'alt'=>"nimetu 2"),
		3=>array('src'=>"pildid/nameless3.jpg", 'alt'=>"nimetu 3"),
		4=>array('src'=>"pildid/nameless4.jpg", 'alt'=>"nimetu 4"),
		5=>array('src'=>"pildid/nameless5.jpg", 'alt'=>"nimetu 5"),
		6=>array('src'=>"pildid/nameless6.jpg", 'alt'=>"nimetu 6"),
	);
	
$page="pealeht";
if (isset($_GET['page']) && $_GET['page']!=""){
	$page=htmlspecialchars($_GET['page']);
}




switch($page){
	case "galerii":
		include("vaated/galerii.html");
		session_destroy();
		session_start();
		break;
		
	case "vote":
		if(isset($_SESSION['voted_for'])){
		$id=htmlspecialchars($_SESSION['voted_for']);	
	    echo "Valik on juba tehtud! Uuesti valimiseks mine tagasi galeriilehele";
	    include ("vaated/tulemus.html");
    }else{
        include("vaated/vote.html");
    }
		
	break;
	case "tulemus":
		$id=false;
		$voted_for = false;
		
		if (isset($_POST['pilt']) && isset($pildid[$_POST['pilt']])){
			$id=htmlspecialchars($_POST['pilt']);
		    $_SESSION['voted_for'] = ($_POST['pilt']);
		}	
		include("vaated/tulemus.html");
	break;
	
	default:
	include('vaated/pealeht.html');
}


require_once("vaated/foot.html");
?>
