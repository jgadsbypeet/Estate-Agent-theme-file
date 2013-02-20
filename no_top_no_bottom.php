<?php
/*
Template Name: Plain Page
*/
?>

<?php get_header(); ?>

<?php include (TEMPLATEPATH . '/menu.php'); ?>


<body>

    <!-- Page Content -->
    <!-- ============================================== -->

    <div class="container marketing">

      <div class="row">
  <?php rewind_posts(); ?>
 
  <?php while (have_posts()) : the_post(); ?>
<h1><?php wp_title(""); ?></h1>
<div class="span4">
<?php the_content(); ?>
  <?php endwhile; ?>

        </div><!-- /.span8 -->

	<div class="span4">
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
Insert text that will display only if you are not using any WordPress widgets in this sidebar.
<?php endif; ?>
</div> <!--/.span4 -->

      </div><!-- /.row -->
