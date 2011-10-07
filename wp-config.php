<?php
/**
 * The base configurations of the WordPress.
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - こちらの情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpressDB');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'kasakon');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースのキャラクターセット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^RInUR7;nLK|/5D4_|gJbcBP$Eu=5q|(gGgo)L^qUMzD-lcePaZU-v0uUThLIU]K');
define('SECURE_AUTH_KEY',  'B)83~QWE;+FYh(dKUULDl-u:j0IQw>5kXOj}89DvSib~sG@{WD`~1eeZ3|{XUGU+');
define('LOGGED_IN_KEY',    '-/?+LL(D87;398(AS,_BYJ3PO@hgMGSB:agHD,+ug*<@$~SI5eZdOynsw-Cf7b>A');
define('NONCE_KEY',        'k,9a+7WR[wft%VGz_y0Qt@{~t2-*JcZ*79l;@Tbu7;b%/#=:*K1M]Gc){&-:-JF9');
define('AUTH_SALT',        'cXqU^AhL80?Cx$!@zf[oTo@=2Sx%EF 3@p-+*zJsKHk)y.gSz6 |T|<eyI4sF_DH');
define('SECURE_AUTH_SALT', 'MFz:J$y-]eA*h`cJe_Lo_}nQ6*VIOg U-b:y3L|Ox9~]`gsf!&d9bP#Ldy`COBWX');
define('LOGGED_IN_SALT',   '-|G}k+wBU0/c0LHJZ9jU_9H)/Kaw3wH{%~gX)x*@N-|9olx1Wy-N[tLM|ZSWqY-5');
define('NONCE_SALT',       'v+<U^h#=Ic7pDS_uz+jv7%fCqu3/cQ5 ZRw3)OT{Z&M8n^M#+q?]}IqvGr,@e4#M');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。例えば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定することでドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

// hogehoge
