<?php
/*
Template Name: Featured Properties Single Post
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
 
        </div><!-- /.span8 -->

	<div class="span4">
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
Insert text that will display only if you are not using any WordPress widgets in this sidebar.
<?php endif; ?>
</div> <!--/.span4 -->

      </div><!-- /.row -->
<?php get_footer(); ?>