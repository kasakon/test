<div id="comments">  
  <?php if(have_comments()): ?>		<!-- 受信したコメントがある場合は出力する -->
    <h3>コメント</h3>
    <ul>
      <?php wp_list_comments('callback=mydesign'); ?>		<!-- 受信したコメントを出力する function.phpのmydesignを参照する -->
    </ul>
  <?php endif; ?>
  
  <?php comment_form(); ?>									<!-- コメント投稿フォームを出力する -->
  
  <p id="comfeed">
  	<?php post_comments_feed_link(); ?>		<!-- コメントのRSSフィードへのリンクを出力する -->
  </p>
  
  <?php if(pings_open()): ?>								<!-- トラックバックの送信を許可している場合は処理を実行 -->
    <p id="trurl">
      <strong>トラックバックURL：</strong>
      <input id="track" type="text" size="55" value="<?php trackback_url(); ?>" readonly="readonly" onclick="this.select()">						<!-- トラックバックURLを出力する -->
    </p>
  <?php endif; ?>
</div>