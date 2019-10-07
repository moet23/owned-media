<?php
wp_reset_query();
$relatedTags = get_the_tags($post->ID);
$relatedTag_ID = array();
foreach($relatedTags as $tag):
  array_push( $relatedTag_ID, $tag -> term_ID);
endforeach ;
$relatedArticleCondition = array(
  'post__not_in' => array($post -> ID),
  'posts_per_page'=> 8,
  'tag__in' => $relatedTag_ID,
  'orderby' => 'rand',
);
$relatedArticleQuery = new WP_Query($relatedArticleCondition); ?>
  <?php if( $relatedArticleQuery -> have_posts()): ?>
    <?php while ($relatedArticleQuery -> have_posts()) : $relatedArticleQuery -> the_post(); ?>
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
        <span class="yarpp-thumbnail-title">
          <?php the_title(); ?>
        </span>
      </a>
    <?php endwhile;?>
  <?php else:?>
    <p>記事はありませんでした</p>
  <?php
  endif;

wp_reset_postdata();
?>