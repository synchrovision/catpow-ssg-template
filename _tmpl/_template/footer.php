<?php namespace Catpow; ?>
	</main>
	<footer class="site-footer">
		<div class="logo"><img src="/images/logo.png" alt=""></div>
		<div class="nav"></div>
	</footer>
<?php $page->render_deps(); ?>
</body>
<?=$page_sec->apply(do_shortcode(ob_get_clean()));?>
</html>
<?php
$page_sec->export_selectors_file();