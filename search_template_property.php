<?php
/*
Template Name: Search Page Property
*/
?>

<?php get_header(); ?>

<?php include (TEMPLATEPATH . '/menu.php'); ?>


<body>

<?php include (TEMPLATEPATH . '/property_slider.php'); ?>

    <!-- Page Content -->
    <!-- ============================================== -->

    <div class="container marketing">

      <div class="row">
  <?php rewind_posts(); ?>
 <div class="span8">

<?php
$args = array(
	'post_type' => 'Slider_properties',
        'orderby' => 'meta_value_num',
        'order' => 'ASC'

);
query_posts($args);
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $count++; ?>
  <?php if ($count == 3) : ?>
         <div class="item active">
	<?php if (is_mobile()) { the_post_thumbnail('slider-mobile-thumb'); } else { the_post_thumbnail(array(150,150), array('class' => 'front_page_thumb')); } ?>
		<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
		<p class="lead"><?php the_content(); ?></p>		
        </div>

   <?php else : ?>
         <div class="item">
	<?php if (is_mobile()) { the_post_thumbnail('medium'); } else { the_post_thumbnail(array(150,150), array('class' => 'front_page_thumb')); } ?>
		<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
		<p class="lead"><?php the_content(); ?></p>
        </div>
  <?php endif; ?>

 <?php endwhile; else: ?>

 <p>Sorry, no posts matched your criteria.</p>

 <?php endif; ?>
<?php wp_reset_query(); ?>

        </div><!-- /.span8 -->

	<div class="span4">
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
Insert text that will display only if you are not using any WordPress widgets in this sidebar.
<?php endif; ?>
</div> <!--/.span4 -->

      </div><!-- /.row -->
<?php get_footer(); ?>