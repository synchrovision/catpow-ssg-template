<?php namespace Catpow; ?>
	</main>
	<footer class="site-footer-" id="SiteFooter"></footer>
	<?php $page->render_deps(); ?>
</body>
<?=$bem->apply(do_shortcode(ob_get_clean()));?>
</html>
<?php
$bem->export_selectors_file();