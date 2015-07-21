<?php get_header(); ?>
<div class="blue lighten-5">
<section class="container">

<div class="row">
<div class="col l8">
<h1>misfits5.com</h1>
<p>game,comic,movie,dorama</p>
</div>

<div class="col l4">
<img src="http://placehold.it/300x500">
</div>
</div>
</section>
</div>


<div class="row container">
<section>
<div class="col l4 m12 s12">
  <h2>blog</h2>
  <p>日々これ更新テキストテキスト</p>
</div><!-- /サイドセクション -->

<div class="col l8 m12 s12">

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php if (is_first_post()):　//最初の投稿だけ表示を変える ?>

<article class="col l12 m12 s12" style="background-image: url(
<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>);
background-repeat: no-repeat;
width: 100%;"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
  <div>
    <div class="cat">
    <p><?php
$cats = get_the_category();
$cat = $cats[0];
if($cat->parent){
$parent = get_category($cat->parent);
echo $parent->cat_name;
}else{
echo $cat->cat_name;
}?></p>
    </div>
    <div class="entry-title">
    <p><?php echo get_post_time('Y.m.d D'); ?></p>
    <h1><?php the_title(); ?></h1>
    </div>

  </div>
</a></article>
<?php else: //2番目以降の投稿 ?>

<div class="card col l6 m6 s12 z-depth-5 large"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
  <div class="card-image">
    <?php the_post_thumbnail(800,500,true); ?>
    <span class="card-title"><h1><?php the_title(); ?></h1></span>
  </div>
  <div class="card-content">
    <p><?php echo get_post_time('Y.m.d D'); ?></p>
    <p><?php
$cats = get_the_category();
$cat = $cats[0];
if($cat->parent){
$parent = get_category($cat->parent);
echo $parent->cat_name;
}else{
echo $cat->cat_name;
}
?></p>
  </div>
</a></div>


<?php endif; ?>

<?php endwhile; endif; ?>


</div><!-- /新着セクション -->





</section>
</div>


<?php get_footer(); ?>

<!-- wp_footer -->
<?php wp_footer(); ?>

</body>
</html>
