<?php
namespace Catpow;
?>
<div class="<?=$className?>- is-level<?=$level?>">
	<?php foreach($items as $i=>$item):$n=$i+1; ?>
	<section class="_item">
		<header class="_header">
			<h3 class="_title"><span class="_prefix">Step<span class="_number"><?=$n?></span></span><span class="_text"><?=$item['title']?></span></h3>
		</header>
		<div class="_body">
			<?=$item['children']?>
		</div>
	</section>
	<?php endforeach; ?>
</div>