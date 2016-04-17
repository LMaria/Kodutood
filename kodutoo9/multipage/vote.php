<?php 
require_once('head.html');
$pildid=array( 
           array("src"=>"pildid/nameless1.jpg", "alt"=> "nimetu 1"),
           array("src"=>"pildid/nameless2.jpg", "alt"=> "nimetu 2"),
           array("src"=>"pildid/nameless3.jpg", "alt"=> "nimetu 3"),
           array("src"=>"pildid/nameless4.jpg", "alt"=> "nimetu 4"),
           array("src"=>"pildid/nameless5.jpg", "alt"=> "nimetu 5")
           ); 


?>
<div id="wrap">
	<h3>Vali oma lemmik :)</h3>
	<form action="tulemus.php" method="GET">
		<?php foreach($pildid as $id=>$pilt):?>
		        <p><label for="p<?php echo $id;?>">
				<img src="<?php echo $pilt['src'];?>" alt="<?php echo $pilt['alt'];?>" height="100" />
	             <input type="radio" value="<?php echo $id;?>" id="p<?php echo $id;?>" name="pilt"/>
</p>

<?php endforeach; ?>
	<br/>
		<input type="submit" value="Valin!"/>
	</form>
</div>
<?php require_once('foot.html');?>