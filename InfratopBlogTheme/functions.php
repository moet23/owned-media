<?php 
  add_theme_support('post-thumbnails');

  function my_the_post() {
      global $previousday;
      $previousday = '';
  }
  
  function publish_period() {
  return 60 * 60 * 24 * 100;// 左から [秒×分×時間×日]  となるので、この場合15日間になる
}
add_filter( 'ppp_nonce_life', 'publish_period' );


  add_action( 'the_post', 'my_the_post' );

  if (function_exists('register_sidebar')) {
  register_sidebar(array(
  'name' => 'ウィジェット名',
  'id' => 'ウィジェットのID',
  'description' => 'ウィジェットの説明',
  'before_widget' => 'ウィジェットを囲む開始タグ',
  'after_widget' => 'ウィジェットを囲む終了タグ',
  'before_title' => 'ウィジェットのタイトルを囲む開始タグ',
  'after_title' => 'ウィジェットのタイトルを囲む終了タグ'
  ));
  }

  add_action( 'wp_enqueue_scripts', 'deregister_plugin_files' );
  function deregister_plugin_files() {
      wp_dequeue_style( 'yarppRelatedCss' );
      wp_dequeue_style( 'yarppWidgetCss' );
      wp_dequeue_style( 'yarpp-thumbnails-yarpp-thumbnail' );
  }

  //yarppCSS削除
  add_action('get_footer','lm_dequeue_footer_styles');
  function lm_dequeue_footer_styles(){
      wp_dequeue_style( 'yarppRelatedCss' );
      wp_dequeue_style( 'yarppWidgetCss' );
      wp_dequeue_style( 'yarpp-thumbnails-yarpp-thumbnail' );
  }

 function singleBtnData(){
    $CTABtnText = get_post_meta(get_the_ID(), 'CTABtnText', true);
    $CTABtnUrl  = get_post_meta(get_the_ID(), 'CTABtnUrl', true);
    $CTABtnColor  = get_post_meta(get_the_ID(), 'CTABtnColor', true);
    return '<a target="_blank" class="single__article__btnDefault single__btn '.$CTABtnColor.'" href="'.$CTABtnUrl.'">'.$CTABtnText.'</a>';
}
add_shortcode('CTABtn', 'singleBtnData');

function singleBtnData2(){
    $CTABtnText2 = get_post_meta(get_the_ID(), 'CTABtnText2', true);
    $CTABtnUrl2  = get_post_meta(get_the_ID(), 'CTABtnUrl2', true);
    $CTABtnColor2  = get_post_meta(get_the_ID(), 'CTABtnColor2', true);
    return '<a target="_blank" class="single__article__btnDefault single__btn '.$CTABtnColor2.'" href="'.$CTABtnUrl2.'">'.$CTABtnText2.'</a>';
}
add_shortcode('CTABtn2', 'singleBtnData2');


?>