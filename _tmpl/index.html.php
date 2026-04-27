<?php
namespace Catpow;
$sections=csv('home-sections')->dict('id');
include TMPL_DIR.'/_template/header.php';
?>
<block-billboard bg="images/page_header_pc.jpg">
	<title>Catpow SSG</title>
	<lead>
		シンプルで自由な
		静的サイト制作ツール
	</lead>
	<contents>
		CatpowSSGはPHPを使った静的サイト生成ツールです。
		既存のサイトのHTMLのコードを活かしながら、
		コンテンツ管理を効率化することを目的に作られました。
	</contents>
	<primary-link title="Get Started" href="https://github.com/synchrovision/catpow-ssg-template"/>
	<secondary-link title="View Docs" href="https://github.com/synchrovision/catpow-ssg-template"/>
</block-billboard>
<block-pagenav items="home-sections"></block-pagenav>
<block-section title="新着情報" alt="What’s New">
	<lead>
		このお知らせはReactのコンポーネントで作成されています。
		読み込まれるjsonはcsvから生成されています。
	</lead>
	<block-box>
		<block-news json="/json/news.json"></block-news>
		<block-ui--button href="/news/" label="もっと見る"/>
	</block-box>
</block-section>
<block-section title="コンセプト" alt="Concept">
	<lead>
		このセクションはdimensionのブロックを使って作成されています。
		blockのテンプレートに流し込まれるテキストは
		csvから読み込まれるようになっています。
	</lead>
	<block-dimension>
		<block-dimension--box/>
		<block-dimension--contents layer="9">
			<block-cards items="concept-sections"/>
		</block-dimension--contents>
	</block-dimension>
</block-section>
<block-section title="機能" alt="Feature">
	<lead>
		このセクションはcardのブロックを使って作成されています。
		blockのテンプレートに流し込まれるテキストは
		csvから読み込まれるようになっています。
	</lead>
	<block-cards items="feature-sections"/>
</block-section>
<?php include TMPL_DIR.'/_template/footer.php';?>