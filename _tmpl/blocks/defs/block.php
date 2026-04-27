<?php
namespace Catpow;
?>
<ul class="<?=$className?>- is-level<?=$level?>">
	<?php foreach($items as $item): ?>
	<li class="_item">
		<div class="_key"><?=$item['title']?></div>
		<div class="_value"><?=$item['children']?></div>
	</li>
	<?php endforeach; ?>
</ul>