<?php
//A HTML DOM parser written in PHP5+ let you manipulate HTML in a very easy way! 
include_once 'simple_html_dom.php';

class Crawler{
	var $link_repository=array();
	
/*this function fethches the links from the given url and stores it an array*/	
	function fetchLinks($url){
		
		$html=@file_get_html($url);
		if(!empty($html)){
	    foreach($html->find('a') as $element) {
	          if (strpos($element->href, 'http') === 0) {
		           $link_repository[]=$element->href;
	            }  
             }
		}
         return $link_repository;
	}
}
$crawler=new Crawler();
?>

