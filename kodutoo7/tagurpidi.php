<?php

$tagurpidi = reverseString("tagurpidi sona");

function reverseString($sona) {
        $uus = ' ';
	    for ($i = strlen($sona); $i >= 0; $i--) {
		$temp = substr( $sona, $i, 1 );
        $uus .= $temp;
    }
    return $uus;
 }

echo $tagurpidi;

?>  
