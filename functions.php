<?php

// 自分で追加した エラー表示ゼロに 7/29
error_reporting(0);

// コンテンツの最大幅を設定します。
if ( ! isset( $content_width ) ) {
  $content_width = 790;
}

function slowtime_setup() {

  // タイトルタグを自動生成します。
  add_theme_support( 'title-tag' );

  // ヘッダーにfeedのlinkを生成します。
  add_theme_support( 'automatic-feed-links' );

  // アイキャッチ画像を利用できるようにします。
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 790, 300, true );

  // サムネイル用画像サイズ設定
  add_image_size( 'large-thumbnail', 1090, 330, true );

  // 出力されるマークアップをHTML5にします。
  add_theme_support( 'html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
  ) );

  // エディタ用CSSを有効にします。
  add_editor_style( array( 'css/editor-style.css' ) );
}
add_action( 'after_setup_theme', 'slowtime_setup' );

// ウィジェット機能を追加します。
function slowtime_widgets_init() {
  register_sidebar( array(
    'name' => 'サイドバーウィジェットエリア',
    'id' => 'subcol-widget-area',
    'description' => 'サイドバーのウィジェットエリア',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h2 class="widget__title font-serif">',
    'after_title' => '</h2>',
  ) );
}
add_action( 'widgets_init', 'slowtime_widgets_init' );

// 読み込むCSSとJavaScriptを設定します。
function slowtime_scripts() {

  // bootstrap CSSの読み込み
  wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/css/bootstrap.min.css', array(), '1' );

  // サイト用CSSの読み込み
  wp_enqueue_style( 'slowtime-style', get_template_directory_uri().'/css/app.css', array(), '1' );

  // テーマ定義CSSの読み込み
  wp_enqueue_style( 'wp-style', get_stylesheet_uri(), array(), '1' );

  // jQueryの読み込み ※なんだけども、今回jQuery単体は読み込んでないので一旦コメントアウト
  // wp_deregister_script( 'jquery' ); // デフォルトで読み込まれるjQueryの登録を抹消
  //wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/jquery-1.11.3.min.js', array(), '1.11.3', true );

  // bootstrap JavaScriptの読み込み
  wp_enqueue_script( 'bootstrap-script', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '3.3.4', true );

  // サイト用JavaScriptの読み込み ※これ多分いらない(ファイルない)
  // wp_enqueue_script( 'slowtime-script', get_template_directory_uri().'/js/app.js', array(), '1', true );

}
add_action( 'wp_enqueue_scripts', 'slowtime_scripts' );

// 抜粋文が自動的に生成される場合に最後に付与される文字列を変更します。
function wp_excerpt_more() {
  return '......';
}
add_filter( 'excerpt_more', 'wp_excerpt_more' );

//概要（抜粋）の文字数調整
function my_excerpt_length($length) {
    return 100;
}
add_filter('excerpt_length', 'my_excerpt_length');

function translate_month($month) {
  switch ($month) {
    case "January":
      echo "1";
      break;
    case "February":
      echo "2";
      break;
    case "March":
      echo "3";
      break;
    case "April":
      echo "4";
      break;
    case "May":
      echo "5";
      break;
    case "June":
      echo "6";
      break;
    case "July":
      echo "7";
      break;
    case "August":
      echo "8";
      break;
    case "Setember":
      echo "9";
      break;
    case "October":
      echo "10";
      break;
    case "November":
      echo "11";
      break;
    case "December":
      echo "12";
      break;
  }
}
