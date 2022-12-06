<?php
namespace Catpow;
?>
<ul class="<?=$className?>-">
	<?php foreach($items as $item): ?>
	<li class="-item<?=empty($item['link'])?'':' has-link'?> <?=$item['className']?>">
		<div class="-header">
			<h3 class="-title">
				<?=$item['title']?>
			</h3>
			<div class="-alt"><?=$item['alt']?></div>
			<div class="-lead"><?=nl2br($item['lead'])?></div>
		</div>
		<div class="-body">
			<div class="-text"><?=nl2br(rtf($item['text']))?></div>
			<?php if($item['link']): ?>
			<a href="<?=$item['link']?>" class="-link"><?=$item['link_text']??'もっと詳しく'?></a>
			<?php endif; ?>
		</div>
	</li>
	<?php endforeach; ?>
</ul>