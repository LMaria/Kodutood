<?php 

require_once('head.html');

   
?>
<div id="wrap">
	<h3>Valiku tulemus</h3>
	<p>
	<?php 
	   if(!empty($_GET)){
	   if(!empty($_GET['pilt'])) {
		   echo "Pilt valitud, tänan";
	   }else{
		   echo "Palun vali pilt!";
	   }
   }
     ?>
   </p>
</div>
<?php require_once('foot.html');?>
