<?php
//ウィジェット

//titleタグ表記
function my_setup_theme() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'my_setup_theme' );

//コメント欄のデフォルト文言削除
add_filter('comment_form_default_fields', 'mytheme_remove_url');
function mytheme_remove_url($arg) {
    $arg['url'] = '';
        $arg['email'] = '';
    return $arg;
}

add_filter( "comment_form_defaults", "my_comment_notes_before");
function my_comment_notes_before( $defaults){
    $defaults['comment_notes_before'] = '';
    return $defaults;
}

add_filter("comment_form_defaults","my_special_comment_after");
function my_special_comment_after($args){
    $args['comment_notes_after'] = '';
return $args;
}

//wp_head()不要タグ削除
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'feed_links_extra', 3);


//アイキャッチ
add_theme_support( 'post-thumbnails' );


//現在のページ数の取得
function show_page_number() {
    global $wp_query;

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $max_page = $wp_query->max_num_pages;
    echo $paged;
}

//総ページ数の取得
function max_show_page_number() {
    global $wp_query;

    $max_page = $wp_query->max_num_pages;
    echo $max_page;
}

// ソーシャルボタン
function SocialButtonVertical()
{ ?>
<ul class="sns-btn">
<li><div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="box_count" data-width="72" data-show-faces="false"></div></li>
<li><a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-via="" data-lang="ja"　>ツイート</a></li>
<li><g:plusone size="tall" href="<?php the_permalink(); ?>"></g:plusone></li>
<li><a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php the_title(); ?>" data-hatena-bookmark-layout="vertical" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a></li>
<li><a href="#" onclick="Evernote.doClip({}); return false;"><img src="http://static.evernote.com/article-clipper-vert.png" alt="Clip to Evernote" /></a></li>
</ul>
<?php }

//最初の投稿だけ表示を変えるための関数
function is_first_post(){
    global $wp_query;
    return ($wp_query->current_post === 0);
}
