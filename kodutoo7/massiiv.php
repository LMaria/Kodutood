<?php
$koerad= array( 
		array('nimi'=>'Pelle', 'vanus'=>2, 'tõug'=>'Labradori retriiver', 'amet'=>'tollikoer'), 
                array('nimi'=>'Olaf', 'vanus'=>7, 'tõug'=>'Newfoundlandi koer', 'amet'=>'vetelpäästekoer'),
                array('nimi'=>'Hermiine', 'vanus'=>4, 'tõug'=> 'Saksa lambakoer', 'amet'=>'pommikoer'),
                array('nimi'=>'Ville', 'vanus'=>9, 'tõug'=>'kuldne retriiver', 'amet'=>'teraapiakoer'),
                array('nimi'=>'Pongo', 'vanus'=>20, 'tõug'=>'Dalmaatsia koer', 'amet'=>'näitleja'),
	            array('nimi'=>'Ulvi', 'vanus'=>8, 'tõug'=>'Eesti hagijas', 'amet'=>'jahikoer'),
                array('nimi'=>'Ferdinand', 'vanus'=>6, 'tõug'=>'Kaukaasia lambakoer', 'amet'=>'piirivalvekoer')

	);
foreach($koerad as $koer) {
include 'koerad.html';
}
?>




