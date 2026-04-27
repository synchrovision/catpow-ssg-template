<?php
namespace Catpow;
?>
<ul class="<?=$className?>-">
	<?php foreach(['top','bottom','left','right','front'] as $pos): ?>
	<li class="-<?=$pos?>"></li>
	<?php endforeach; ?>
</ul>