<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>BLOG</h1>
    </div>
  </div>
</div>

<div class="row">
  <?php 
    if ( have_posts() ) :
    while ( have_posts() ) :
      the_post(); ?>

    <div class="col-6 col-sm-6 col-md-6">
      <div class="post">
        <h2><?php the_title(); ?></h2>
        <div class="img">
          <?php the_post_thumbnail([500, 500]) ?>
        </div>
        <p> <?php the_content(); ?></p>
        <?php the_tags('<ul><li>','</li><li>', '</li></ul>'); ?>
      </div>
    </div>

<?php 
endwhile;
 endif;
 ?>
   </div>