<?php
$bannerList = array(
					'case'=> 'case-1.jpg',
					'design'=> 'designer-1.jpg',
					'construction'=> 'construction-1.jpg',
					'service'=>'service-1.jpg',
					'aboutus'=>'aboutus-1.jpg'
			);

$bannerKeys = array_keys($bannerList);
if ( ($bannerKey = $_GET['type']) && in_array($bannerKey, $bannerKeys)) {
	echo sprintf("<img src=\"statics/images/v9/%s\" />", $bannerList[$bannerKey]);	
}

