<?php
namespace Catpow;
$site_url="https://example.com";
$site_title='サイトのタイトル';
$site_desc='サイトの説明文';
$site_image='/images/site_image.jpg';
$site_locale='ja-JP';
$site_sec=BEM::section('site');
enqueue_style('/css/common.css');
enqueue_script('/js/common.js');
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?=$page_title?>｜<?=$site_title?></title>
<meta name="description" content="<?=$page_desc??$site_desc?>">

<meta property="og:url" content="<?=$site_url.$page_uri?>">
<meta property="og:title" content="<?=$page_title?>｜<?=$site_title?>"/>
<meta property="og:type" content="website">
<meta property="og:locale" content="<?=$page_locale??$site_locale?>">
<meta property="og:image" content="<?=$site_image?>">
<meta property="og:description" content="<?=$page_desc??$site_desc?>"/>

<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="<?=$page_title?>｜<?=$site_title?>" />
<meta name="twitter:description" content="<?=$page_desc??$site_desc?>" />
<meta name="twitter:image" content="<?=$site_image?>" />

</head>
<body>
<?php ob_start(); ?>
	<header class="header-">
		<div class="_logo"><img src="/images/logo.png" alt=""></div>
		<div class="_nav"></div>
	</header>
<?=$site_sec->apply(ob_get_clean());?>
<?php ob_start(); ?>
	<main class="site-main">