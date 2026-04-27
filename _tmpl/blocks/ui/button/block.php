<?php
namespace Catpow;
$maybe_external=preg_match('|^https?://|',$href);
?>
<a class="<?=$className?>-" href="<?=$href?>"<?=$maybe_external?' target="_blank"':''?>>
	<span class="_label"><?=$label?></span>
</a>