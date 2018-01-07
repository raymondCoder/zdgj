<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="statics/js/jquery.min.js"></script>
<title>Designer</title>
<style>
body{
	margin:0px;
	color: #222;
	font: 14px/2 microsoft yahei;
}


ul, ol, li {
	list-style: none;
}

.clearfix{
clear:both;
} 

.ctt_1_ys1 {
	background-color: #cceeff;
	width: 200px;
}

.hotline {
	font-size: 12px;
	color: white;
}
.TelHotline {
	font-size: 30px;
	color: gold;
	line-height: 44px;
}
.container{
	
}

.wp-outer {
	margin: auto;
	width: 1230px;
}

.header-logo {
	float: left;
	height: 81px;	
	border-bottom-left-radius:6px;
	border-bottom-right-radius:6px;
	background-color:white;
}
.caseItem {
	float: left;
	padding: 10px;
	color: #666;
}
.header-menu {
	float: left;
	margin-left:40px;
}

.header-tel {
	float: right;
	padding: 0px 10px;
}

.page-header{
	background-color: #38383a;
	left: 0;
	min-width: 1230px;
	position: relative;
	top: 0;
	width: 100%;
	z-index: 50;
	height: 99px;
}

.header-menu-item {
	float: left;
	position: relative;
	z-index: 1;
	list-style:none;
}

.menu-item-head a {
	color: #fff !important;
	display: inline-block;
	font-size: 20px;
	height: 28px;
	line-height: 28px;
	padding: 30px 23px;
	text-decoration:none;
}

.menu-item-head a:hover {
	background-color:#333333;
	padding: 40px 23px;
	border-radius:5px;
}



.middle{
	min-height:400px;
	height:auto;
	clear:both;
	margin:10px auto;
}

.middle .banner_se{
	width:100%;
	height:400px;
	overflow:hidden;
}

.middle .banner_se img{
	width:100%;
	height:400px;
}

.middle .middle-content{
	width:80%;
	min-height:400px;
	margin:auto auto;
}

.middle .middle-content .content-left{
	width:200px;
	float:left;
	border:1px solid #eee;
	padding:20px;
	color:#666666;
	background-color:#FFFFFF;
}

.middle .middle-content .content-left a{
	color:#666666;
}
.middle .middle-content .content-left .ctt_1_ys1 {
	clear: both !important;
	font-weight: bold;
}
.middle .middle-content .content-left .anli_top {
	margin-top: 20px;
}

.middle .middle-content .content-left .anli_ctt_1 div {
	display: inline-block;
}


.middle .middle-content .content-right {
	width: 700px;
	float: left;
	border: 1px solid #eee;
	min-width: 80%;
	padding: 20px;
	margin-left: 10px;
}

.middle .middle-content .content-right .nei_bg .nei .case {
	margin: 0 3px 20px 3px;
	padding: 0px;
	float: left; 
}

.middle .middle-content .content-right .case_zhong_1 {
	background: #F1F1F1;
	text-align: center;
	padding-top: 8px;
	padding-bottom: 3px;
	color: #3b3a38;
	font-size: 16px;
}

.middle .middle-content .content-right .case_zhong_2 {
	background: #F1F1F1;
	text-align: center;
	padding-top: 2px;
	padding-bottom: 11px;
	color: #717171;
	font-size: 12px;
}

.shejishi {
	float: left;
	padding: 10px;
}

.footer {
	width: 100%;
	background: #2C2E33;
	padding: 20px 0;
	min-height:200px;
	height: 200px;
	z-index:100;
}
</style>
 
<link href="css/base.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="container">
	<div class="page-header">
		
		<div class="wp-outer">
        <div class="wp-inner">
            <div class="clearfix">
                <div class="header-logo">
					<h1><a href="/"><img src="http://www.zhangdianguoji.com/statics/images//logo.png" alt="彰典国际设计 倾力打造中国装饰高端品牌" width="298" height="75"></a></h1>
                </div>
                <div class="header-menu">
                    <ul class="clearfix">
                        <li class="header-menu-item"><div class="menu-item-head"><a href="/">首页</a></div></li>
                        <li class="header-menu-item"><div class="menu-item-head"><a href="?type=case">工装案例</a></div></li>
                        <li class="header-menu-item"><div class="menu-item-head"><a href="?type=design">设计</a></div></li>
                        <li class="header-menu-item"><div class="menu-item-head"><a href="?type=construction">施工</a></div></li>
                        <li class="header-menu-item"><div class="menu-item-head"><a href="?type=service">服务与预约</a></div></li>
                        <li class="header-menu-item"><div class="menu-item-head"><a href="?type=aboutus">关于彰典</a></div>
                        </li>
                    </ul>
                </div>
				
				
				<div class="header-tel">      			
      				<div class="index_top_2">
      				  <div class="hotline">24小时免费服务热线</div>
      				  <div class="TelHotline">400-6285-555</div>
      				</div>				
                </div>
        </div>
    </div>
		</div>
	</div>
	
	<div class="middle">
	
		<div class="banner_se">
			<?php include ('include/bannerSection.php') ?>
		</div>
		
		<div class="middle-content clearfix">
		<?php 
		if(!$_GET){
		 	include ('include/homepage.php');
		} else {?>
			<div class='content-left'>
				<?php include('include/nav.php') ?>
			</div>
			
			<div class="content-right">
				<?php include('include/content.php') ?>
			</div>
		<?php } ?>
			<br class="clearfix" />
		</div>
		
	</div>
	
  <div class="footer">
	<!-- footer start-->	
		<?php include('include/footer.php') ?>
	<!-- footer end -->
  </div>

</div>
<script type="text/javascript">
function moveNav()
{
	var posChanged = true, type=0;
	if($(window).scrollTop() > 319 ){
		if(type!=1) {
				type=1;
				posChanged = true
		}
		if (posChanged) {
				$('.content-left').css({position:'fixed', top:'100px',zIndex:99});
				$('.content-right').css({marginLeft:'248px'});
				posChanged = false;
		}
	} else {
			//case 2
			if(type!=2){
			   type =2;
			   posChanged = true
			}
			if (posChanged) {
				$('.content-left').css({position:'relative', top:'0px'});
				$('.content-right').css({marginLeft:'10px'});
				posChanged = false;
			}
	}
}

function move(){
     var posChanged = true, type=0;
		if($(window).scrollTop() > 91 ){
		//case 1
			if(type!=1) {
				type=1;
				posChanged = true
			}
			if (posChanged) {
				$('.page-header').css({position:'fixed'});
				//$('.content-left').css({position:'fixed', top:'100px',zIndex:99});
				//$('.content-right').css({marginLeft:'248px'});
				posChanged = false;
			}
		} else {
		//case 2
			if(type!=2){
			   type =2;
			   posChanged = true
			}
			if (posChanged) {
				$('.page-header').css({position:'relative'});
				//$('.content-left').css({position:'relative', top:'0px'});
				//$('.content-right').css({marginLeft:'10px'});
				posChanged = false;
			}
		}
}
$(function(){
	$(window).on('scroll', function(){
		move();
		moveNav();
	});
});
</script>
</body>
</html>
