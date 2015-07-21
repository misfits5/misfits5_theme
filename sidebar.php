<div class="sidebar col l4 hide-on-med-and-down">

<h2>サイドバー</h2>

      <div><p><?php echo get_post_time('Y.m.d D'); ?></p></div>
      <div><p><?php
$cats = get_the_category();
$cat = $cats[0];
if($cat->parent){
$parent = get_category($cat->parent);
echo $parent->cat_name;
}else{
echo $cat->cat_name;
}
?></div>
      <div> <?php the_tags('<ul><li>','</li><li>','</li></ul>');?></div>



</div>
