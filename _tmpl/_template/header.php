<?php
namespace Catpow;
$url=$site->uri.$page->uri;
$title="{$page->title}｜{$site->title}";
$ogp_image=$site->url.'/images/ogp_image.jpg';
$desc=$page->desc?:$site->desc;
$locale=$page->locale??'ja-JP';
$bem=WPBEM::section('page');
enqueue_style('/css/common.css',null,['materialicons']);
enqueue_script('/js/common.js',null,['react']);
enqueue_style('css/style.css');
enqueue_script('js/script.js',null,['react']);
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
<meta property="og:image" content="<?=$ogp_image?>">
<meta property="og:description" content="<?=$desc?>"/>

<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="<?=$title?>" />
<meta name="twitter:description" content="<?=$desc?>" />
<meta name="twitter:image" content="<?=$ogp_image?>" />

<?php $page->render_deps(); ?>
</head>
<?php ob_start(); ?>
<body class="site-body-">
	<div class="site-cloak-" id="SiteCloak"></div>
	<header class="site-header-" id="SiteHeader"></header>
	<main class="site-main-">