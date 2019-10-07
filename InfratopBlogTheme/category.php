<?php get_header(); ?>
<div class="w-1100 clearfix">
<section class="main">
  <section class="home__newArticle clearfix">
    <h2 class="home__newArticle__sectionTitle wow fadeInUp">
      <?php
        $category = get_the_category();
        $cat_name = $category[0]->cat_name;
      ?>
      <?php echo $cat_name; ?>の記事一覧
    </h2>
    <div class="home__newArticle__sectionTitle--device_sp clearfix">
      <div class="home__newArticle__Symbol--position_left clearfix">
        <span class="home__nA__S--shape_square"></span>
        <span class="home__nA__S--shape_triangle"></span>
      </div>
      <h2>
        <?php echo $cat_name; ?>の記事一覧
      </h2>
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

  <?php
the_posts_pagination( array(
  'mid_size'           => 5,
  'prev_text'          => '«',
  'next_text'          => '»',
  'before_page_number' => '<span class="home__pager__item">' . ' </span>',
) );
?>
</section>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>