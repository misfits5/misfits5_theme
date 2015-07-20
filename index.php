<?php get_header(); ?>
<div class="row container">
<section>
<div class="col l4 m12 s12">
  <h2>blog</h2>
  <p>日々これ更新テキストテキスト</p>
</div><!-- /サイドセクション -->

<div class="col l8 m12 s12">
<div>


        <?php if(have_posts()): while(have_posts()): the_post(); ?>

          <div class="card z-depth-5"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
            <div class="card-image">

              <?php the_post_thumbnail('800,500,false'); ?>

              <span class="card-title"><h1><?php the_title(); ?></h1></span>
            </div>
            <div class="card-content">
<p><?php echo get_post_time('Y.m.d D'); ?></p>

            </div>
            <div class="card-action">
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
        </div>
              <?php endwhile; endif; ?>




</div>


</div><!-- /新着セクション -->





</section>
</div>


<?php get_footer(); ?>

<!-- wp_footer -->
<?php wp_footer(); ?>

</body>
</html>
