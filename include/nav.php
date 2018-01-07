<?php
$bannerList = array(
					'case'=> 'nav-case.php',
					'design'=> 'nav-design.php',
					'construction'=> 'nav-construction.php',
					'service'=>'nav-service.php',
					'aboutus'=>'nav-aboutus.php'
			);

$bannerKeys = array_keys($bannerList);
if ( ($bannerKey = $_GET['type']) && in_array($bannerKey, $bannerKeys)) {
	include ($bannerList[$bannerKey]);	
}
