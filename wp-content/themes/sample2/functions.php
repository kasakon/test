<?php
	//ウィジットの有効化.P142
	register_sidebar();
	
	//受信したコメント comments.phpのmydesign部分.P214
	function mydesign($comment,$args,$depth){
		$GLOBALS['comment'] = $comment; ?>
    <li class="compost">
    	<?php comment_text(); ?>					<!-- コメントの本文を表示する </li>は自動で入力される -->
    <p class="cominfo">
    	<?php comment_date(); ?>					<!-- コメントの投稿日を表示する -->
      <?php comment_time(); ?>					<!-- コメントの投稿時間を表示する -->
      |
      <?php comment_author_link(); ?>	<!-- コメントの投稿者名を表示する -->
    </p>
    <?php
	}
	
	//カスタムメニュー.P258
	register_nav_menus(array('navigation' => 'ナビゲーション'));
	
	//カスタムヘッダーの機能を有効にする.P291
	add_custom_image_header('','admin_header_style');		//カスタムヘッダーの機能を有効化
	function admin_header_style(){
		?>
    <style type="text/css">
			#headimg{
				width:950px!important;												/*ブラウザウィンドウの横幅に関係なくヘッダー画像を表示させる*/
			}
		</style>
    <?php
	}
	define('NO_HEADER_TEXT',true);											//文字の表示を削除する
	define('HEADER_IMAGE','%s/parts/head.png');					//デフォルトのヘッダー画像の指定
	define('HEADER_IMAGE_WIDTH','950');									//画像の横幅の指定
	define('HEADER_IMAGE_HEIGHT','260');								//画像の高さの指定
	
	//カスタム背景の機能を有効にする.P300
	add_custom_background();														//カスタム背景の機能を有効にする
?>