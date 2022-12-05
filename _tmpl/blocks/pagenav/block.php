<?php
namespace Catpow;
?>
<div class="<?=$className?>-">
	<ul class="-items">
		<?php foreach($items as $item): ?>
		<li class="-item">
			<a class="_link" href="#<?=$item['id']?>"><?=$item['title']?></a>
		</li>
		<?php endforeach; ?>
	</ul>
</div>