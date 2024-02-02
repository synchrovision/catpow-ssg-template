<?php
namespace Catpow;
?>
<div class="<?=$className?>-">
	<div class="-header">
		<h2 class="-title"><?=$title?></h2>
		<div class="-lead"><?=$lead?></div>
	</div>
	<div class="-body">
		<div class="-contents">
			<?=nl2br($contents)?>
		</div>
		<ul class="-buttons">
		<?php foreach(['primary','secondary'] as $pos):if(!empty(${"{$pos}_link"})): ?>
			<li class="-item is-<?=$pos?>">
				<a href="<?=${"{$pos}_link_url"}?>" class="-button" target="_blank">
					<span class="_label"><?=${"{$pos}_link"}?></span>
				</a>
			</li>
		<?php endif;endforeach; ?>
		</ul>
	</div>
	<div class="-bg">
		<?=picture($bg,'')?>
	</div>
</div>