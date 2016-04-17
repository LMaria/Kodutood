<?php
require_once('head.html');
$pildid=array( 
           array("src"=>"pildid/nameless1.jpg", "alt"=> "nimetu 1"),
           array("src"=>"pildid/nameless2.jpg", "alt"=> "nimetu 2"),
           array("src"=>"pildid/nameless3.jpg", "alt"=> "nimetu 3"),
           array("src"=>"pildid/nameless4.jpg", "alt"=> "nimetu 4"),
           array("src"=>"pildid/nameless5.jpg", "alt"=> "nimetu 5"),
           array("src"=>"pildid/nameless6.jpg", "alt"=> "nimetu 6")
           ); 
$page = " ";
if (isset($_GET["page"]) && $_GET["page"]!=""){
	$page=htmlspecialchars($_GET["page"]);
}
switch($page){
	case "pealeht":
	    include("pealeht.html");
	break;
	
	case "galerii":
	     include("galerii.html");
	break;
	
	case "vote":
	      include("vote.html");
	break;
	
	case("tulemus"):
		include("tulemus.html"); 
	break; 
	
    default:
          include("pealeht.html");
          
    
}
     
           
require_once('foot.html');?>