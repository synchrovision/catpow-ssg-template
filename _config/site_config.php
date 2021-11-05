<?php
namespace Catpow;
$site=csv('data-site')[0];
$sitemap=csv('data-sitemap')->dict('uri');

add_shortcode('dl',function($atts,$content){
	$rtn=sprintf('<dl class="%s">',$atts['class']??'_dl');
	foreach(explode("\n",trim($content,"\n")) as $line){
		$rtn.=preg_replace('/^(.+?)：(.+)$/u','<dt class="_dt">$1</dt><dd class="_dd">$2</dd>',$line);
	}
	$rtn.='</dl>';
	return $rtn;
});

add_shortcode('rtf',function($atts,$content){
	$content=preg_replace('/(（.+?）)/u','<small class="rtf-small">$1</small>',$content);
	$content=preg_replace('/\*\*(.+?)\*\*/u','<strong class="rtf-strong">$1</strong>',$content);
	$content=preg_replace('/^※(.+)$/um',"<span class=\"rtf-annotation\">$1</span>",$content);
	$content=preg_replace('/■ (.+)/u',"<h4 class=\"rtf-title\">$1</h4>",$content);
	$content=preg_replace('/!\[(.+?)\]\((.+?)\)/u','<img class="rtf-image" src="$2" alt="$1"/>',$content);
	$content=preg_replace('/\[tel:((\d+)\-(\d+)\-(\d+))\]/u','<a class="rtf-tel" href="tel:$2$3$4" target="_brank">$1</a>',$content);
	$content=preg_replace('/\[(.+?)\]\((.+?)\)/u','<a class="rtf-link" href="$2" target="_brank">$1</a>',$content);
	$content=preg_replace('/(.{1,8}?)：(.+)/u','<dl class="rtf-dl"><dt class="rtf-dl__dt">$1</dt><dd class="rtf-dl__dd">$2</dd></dl>',$content);
	$content=preg_replace('/^・ (.+(\n　.+)*)$/um','<ul class="rtf-ul"><li class="rtf-ul__li">$1</li></ul>',$content);
	$content=preg_replace('/<\/(dl|ul)>\s*<\1.*?>/u','',$content);
	$content=preg_replace('/(<\/\w+>)\n/','$1',$content);
	return $content;
});