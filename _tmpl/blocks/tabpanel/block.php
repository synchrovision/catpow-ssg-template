<?php
namespace Catpow;
?>
<div class="block-tabpanel-">
	<ul class="_tabs">
		<?php foreach($panels as $panel): ?>
			<li class="_tab"><?=$panel['title']?></li>
		<?php endforeach; ?>
	</ul>
	<div class="_panels">
		<?php foreach($panels as $panel): ?>
			<div class="_panel"><?=$panel['children']?></div>
		<?php endforeach; ?>
	</div>
</div>