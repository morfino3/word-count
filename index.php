<?php 
// Mike Ambait -- michaelambait16@gmail.com
 
//______________________________________
$myfile = fopen("alice.txt","r") or die("Unable to open file!");


// $filecontents = file_get_contents('alice.txt');
$filecontents = fread($myfile, filesize("alice.txt") );
$lowered = strtolower($filecontents);

$pattern = "/[^a-z0-9 ]/i";

$lowered = preg_replace($pattern,' ',$lowered);



// $words = preg_split('/[\s]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);
$words = preg_split('/[\s]+/', $lowered, -1, PREG_SPLIT_NO_EMPTY);


$var =  array_count_values($words);
//print_r(array_count_values($lowered));/
//echo $var;
arsort($var);



foreach($var as $key => $value){
	//$string = implode(", ", $value);
	echo "$key = $value \n";
}

?>
