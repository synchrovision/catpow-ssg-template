<?php
namespace Catpow;
$page_uri="/";
$page_title='ページのタイトル';
$page_desc='ページの説明文';
$page_sec=BEM::section('example');
enqueue_style('css/style.css');
enqueue_script('js/script.js');
include TMPL_DIR.'/_template/header.php';
?>
<article class="article-">
	<header class="header_">
		<h2 class="_title">記事のタイトル<</h2>
	</header>
	<div class="contents_">
		<h3 class="_heading">見出し</h3>
		<div class="_text">本文</div>
	</div>
</article>
<?php include TMPL_DIR.'/_template/footer.php';?>