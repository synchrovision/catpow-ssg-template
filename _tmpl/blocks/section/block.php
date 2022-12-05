<?php
namespace Catpow;
if(empty($level)){$level=3;}
if(empty($id)){
	$blockClassName='block-section';
	if(empty($GLOBALS['blockCounter'][$blockClassName])){
		$GLOBALS['blockCounter'][$blockClassName]=1;
	}
	$id=$blockClassName.$GLOBALS['blockCounter'][$blockClassName]++;
}
?>
<section class="<?=$className?>- is-level<?=$level?>">
	<a name="<?=$id?>" class="-anchor"></a>
	<header class="-header">
		<h<?=$level?> class="-title">
			<?=$title?>
			<div class="_alt"><?=$alt?></div>
		</h<?=$level?>>
		<?php if(!empty($lead)): ?>
		<div class="-lead"><?=nl2br($lead)?></div>
		<?php endif; ?>
	</header>
	<div class="-body"><?=$children?></div>
</section>