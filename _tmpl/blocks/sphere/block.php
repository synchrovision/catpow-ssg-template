<?php
namespace Catpow;
?>
<ul class="<?=$className?>-">
	<?php foreach($items as $item): ?>
	<li class="-item <?=$item['className']??'is-standard'?>">
		<div class="-image">
			<img src="<?=$item['image']?>" alt="" class="_img">
		</div>
		<div class="-texts">
			<div class="_alt">
				<span class="_body">
					<?=$item['alt']?>
				</span>
			</div>
			<h3 class="_title">
				<span class="_body">
					<?=nl2wbr($item['title'])?>
				</span>
			</h3>
			<div class="_text"><?=nl2wbr(rtf($item['text']))?></div>
		</div>
		<a href="<?=$item['link']?>" class="-link"></a>
	</li>
	<?php endforeach; ?>
</ul>