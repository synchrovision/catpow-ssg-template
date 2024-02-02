<?php
namespace Catpow;
return [
	'cats'=>csv('news-cats')->dict('slug'),
	'items'=>csv('news-items')->select()
];