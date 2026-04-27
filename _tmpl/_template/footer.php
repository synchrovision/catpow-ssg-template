<?php namespace Catpow; ?>
	</main>
<?=WPBEM::section('page')->apply(Element::enqueue_elements_in_html(Block::convert(do_shortcode(ob_get_clean()))));?>
	<footer class="site-footer" id="SiteFooter"></footer>
	<?php $page->render_deps(); ?>
</body>
</html>