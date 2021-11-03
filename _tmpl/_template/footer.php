	</main>
<?=$page_sec->apply(ob_get_clean());?>
<?php ob_start(); ?>
	<footer class="footer-">

	</footer>
<?=$site_sec->apply(ob_get_clean());?>
<?php $page->render_deps(); ?>
</body>
</html>
<?php
$site_sec->export_selectors_file(TMPL_DIR.'/_scss/common_selector.scss');
$page_sec->export_selectors_file();