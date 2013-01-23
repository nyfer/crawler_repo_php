<?php
include_once 'crawler.php';
include_once 'config.php';

$link_repository=array();
$link_repository=$crawler->fetchLinks(URL);
echo 'Size of array:'.count($link_repository);
echo $url.'<br><br>';
print_r($link_repository);
echo '<br><br>';
/*here i take each link from the array and parse the links*/
foreach ($link_repository as $value) {
	echo 'Link:'. $value . '<br>Temp Repo';
	$temp_repo=$crawler->fetchLinks($value);   // temp array to hold the links fetched from the link_repository
	print_r($temp_repo);
	echo '---- <br><br>';
	if(!empty($temp_repo)){
	$link_repository=array_merge($link_repository,$temp_repo );
	}
}

?>