<?php
/*
Template Name: Main Page content
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
        <div class="span8">
  <?php rewind_posts(); ?>
 
  <?php while (have_posts()) : the_post(); ?>
<h1><?php wp_title(""); ?></h1>
<?php if (is_mobile()) { the_post_thumbnail(array(100,100,true), array('class' => 'img-thumbnail')); } else { the_post_thumbnail(array(300,300,true), array('class' => 'img-thumbnail')); } ?>

<?php the_content(); ?>
  <?php endwhile; ?>

        </div><!-- /.span8 -->

	<div class="span4">
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
Insert text that will display only if you are not using any WordPress widgets in this sidebar.
<?php endif; ?>
</div> <!--/.span4 -->

      </div><!-- /.row -->
<?php get_footer(); ?>