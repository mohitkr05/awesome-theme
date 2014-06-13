 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo of_get_option('awesome_featured_image_a'); ?>" width="100%" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p><?php echo of_get_option('awesome_featured_content_a'); ?></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo of_get_option('awesome_featured_image_b'); ?>" width="100%" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p><?php echo of_get_option('awesome_featured_content_b'); ?></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo of_get_option('awesome_featured_image_c'); ?>"  width="100%" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p><?php echo of_get_option('awesome_featured_content_c'); ?></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
