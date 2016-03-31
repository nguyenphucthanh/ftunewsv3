<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
  <!-- footer -->
  <footer class="container container-xs">
    <div class="text-white background-black">
      <div class="row">
        <div class="col-md-3">
          <h1 class="footer-ftunews">FTUNEWS</h1>
          <div class="input-group">
            <input type="text" class="form-control no-border-radius" placeholder="Search for article & more">
                                  <span class="input-group-btn">
                                      <button class="btn btn-default no-border-radius" type="button" >Go!</button>
                                  </span>
          </div><!-- /input-group -->
        </div>
        <div class="col-md-3 margin-top-20px">
          <a class="text-bold-orange" href="">điểm tin</a>
          <a href="">bản tin sinh viên</a>
          <a href="">tuyển sinh</a>
          <br>
          <a class="text-bold-orange" href="">chuyển động ftu2</a>
          <a href="">FTUCharm 2016</a>
          <a href="">người trẻ</a>
          <a href="">FTUShine</a>
          <br>
          <a class="text-bold-orange" href="">phóng sự</a>
          <a href="">phóng sự ảnh</a>
        </div>
        <div class="col-md-3 margin-top-20px">
          <a class="text-bold-orange" href="">hỗ trợ sinh viên</a>
          <a href="">học bổng</a>
          <a href="">nhà trọ</a>
          <a href="">việc làm</a>
          <br>
          <a class="text-bold-orange" href="">cảm thức</a>
          <a href="">cafe thư</a>
          <br>
          <a class="text-bold-orange" href="">vitamin biz</a>
          <a href="">câu chuyện kinh doanh</a>
          <a href="">menu giải trí</a>
        </div>
        <div class="col-md-3 margin-top-20px">
          <a href="">contact us</a>
          <a href="">advertise</a>
          <a href="">privacy</a>
          <a href="">terms of service</a>
          <a href="">site map</a>
          <a href="">help</a>
          <a href="">subscription</a>
        </div>
      </div>
      <div class="footer-copy">
        &copy; 2016 FTUNEWS
      </div>
    </div>
  </footer>


  <!-- Javascript at the bottom for fast page loading -->
  <script src="<?php echo get_template_directory_uri(); ?>/html5-boilerplate/js/jquery-1.12.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/html5-boilerplate/js/bootstrap.min.js"></script>

  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo $GLOBALS["TEMPLATE_RELATIVE_URL"] ?>js/vendor/jquery-1.8.0.min.js"><\/script>')</script>


  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/plugins.js") ?>
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/main.js") ?>

  <!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet
       change the UA-XXXXX-X to be your site's ID -->
  <!-- WordPress.com does not allow Google Analytics code to be built into themes they host. 
       Add this section from HTML Boilerplate manually (html5-boilerplate/index.html), or use a Google Analytics WordPress Plugin-->
	   
  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
			   
  <?php wp_footer(); ?>

  <script src="<?php echo get_template_directory_uri(); ?>/html5-boilerplate/slick/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/html5-boilerplate/js/ftunews.js"></script>

</body>
</html>
