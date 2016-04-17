<?php require_once('head.html');?>
<div id="wrap">
	<h3>Vali oma lemmik :)</h3>
	<form action="tulemus.html" method="GET">
		<?php foreach($pildid as $id=>$pilt):?>
	
	        <p><label for="p<?php echo $id;?>">

				<img src="<?php echo $pilt['src'];?>" alt="<?php echo $pilt['alt'];?>" height="100" />
	
		</p>
<?php endforeach; ?>
	<br/>
		<input type="submit" value="Valin!"/>
	</form>
</div>
<?php require_once('foot.html');?>