<?php get_header(); ?>

<div class="row main-wrapper container">
<?php get_sidebar(); ?>

<div class="single-post col l8 m8 s12">

  <div class="contents-box">
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article class="single-article">
    <header class="single-header">
      <div class="single-header-cat">
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
      <div class="single-header-data"><p><?php echo get_post_time('Y.m.d D'); ?></p></div>
      <div class="single-header-title"><h1><?php the_title(); ?></h1></div>
      <div class="single-header-tag"><i class="fa fa-tag fa-2x fa-fw"></i><?php the_tags('<ul><li>','</li><li>','</li></ul>');?></div>
    </header><!-- single-header end -->

    <div class="single-post">
      <?php the_content(''); ?>
    </div><!-- single-post end -->

    <footer class="single-footer">
      <div class="single-footer-tag"><i class="fa fa-tag fa-2x fa-fw"></i><?php the_tags('<ul><li>','</li><li>','</li></ul>');?></div>
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