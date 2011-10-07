<!-- 固定ページ用のphp -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>
		<?php if(is_single()): ?>														<!-- 個別ページの場合の処理 -->
			<?php wp_title(); ?>-<?php bloginfo('name'); ?>		<!-- ブログ名-個別ページ名 -->
		<?php else: ?>																				<!-- topページの場合の処理 -->
			<?php bloginfo('name') ?>													<!-- ブログ名 -->
		<?php endif; ?>
	</title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type') ?>"; charset="<?php bloginfo('charset'); //コンテンツタイプを出力 ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" type="text/css">	<!-- CSSの指定 -->
  <link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />	<!-- フィードリーダーが自動的にRSSフィードを検出するように設定する -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/jquery.lightbox-0.5.css" media="screen" />	<!-- lightboxの指定 -->
  <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.js"></script>																	<!-- lightboxの指定 -->
  <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.lightbox-0.5.js"></script>											<!-- lightboxの指定 -->
  <script type="text/javascript">
		$(function() {  
  		$('.gallery a').lightBox();  
		});  
	</script>
</head>
<body>
	<div id="container">
		<?php require('header.php') ?>			<!-- header.phpを読み込む -->
    <div id="content">
      <div id="right" class="page">			<!-- class="page"は固定ページ用 -->       
        <?php if(have_posts()):					//記事ごとにループする
                  while(have_posts()):
                    the_post();
        ?>				
        <div class="post">		<!-- 記事のタイトルと本文をグループ化する -->
          <h2>
            <a href="<?php the_permalink(); ?>">													<!-- 記事の個別ページのURLを出力 -->
              <?php the_title(); ?>																			<!-- 記事名 -->
            </a>
          </h2>				
          <?php the_content(); ?>																				<!-- 記事の本文を表示する -->
        </div><!--post終わり-->
                      
        <?php endwhile; endif; ?>
                      
        <?php comments_template(); ?>																		<!-- 投稿フォームの表示 -->
                       
      </div><!--right終わり-->
    </div><!--content終わり-->
		<?php require('footer.php') ?>			<!-- footer.phpを読み込む -->		
	</div><!--container終わり-->
</body>
</html>