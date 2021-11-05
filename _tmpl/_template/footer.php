<?php namespace Catpow; ?>
	</main>
<?=$page_sec->apply(do_shortcode(ob_get_clean()));?>
<?php ob_start(); ?>
	<footer class="footer_">
		<div class="_logo"><img src="/images/logo.png" alt=""></div>
		<div class="_nav"></div>
	</footer>
<?=$site_sec->apply(do_shortcode(ob_get_clean()));?>
<?php $page->render_deps(); ?>
</body>
</html>
<?php
$site_sec->export_selectors_file(TMPL_DIR.'/_scss/common_selector.scss');
$page_sec->export_selectors_file();