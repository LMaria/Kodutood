<?php require_once('head.html');
$pildid=array( 
           array("src"=>"pildid/nameless1.jpg", "alt"=> "nimetu 1"),
           array("src"=>"pildid/nameless2.jpg", "alt"=> "nimetu 2"),
           array("src"=>"pildid/nameless3.jpg", "alt"=> "nimetu 3"),
           array("src"=>"pildid/nameless4.jpg", "alt"=> "nimetu 4"),
           array("src"=>"pildid/nameless5.jpg", "alt"=> "nimetu 5")
           ); 
?>
<div id="wrap">
	<h3>Fotod</h3>
	<div id="gallery">
		<?php foreach($pildid as $id=>$pilt):?>
		        <img src="<?php echo $pilt['src'];?>" alt="<?php echo $pilt['alt'];?>"/>
                <?php endforeach;?>
	</div>
</div>
<?php require_once('foot.html');?>
