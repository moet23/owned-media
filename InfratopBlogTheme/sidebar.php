<section class="sideBar wow fadeInRightBig">
  <div class="sideBar__search">
    <?php get_search_form(); ?>
  </div>
  <section class="sideBar__articleRanking">
    <h2 class="sB__sectionTitle">人気記事</h2>
    <?php
      $articleRankingArg = array( 'posts_per_page' => 4,
          'orderby' => 'meta_value_num',//meta_valueではないので注意
          'meta_key' =>'views',
          'order' => 'DESC',
          );
      $articleRankingQuery = new WP_Query( $articleRankingArg );
      if($articleRankingQuery -> have_posts()) :
        while($articleRankingQuery -> have_posts()) : $articleRankingQuery -> the_post(); ?>
          <article class="aR__article">
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="aR__thumbnail">
                <?php the_post_thumbnail(); ?>
              </a>
              <div class="aR__shareCount">
                <?php echo get_post_meta($post->ID , 'views' ,true); ?> PV
              </div>
              <h3 class="aR__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
          </article>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    <!-- <div class="aR__article">
      <a href="" class="aR__thumbnail">
        
      </a>
      <div class="aR__shareCount">
        <i class="fa fa-twitter"></i> 34 <i class="fa fa-facebook"></i> 68
      </div>
      <h3 class="aR__title">
        <a href="">年間1000名を輩出するWEBCAMPが在宅で働きたい主婦・ママ専用のWEBデザインコース開講！</a>
      </h3>
    </div>



    <div class="aR__article">
      <a href="#" class="aR__thumbnail">
        <img src="img/programming-T-Shirts.jpg">
      </a>
      <div class="aR__shareCount">
        <i class="fa fa-twitter"></i> 34 <i class="fa fa-facebook"></i> 68
      </div>
      <h3 class="aR__title">
        <a href="#">年間1000名を輩出するWEBCAMPが在宅で働きたい主婦・ママ専用のWEBデザインコース開講！</a>
      </h3>
    </div>
    <div class="aR__article">
      <a href="#" class="aR__thumbnail">
        <img src="img/programming-T-Shirts.jpg">
      </a>
      <div class="aR__shareCount">
        <i class="fa fa-twitter"></i> 34 <i class="fa fa-facebook"></i> 68
      </div>
      <h3 class="aR__title">
        <a href="#">年間1000名を輩出するWEBCAMPが在宅で働きたい主婦・ママ専用のWEBデザインコース開講！</a>
      </h3>
    </div>
    <div class="aR__article">
      <a href="#" class="aR__thumbnail">
        <img src="img/programming-T-Shirts.jpg">
      </a>
      <div class="aR__shareCount">
        <i class="fa fa-twitter"></i> 34 <i class="fa fa-facebook"></i> 68
      </div>
      <h3 class="aR__title">
        <a href="#">年間1000名を輩出するWEBCAMPが在宅で働きたい主婦・ママ専用のWEBデザインコース開講！</a>
      </h3>
    </div> -->
  </section>
  <section class="sideBar__category">
    <h2 class="sB__sectionTitle">カテゴリー</h2>
    <ul class="category__list" id="category__list">
      <li><a href="<?php echo get_category_link(79); ?>">Infratopの記事一覧</a></li>
      <!-- <ul class="category__list--accordion_open">
        <li class="category__listItem"><a href="#">▶ 新制度</a></li>
        <li class="category__listItem"><a href="#">▶ 講師紹介</a></li>
        <li class="category__listItem"><a href="#">▶ PR</a></li>
      </ul> -->
      <li><a href="<?php echo get_category_link(15); ?>">Webスクの記事一覧</a></li>
      <!-- <ul class="category__list--accordion_open">
        <li class="category__listItem"><a href="#">▶ 新制度</a></li>
        <li class="category__listItem"><a href="#">▶ 講師紹介</a></li>
        <li class="category__listItem"><a href="#">▶ PR</a></li>
      </ul> -->
      <li><a href="<?php echo get_category_link(38); ?>">WebCampの記事一覧</a></li>
      <!-- <ul class="category__list--accordion_open">
        <li class="category__listItem"><a href="#">▶ 新制度</a></li>
        <li class="category__listItem"><a href="#">▶ 講師紹介</a></li>
        <li class="category__listItem"><a href="#">▶ PR</a></li>
      </ul> -->
    </ul>
  </section>
  <section class="sideBar__tagsCloud">
    <h2 class="sB__sectionTitle">タグ</h2>
    <div class="sideBar__tags"0
      <?php wp_tag_cloud('smallest=14 & largest=14 & unit=px'); ?>
    </div>
  </section>
  <section class="sideBar__sns">
    <h2 class="sB__sectionTitle">Facebook</h2>
    <div class="sns__facebook">
      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Finfra.top.no1%2F&tabs&width=290&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="290" height="214" style="border:none;overflow:hidden" scrolling="no" margin-left:10px;frameborder="0" allowTransparency="true"></iframe>
    </div>
  </section>
</section>