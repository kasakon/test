<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>
		<?php if(is_single()): ?>														<!-- 個別ページの場合の処理 -->
			<?php wp_title(); ?>-<?php bloginfo('name'); ?>								<!-- ブログ名-個別ページ名 -->
		<?php else: ?>																	<!-- topページの場合の処理 -->
			<?php bloginfo('name') ?>													<!-- ブログ名 -->
		<?php endif; ?>
	</title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type') ?>"; charset="<?php bloginfo('charset'); //コンテンツタイプを出力 ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" type="text/css">	<!-- CSSの指定 -->
  <link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />	<!-- フィードリーダーが自動的にRSSフィードを検出するように設定する -->
  <?php wp_head(); ?>		<!-- カスタム背景で設定した背景画像を表示する -->
  <!-- lightbox -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/jquery.lightbox-0.5.css" media="screen" />
  <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.lightbox-0.5.js"></script>
  <script type="text/javascript">
		$(function() {  
  		$('.gallery a').lightBox();
		});  
	</script>
  <!-- lightbox終わり -->
  <!-- スライドショー -->
	<script type="text/javascript">
		function slideSwitch() {
			var $active = $('#slideshow img.active');
			if ( $active.length == 0 ) $active = $('#slideshow img:last');
			var $next =  $active.next().length ? $active.next() : $('#slideshow img:first');
			$active.addClass('last-active');
			$next.css({opacity: 0.0})
			.addClass('active')
			.animate({opacity: 1.0}, 1000, function() {
			$active.removeClass('active last-active');
      });
		}
		$(function() {
			setInterval( "slideSwitch()", 5000 );
		});
	</script> 
  <!-- スライドショー終わり -->
</head>
<body>
	<div id="container">
		<?php require('header.php') ?>			<!-- header.phpを読み込む -->
    <?php require('content.php') ?>		<!-- content.phpを読み込む -->
		<?php require('footer.php') ?>			<!-- footer.phpを読み込む -->		
	</div><!--container終わり-->
</body>
</html>