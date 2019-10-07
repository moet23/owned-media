<?php get_header(); ?>
<div class="w-1100 clearfix">
<section class="main">
  <section class="home__pickupArticle wow fadeInLeftBig" data-wow-delay="1s">
    <div class="bxslider">
      <?php
      $pickupCondition = Array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                        'meta_key' => 'pickup',
                        'meta_value' => 'true'
      );
      $the_query = new WP_Query($pickupCondition);
      if($the_query -> have_posts()):
          while($the_query -> have_posts()): $the_query -> the_post(); ?>
          <div id="post-<?php the_ID(); ?>" <?php post_class('home__pickupArticleBox'); ?>>
            <div class="home__pA__meta--device_sp clearfix">
              <span class="home__pA__category--device_sp">
                <?php the_category(); ?>
              </span>
              <h2 class="home__pA__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
            </div>
            <a class="home__pA__thumbnail" href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail(); ?>
            </a>
            <div class="home__pA__meta clearfix">
              <span class="home__pA__date"><?php the_date(); ?></span>
              <div class="home__pA__shareCount clearfix">
                <span class="home__pA__sC--sns_facebook"><?php echo get_post_meta($post->ID , 'views' ,true); ?> PV</span>
              </div>
            </div>
          </div>
        <?php endwhile;
      else : ?>
        <div class="home__newArticle__404">
        <h2>記事はありません</h2>
        <p>お探しの記事は見つかりませんでした。</p>
        </div>
      <?php endif; ?>
    </div>
  </section>
  <section class="home__newArticle clearfix">
    <h2 class="home__newArticle__sectionTitle wow fadeInUp"  data-wow-delay="1s">新着記事</h2>
    <div class="home__newArticle__sectionTitle--device_sp clearfix">
      <div class="home__newArticle__Symbol--position_left clearfix">
        <span class="home__nA__S--shape_square"></span>
        <span class="home__nA__S--shape_triangle"></span>
      </div>
      <h2>新着記事</h2>
      <div class="home__newArticle__Symbol--position_right clearfix">
        <span class="home__nA__S--shape_triangle"></span>
        <span class="home__nA__S--shape_square"></span>
      </div>
    </div>
    <?php wp_reset_query(); ?>
    <?php if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <?php
        $articleClasses = Array(
                  'clearfix',
                  'home__articleCard',
                  'wow',
                  'fadeInUp'
        ); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class($articleClasses); ?>>
          <a class="home__aC__thumbnail" href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
          </a>
          <div class="home__aC__meta">
            <div class="home__aC__meta--position_top clearfix">
              <div class="home__aC__categorySymbol clearfix">
                <span class="home__aC__cS--shape_square"></span>
                <span class="home__aC__cS--shape_triangle"></span>
              </div>
              <span class="home__aC__category"><?php the_category(); ?></span>
              <div class="home__aC__shareCount">
                <?php echo get_post_meta($post->ID , 'views' ,true); ?> PV
              </div>
            </div>
            <div class="home__aC__meta--position_middle">
              <h3 class="home__aC__title">
                <a href="<?php the_permalink(); ?>">
                  <?php
                  if(mb_strlen($post -> post_title, 'UTF-8') > 40){
                    $title = mb_substr($post -> post_title, 0, 40, 'UTF-8');
                    echo $title.'…';
                  }else{
                    echo $post -> post_title;
                  };
                  ?>
                </a>
              </h3>
            </div>
            <div class="home__aC__meta--position_bottom clearfix">
              <span class="home__aC__date"><?php the_date(); ?></span>
              <span class="home__aC__tag"><i class="fa fa-tag"></i><?php the_tags('','、'); ?></span>
            </div>
            <span class="home__aC__date--device_sp"><?php the_time('Y.m.d'); ?></span>
              <span class="home__aC__tag--device_sp"><i class="fa fa-tag"></i><?php the_tags('','、'); ?></span>
          </div>
        </div>
      <?php endwhile;
      else : ?>
        <div class="home__newArticle__404">
        <h2>記事はありません</h2>
        <p>お探しの記事は見つかりませんでした。</p>
        </div>
    <?php endif; ?>
  </section>
  <!-- <ul class="home__pager clearfix">
    <li class="home__pager__prev home__pager__item"><a href="#">&laquo;</a></li>
    <li class="home__pager__item pager__item--state_active"><a href="#">1</a></li>
    <li class="home__pager__item"><a href="#">2</a></li>
    <li class="home__pager__item"><a href="#">3</a></li>
    <li class="home__pager__item"><a href="#">4</a></li>
    <li class="home__pager__item">...</li>
    <li class="home__pager__item"><a href="#">12</a></li>
    <li class="home__pager__next home__pager__item"><a href="#">&raquo;</a></li>
  </ul>
 -->
<?php
the_posts_pagination( array(
  'mid_size'    => 2,
  'prev_text'   => '«',
  'next_text'   => '»',
) );
?>
</section>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>