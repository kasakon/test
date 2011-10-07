<div id="header">
  <h1><a href="<?php echo home_url();?>">							<!-- index.phpへのリンク -->
		<?php bloginfo('name'); ?></a>											<!-- ブログ名の表示 -->
  </h1>
  <p id="desc"><?php bloginfo('description'); ?></p>		<!-- ブログの説明を表示 -->
  <div id="slideshow">
      <img src="<?php bloginfo("template_url") ?>/parts/head.png" alt="" />
      <img src="<?php bloginfo("template_url") ?>/parts/head2.png" alt="" />
      <img src="<?php bloginfo("template_url") ?>/parts/head3.jpg" alt="" />
      <img src="<?php bloginfo("template_url") ?>/parts/head4.jpg" alt="" />
  </div>
</div><!--header終わり-->
<div id="navigation">
	<?php wp_nav_menu(array('theme_location' => 'navigation')); ?>	<!-- ナビゲーションバーの表示 -->
</div>