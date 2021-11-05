<?php
namespace Catpow;
include TMPL_DIR.'/_template/header.php';
?>
<article class="article-">
	<header class="header_">
		<h2 class="_image">
			<?=picture('images/mv.jpg',$page->title);?>
		</h2>
	</header>
	<div class="contents_">
		<h3 class="_heading">見出し</h3>
		<div class="_text">本文</div>
	</div>
</article>
<?php include TMPL_DIR.'/_template/footer.php';?>