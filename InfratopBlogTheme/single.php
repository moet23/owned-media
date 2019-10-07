<?php get_header(); ?>

<div class="w-1100 clearfix">
<section class="main">
  <?php if (have_posts()) :
    while (have_posts()) : the_post();?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('single__article')?>>
        <h1 class="single__article__title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h1>
        <p class="single__article__meta">
          <span class="date"><?php the_date(); ?></span>/
          <span><i class="fa fa-tag"></i><?php the_tags('','、'); ?></span>
        </p>
        <div class="single__article__mv">
          <?php the_post_thumbnail(); ?>
        </div>
        <div class="single__article__content">
          <?php the_content(); ?>
        </div>
        <div id="share" class="single__share">
          <h2>この記事をシェアする</h2>
          <div class="clearfix single__share__btnList">
            <div class="single__share__count">
              <?php echo scc_get_share_twitter(); ?>
            </div>
            <div class="single__share__btn single__share__btnTw">
              <a href="http://twitter.com/intent/tweet?text=<?php echo trim(wp_title( '', false)); ?>&nbsp;|&nbsp;&amp;url=<?php echo get_permalink() ?>" onClick="window.open(encodeURI(decodeURI(this.href)), 'tweetwindow', 'width=550, height=450, personalbar=0, toolbar=0, scrollbars=1, resizable=1' ); return false;" target="_blank">
                <i class="fa fa-twitter fa-2x"></i>
                <span class="single__share__text--device_pc">ツイート</span>
                <span class="single__share__text--device_sp">この記事をツイートする</span>
              </a>
            </div>
            <div class="single__share__count">
              <?php echo scc_get_share_facebook(); ?>
            </div>
            <div class="single__share__btn single__share__btnFb">
              <a href="http://www.facebook.com/share.php?u=<?php echo get_permalink() ?>" onClick="window.open(this.href, 'window', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
                <i class="fa fa-facebook fa-2x"></i>
                <span class="single__share__text--device_pc">シェア</span>
                <span class="single__share__text--device_sp">この記事をシェアする</span>
              </a>
            </div>
            <div class="single__share__count">
              <?php echo scc_get_share_hatebu(); ?>
            </div>
            <div class="single__share__btn single__share__btnHatena">
              <a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-layout="simple" title="<?php the_title(); ?>">
                <i class="fa fa-hatena fa-2x"></i>
                <span class="single__share__text--device_pc">はてブ</span>
                <span class="single__share__text--device_sp">はてなブックマークに追加</span>
              </a>
              <script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
              </a>
            </div>
            <div class="single__share__btn single__share__btnLine">
              <a class="line btn" href="http://line.me/R/msg/text/?<?php echo get_the_title(); ?><?php echo get_permalink() ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/LINE_Icon.png">
              <!-- <span>
                <script type="text/javascript" src="//media.line.me/js/line-button.js?v=20140411" ></script>
                <script type="text/javascript">
                  new media_line_me.LineButton({"pc":false,"lang":"ja","type":"c"});
                </script>
              </span> -->
                <span class="single__share__text--device_sp">LINEで送る</span>
              </a>
            </div>
          </div>
        </div>
        <section class="single__article__author clearfix article">
            <?php echo get_avatar(get_the_author_id(), 150); ?>
            <div class="single__article__authorDetail">
              <h3>この記事を書いた人</h3>
              <h4><?php the_author(); ?></h4>
              <p> <?php the_author_meta('description'); ?></p>
            </div>
        </section>

    <?php endwhile;
  else : ?>
      <div class="post">
        <h2>記事はありません</h2>
        <p>お探しの記事は見つかりませんでした。</p>
      </div>
  <?php endif; ?>
        
        <section class="single__relatedArticles">
          <h3>関連記事<small>こちらの記事も併せてお読みください。</small></h3>
          <div class="single__relatedArticles__thumbnails clearfix">
            <?php related_posts(); ?>
          </div>
        </section>

</section><!-- /section.main -->
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>