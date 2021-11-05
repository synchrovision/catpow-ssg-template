<?php
namespace Catpow;
$url=$site->uri.$page->uri;
$title="{$page->title}|{$site->title}";
$site_image='/images/site_image.jpg';
$desc=$page->desc?:'サイトの説明文';
$locale=$page->locale??'ja-JP';
$site_sec=BEM::section('site');
$page_sec=BEM::section('page');
enqueue_style('css/style.css');
enqueue_script('js/script.js');
enqueue_style('/css/common.css');
enqueue_script('/js/common.js');
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?=$title?></title>
<meta name="description" content="<?=$desc?>">

<meta property="og:url" content="<?=$url?>">
<meta property="og:title" content="<?=$title?>"/>
<meta property="og:type" content="website">
<meta property="og:locale" content="<?=$locale?>">
<meta property="og:image" content="<?=$site_image?>">
<meta property="og:description" content="<?=$desc?>"/>

<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="<?=$title?>" />
<meta name="twitter:description" content="<?=$desc?>" />
<meta name="twitter:image" content="<?=$site_image?>" />

</head>
<body>
<?php ob_start(); ?>
	<header class="header_">
		<div class="_logo"><img src="/images/logo.png" alt=""></div>
		<div class="_nav"></div>
	</header>
<?=$site_sec->apply(ob_get_clean());?>
<?php ob_start(); ?>
	<main class="site-main">