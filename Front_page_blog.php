    <div class="row">
    
<?php
$args = array();
query_posts($args);
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

   		 <div class="span6">
         <div class="item right">
	<?php if (is_mobile()) { the_post_thumbnail('slider-mobile-thumb'); } else { the_post_thumbnail(array(100,100,true), array('class' => 'img-thumbnail')); } ?>
		<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
    	<h5 class="small">Posted on <?php the_time('F jS, Y') ?> by  <?php the_author_posts_link(); ?> </h5>
		<p><?php the_content('Read more'); ?></p>
        </div>
        </div>

 <?php endwhile; else: ?>

 <p>Sorry, no posts matched your criteria.</p>

 <?php endif; ?>
<?php wp_reset_query(); ?>