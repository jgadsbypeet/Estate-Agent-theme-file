	<div id="myCarousel" class="carousel slide">
	<div class="carousel-inner">
<?php
$args = array(
	'post_type' => 'Slider_properties'
);
query_posts($args);
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $count++; ?>
  <?php if ($count == 3) : ?>
         <div class="item active">
	<?php if (is_mobile()) { the_post_thumbnail('slider-mobile-thumb'); } else { the_post_thumbnail(); } ?>
          <div class="container">
            <div class="carousel-caption hidden-phone">
		<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
		<p class="lead"><?php the_content(); ?></p>		
            </div>
          </div>
        </div>

   <?php else : ?>
         <div class="item">
	<?php if (is_mobile()) { the_post_thumbnail('medium'); } else { the_post_thumbnail(); } ?>
          <div class="container">
            <div class="carousel-caption hidden-phone">
		<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
		<p class="lead"><?php the_content(); ?></p>
		</div>
          </div>
        </div>
  <?php endif; ?>

 <?php endwhile; else: ?>

 <p>Sorry, no posts matched your criteria.</p>

 <?php endif; ?>
<?php wp_reset_query(); ?>
</div>

     <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>

</div><!-- /.carousel -->