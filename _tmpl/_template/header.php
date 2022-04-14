<?php
namespace Catpow;
$url=$site->uri.$page->uri;
$title="{$page->title}|{$site->title}";
$site_image='/images/site_image.jpg';
$desc=$page->desc?:'サイトの説明文';
$locale=$page->locale??'ja-JP';
$page_sec=RSCSS::section('page');
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
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=1"> 

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
<?php ob_start(); ?>
<body class="site-body">
	<header class="site-header">
		<div class="logo"><img src="/images/logo.png" alt=""></div>
		<div class="nav"></div>
	</header>
	<main class="site-main">