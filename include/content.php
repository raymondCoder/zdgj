<?php
$bannerList = array(
					'case'=> 'content-case.php',
					'design'=> 'content-designer.php',
					'construction'=> 'content-construction.php',
					'service'=>'content-service.php',
					'aboutus'=>'content-aboutus.php'
			);

$bannerKeys = array_keys($bannerList);
if ( ($bannerKey = $_GET['type']) && in_array($bannerKey, $bannerKeys)) {
	include ('content' . DIRECTORY_SEPARATOR . $bannerList[$bannerKey]);	
}
