<?php
/*
Template Name: Home Page v2
*/
?>

<?php get_header(); ?>

<?php include (TEMPLATEPATH . '/menu.php'); ?>


<body>



<?php include (TEMPLATEPATH . '/property_slider.php'); ?>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row-fluid">
        <div class="span4">
          <h2 class="marketing_title blue"><a href="#">Buy</a></h2>
          <img class="img-polaroid-big" src="<?php bloginfo('template_directory'); ?>/img/Roses.jpg">
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          <p><a class="btn" href="#">See our homes for sale</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <h2 class="marketing_title orange"><a href="#">Rent</a></h2>
          <img class="img-polaroid-big" src="<?php bloginfo('template_directory'); ?>/img/Living_room.jpg">
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">Find your perfect rental</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <h2 class="marketing_title purple"><a href="#">About us</a></h2>
          <img class="img-polaroid-big" src="<?php bloginfo('template_directory'); ?>/img/sitting_room.jpg">
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">Come meet us</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->

<?php include (TEMPLATEPATH . '/Front_page_blog.php'); ?>

	</div>
<?php get_footer(); ?>