<?php
namespace Catpow;
return [
	'site'=>csv('data-site')->items[0],
	'sitemap'=>csv('data-sitemap')->dict('uri')
];