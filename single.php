<?php get_header(); ?>

<div class="row container">

<div class="col l12 m12 s12">

  <div class="contents-box">
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article class="single-article">
    <header class="single-header">

      <div class="single-header-title"><h1><?php the_title(); ?></h1></div>

      <!-- ダブレット以下で表示 -->
      <div class="hide-on-large-only"><p><?php echo get_post_time('Y.m.d D'); ?></p></div>
      <div class="hide-on-large-only"><p><?php
$cats = get_the_category();
$cat = $cats[0];
if($cat->parent){
$parent = get_category($cat->parent);
echo $parent->cat_name;
}else{
echo $cat->cat_name;
}
?></div>
      <div class="hide-on-large-only"> <?php the_tags('<ul><li>','</li><li>','</li></ul>');?></div>

    </header><!-- single-header end -->

<?php get_sidebar(); ?>

    <div class="single-post">
      <?php the_content(''); ?>
    </div><!-- single-post end -->

    <footer class="single-footer">
      <div class="breadcrumbs">
        <ol><?php
        if(function_exists('bcn_display'))
          { bcn_display();  }?></ol>
      </div><!-- .breadcrumbs end -->
    </footer><!-- single-footer end -->

  <?php endwhile; endif; ?>
  </article><!-- single-article end -->
  </div><!-- contents-box end -->


</div><!-- /single-post -->

</div><!-- /main-wrapper -->

<?php get_footer(); ?>

<!-- wp_footer -->
<?php wp_footer(); ?>

</body>
</html>
