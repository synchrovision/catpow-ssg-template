<?php
namespace Catpow;
?>
<ul class="block-index-">
<?php foreach($items as $item): ?>
	<li class="_item">
		<a href="<?=$item['href']?>" class="_link"><?=$item['title']?></a>
		<?php if(!empty($item['items'])): ?>
		<ul class="-subitems">
			<?php foreach($item['items'] as $subitem): ?>
			<li class="_item">
				<a href="<?=$subitem['href']?>" class="_link"><?=$subitem['title']?></a>
				<?php if(!empty($subitem['items'])): ?>
				<ul class="-enditems">
					<?php foreach($subitem['items'] as $enditem): ?>
						<li class="_item">
							<a href="<?=$enditem['href']?>" class="_link"><?=$enditem['title']?></a>
						</li>
					<?php endforeach; ?>
				</ul>
				<?php endif; ?>
			</li>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>
	</li>
<?php endforeach; ?>
</ul>