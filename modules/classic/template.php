<!DOCTYPE html> 
<html lang="ru"> 
<head> 
<title><?php $page->get_title();?></title>  
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php $page->get_description();?>">
<meta name="keywords" content="<?php $page->get_keywords();?>">	
<link rel="icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link href="/modules/classic/chameleon-1.1.css" rel="stylesheet" media="screen">
<style><?php require('style.css');?></style>
<?php $page->get_headhtml();?>
</head>
<body>
<div class="container">

<div class="top-bar">
<div class="wrap">
<div class="contats-block">
<div class="top-adress"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $Snippet->addr;?></div>
<div class="top-phone"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $Snippet->phone;?></div>
<div class="top-email"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $Snippet->mail;?></div>	  
</div>   
</div>
</div>

<header>
<div class="wrap">

<div class="header-left">
<div class="logo-site">
<a href="/"><img src="<?php echo $Snippet->classicLogo;?>" alt="Логотип" title="<?php $page->get_header();?>"></a>
</div>
<div class="slogan"><?php $page->get_slogan();?></div>
</div>

<div class="header-right">
<div class="user_menu">
<?php
	if($User->authorized){
	echo'<a href="/user" class="user">'.$User->login.'</a>';
	}else{
	echo'<a href="/user" class="in">Вход</a> | <a href="/user/reg" class="reg">Регистрация</a>';
	}
?>
</div>

<div class="search">
<form name="search" action="/search" method="post">
<input type="text" name="q" value="" placeholder="Поиск...">
</form>
</div>

</div>
</div>
</header>

<nav id="nav">
<div class="hbr_menu">
<a href="#" onclick="dip('#menu');return false;"><i class="fa fa-bars" aria-hidden="true"></i></a>
</div>
<ul id="menu">
<?php $page->get_menu('li');?>
</ul>
</nav>
<?php if($Page->isIndexPage()):?>
<div class="bottom-bar">
<img src="/modules/classic/images/slide.jpg" alt="slide">    
</div>
<?php endif;?>
</div>

<div class="chameleon">
<div id="content">
<div class="column-container">
<div class="column1">
<aside class="column-left">
<?php $page->get_column('left','<div class="box_block"><h2>#name#</h2><div class="content_block">#content#</div></div>');?>
</aside>
</div>
<div class="column2">
<section class="content">
<h1><?php $page->get_name();?></h1> 
<?php $page->get_content();?>
</section>
</div>
<div class="column3">
<aside class="column-right">
<?php $page->get_column('right','<div class="box_block"><h2>#name#</h2><div class="content_block">#content#</div></div>');?>
</aside>
</div>
</div>
</div>
</div>

<div class="container">
<footer>
<div class="wrap">
<div class="footer_l">
&copy; 2021&emsp;<a href="/"><?php $page->get_header();?></a>
</div>

<div class="nav">
<ul>
<?php $page->get_menu('li');
	if($User->authorized){
		echo'<li><a href="/user">Профиль пользователя</a></li>';
	}else{
		echo'<li><a href="/user">Авторизироваться на сайте</a></li>';
	}
?>
</ul>
</div>

</div>
<div class="wrap">
<div class="copyrighted"><a href="/privacy_policy.html">Политика конфиденциальности</a> | <a href="//my-engine.ru">Работает на My-Engine CMS</a> | <a href="//3shaga.ru">Дизайн и верстка: Три Шага</a></div>
</div>
</footer>
</div>

<script src="/modules/classic/js/jquery-1.11.3.min.js"></script>
<script src="/modules/classic/js/scrolltopcontrol.js"></script>
<script>
function dip (menu){
if ($(menu).css('display') == 'none'){
$(menu).animate({height: 'show'}, 500);
}else{
$(menu).animate({height: 'hide'}, 500);
}
}
</script>

<?php $page->get_endhtml();?>
</body> 
</html>