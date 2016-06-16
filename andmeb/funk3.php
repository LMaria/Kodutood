<?php
    
    connect_db();
    lisa();
    kuva();
    
 function connect_db(){
	global $connection;
	$host="localhost";
	$user="test";
	$pass="t3st3r123";
	$db="test";
	$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ?hendust mootoriga- ".mysqli_error());
	mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
 }
 
 function lisa(){

	$errors = array();
	global $connection;
	
	if(isset($_POST['komm'])&& isset($_POST['nimi'])){
	$nimi = mysqli_real_escape_string($connection, $_POST['nimi']);
	$komm = mysqli_real_escape_string($connection, $_POST['komm']);
	$sql= "INSERT into sss__comms(id, nimi, kommentaar) VALUES (null, '$nimi', '$komm')";
	$query = mysqli_query($connection, $sql);
	kuva();
	}
	
}

    function kuva(){
	    
	global $connection;
	$comments = array();
	$sql = "SELECT * FROM sss__comms";
	$result= mysqli_query($connection, $sql);
 
    while($row = mysqli_fetch_assoc($result)){ 
        $comments[]=$row;
          
    }
  
    foreach ($comments as $id) {
       
            include('comments.html');
            
        }
        
    }


?>