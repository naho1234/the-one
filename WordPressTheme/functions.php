<?php

/**
 * セットアップ処理
 *
 * @return void
 */
function my_theme_setup() {
	// アイキャッチ画像を有効化
	add_theme_support( 'post-thumbnails' );
	// 投稿とコメントのRSSフィードのリンクを有効化
	add_theme_support( 'automatic-feed-links' );
	// タイトルタグ自動生成
	add_theme_support( 'title-tag' );
	// HTML5でマークアップ
	add_theme_support( 'html5', array(
	  'search-form',
	  'comment-form',
	  'comment-list',
	  'gallery',
	  'caption',
	) );
  }
  add_action( 'after_setup_theme', 'my_theme_setup' );

  /**
   * CSSとJavaScriptの読み込み
   *
   * @return void
   */

function add_custom_scripts() {
    // Google Fontsの追加
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null);

	// micromodal
  	wp_enqueue_script( 'micromodal', '//unpkg.com/micromodal/dist/micromodal.min.js', array(), '1.0.0' );

	//GSAP
	wp_enqueue_script( 'gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js', array(), '3.11.5', false );

    // splideのCSSの追加
    wp_enqueue_style( 'splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css', false );

    // テーマのCSSの追加
    wp_enqueue_style( 'theme-style', get_theme_file_uri('assets/css/styles.css'), false );

    // jQueryの追加
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), '3.6.0', true );

    // テーマのJSの追加
    wp_enqueue_script( 'theme-scripts', get_theme_file_uri('assets/js/script.js'), array('jquery'), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'add_custom_scripts' );



/**
 * 記事表示時の整形無効
 *
 * @return void
 */
function my_theme_remove_wpautop() {
    remove_filter( 'the_content', 'wpautop' );
    remove_filter( 'the_excerpt', 'wpautop' );

    add_filter( 'tiny_mce_before_init', 'my_theme_disable_tinymce_formatting' );
}
add_action( 'after_setup_theme', 'my_theme_remove_wpautop' );

/**
 * Disable formatting in the TinyMCE editor.
 *
 * @param array $init_array An array of TinyMCE settings.
 * @return array The modified array of TinyMCE settings.
 */
function my_theme_disable_tinymce_formatting( $init_array ) {
    global $allowedposttags;

    $init_array['valid_elements']          = '*[*]';
    $init_array['extended_valid_elements'] = '*[*]';
    $init_array['valid_children']          = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']';
    $init_array['indent']                  = true;
    $init_array['wpautop']                 = false;
    $init_array['force_p_newlines']        = false;

    return $init_array;
}