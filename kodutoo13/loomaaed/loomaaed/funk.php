<?php


function connect_db(){
	global $connection;
	$host="localhost";
	$user="test";
	$pass="t3st3r123";
	$db="test";
	$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga- ".mysqli_error());
	mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
}


function kuva_puurid(){
	// siia on vaja funktsionaalsust
	
	if(empty($_SESSION['user'])){
		header("Location: ?page=login");
		exit(0);
	}else{
	global $connection;
	$p= mysqli_query($connection, "select distinct(puur) as puur from L__loomaaed2 order by puur asc");
	$puurid=array();
	while ($r=mysqli_fetch_assoc($p)){
		$l=mysqli_query($connection, "SELECT * FROM L__loomaaed2 WHERE  puur=".mysqli_real_escape_string($connection, $r['puur']));
		while ($row=mysqli_fetch_assoc($l)) {
			$puurid[$r['puur']][]=$row;
		}
	}
	include_once('views/puurid.html');
	
    }
}
function logi(){

	//siia on vaja funktsionaalsust (13. nädalal)
	$errors = array();
    global $connection;
       
    if(isset($_SESSION['user'])){
	  header("Location: ?page=loomad");
    exit(0);
    }
      
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	         if(empty($_POST['user']) || empty($_POST['pass'])){
		     $errors[]= "täida kõik vormiväljad!";
		   		   
	    }else{
		   $username = mysqli_real_escape_string($connection, $_POST['user']);
           $password = mysqli_real_escape_string($connection, $_POST['pass']);
           $sql = "SELECT username from L__kylastajad WHERE username = '$username' AND passw =  '".sha1($password)."'";
           $query = mysqli_query($connection, $sql);
           $rownums = mysqli_num_rows($query);
        
		      if ($rownums > 0){
			      $_SESSION['user']= $username;
			      header("Location: ?page=loomad");
			     }else{
				     $errors[]= "vigane kasutajanimi või parool!";
           }
      }
	   
  }
  
  include_once('views/login.html');
}

function logout(){
	$_SESSION=array();
	session_destroy();
	header("Location: ?");
}

function lisa(){
	// siia on vaja funktsionaalsust (13. nädalal)
	
	$errors = array();
	global $connection; 
	
	if(!isset($_SESSION['user'])){
		 header("Location: ?page=login");
         exit(0);
     }else{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	             if(empty($_POST['nimi'])|| empty($_POST['puur'])|| upload("liik")== ""){
		              $errors[]= "täida kõik vormiväljad!";
	             }else{
		            $name = mysqli_real_escape_string($connection, $_POST['nimi']);
                    $cage = mysqli_real_escape_string($connection, $_POST['puur']);
                    $liik = upload("liik");
                    $species = mysqli_real_escape_string($connection, $liik);
                    $sql = "INSERT into L__loomaaed2(id, nimi, puur, liik) VALUES (null, '$name', '$cage', '$species')";
                    $query = mysqli_query($connection, $sql);
                    
                   if(mysqli_insert_id($connection)> 0){
	                   header("Location: ?page=loomad");
                       exit(0);
                   }
		     }
      }	
	 
   }
   
	include_once('views/loomavorm.html');
	
}

function upload($name){
	$allowedExts = array("jpg", "jpeg", "gif", "png");
	$allowedTypes = array("image/gif", "image/jpeg", "image/png","image/pjpeg");
	$extension = end(explode(".", $_FILES[$name]["name"]));

	if ( in_array($_FILES[$name]["type"], $allowedTypes)
		&& ($_FILES[$name]["size"] < 100000)
		&& in_array($extension, $allowedExts)) {
    // fail õiget tüüpi ja suurusega
		if ($_FILES[$name]["error"] > 0) {
			$_SESSION['notices'][]= "Return Code: " . $_FILES[$name]["error"];
			return "";
		} else {
      // vigu ei ole
			if (file_exists("pildid/" . $_FILES[$name]["name"])) {
        // fail olemas ära uuesti lae, tagasta failinimi
				$_SESSION['notices'][]= $_FILES[$name]["name"] . " juba eksisteerib. ";
				return "pildid/" .$_FILES[$name]["name"];
			} else {
        // kõik ok, aseta pilt
				move_uploaded_file($_FILES[$name]["tmp_name"], "pildid/" . $_FILES[$name]["name"]);
				return "pildid/" .$_FILES[$name]["name"];
			}
		}
	} else {
		return "";
	}
}

?>