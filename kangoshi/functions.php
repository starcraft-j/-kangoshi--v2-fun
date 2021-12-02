<?php add_theme_support('post-thumbnails');

function is_mobile(){
    $useragents = array(
        'iPhone', // iPhone
        'iPod', // iPod touch
        'Android.*Mobile', // 1.5+ Android *** Only mobile
        'Windows.*Phone', // *** Windows Phone
        'dream', // Pre 1.5 Android
        'CUPCAKE', // 1.5+ Android
        'blackberry9500', // Storm
        'blackberry9530', // Storm
        'blackberry9520', // Storm v2
        'blackberry9550', // Storm v2
        'blackberry9800', // Torch
        'webOS', // Palm Pre Experimental
        'incognito', // Other iPhone browser
        'webmate' // Other iPhone browser
    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

// カスタム投稿 
add_action( 'init', 'create_custom_post_type' );
function create_custom_post_type() {

    //ウォーターサーバー
    register_post_type( 'kangoshi',
        array(
            'labels' => array(
            'name' => __( '会社' ),
            'singular_name' => __( '会社' ),
            'add_new_item' => '会社を追加',
            'add_new' => '新規追加',
            'new_item' => '新規商品',
            'view_item' => '会社を表示',
            'not_found' => '会社は見つかりませんでした',
            'not_found_in_trash' => 'ゴミ箱に何もありません。',
            'search_items' => '会社を検索',
        ),
            'public' => true,
            'show_ui' => true,
            'query_var' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'has_archive' => true,
            'menu_position' => 1,
            'supports' => array('title','thumbnail'),
        
        )
    );
    register_taxonomy_for_object_type('post_tag', 'article');
}

function custom_upload_mimes( $existing_mimes ) {
    $existing_mimes['svg'] = 'image/svg+xml';
    return $existing_mimes;
}
add_filter( 'mime_types', 'custom_upload_mimes' ); ?>