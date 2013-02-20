    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">
    <div class="navbar navbar-inverse navbar-fixed-top">
          <div class="navbar-inner">
	        <div class="container">	
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
	<a class="brand" href="<?php echo site_url(); ?>">TurnerWise</a>
            <div class="nav-collapse collapse">
              <ul class="nav">
		<?php wp_list_pages('title_li='); ?>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Eg <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Mortgages & Solicitors</a></li>
                    <li><a href="#">Cash for property</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Exclusive homes</a></li>
                  </ul>
                </li> 

                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->
	</div>