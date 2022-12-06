<?php
namespace Catpow;
$sections=csv('home-sections')->dict('id');
include TMPL_DIR.'/_template/header.php';
?>
<?=block('billboard',csv('home-billboard')->items[0])?>
<?=block('pagenav',['items'=>$sections])?>
<?=block('section',$sections['news'],function($props){ ?>
	<?=block('box',[],function($props){ ?>
		<?=block('news',['json'=>'/json/news.json'])?>
		<?=block('ui/button',['label'=>'もっと見る','href'=>'/news/'])?>
	<?php }); ?>
<?php }); ?>
<?=block('section',$sections['concept'],function($props){ ?>
	<?=block('dimension',[],function($props){ ?>
		<?=block('dimension/box')?>
		<?=block('dimension/contents',['layer'=>9],function($props){ ?>
			<?=block('cards',['items'=>csv('concept-sections')->items])?>
		<?php }); ?>
	<?php }); ?>
<?php }); ?>
<?=block('section',$sections['feature'],function($props){ ?>
	<?=block('cards',['items'=>csv('feature-sections')->items])?>
<?php }); ?>
<?php include TMPL_DIR.'/_template/footer.php';?>