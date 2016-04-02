<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header();

?>



  <!-- category name -->
  <div class="container-fluid background-dark-gray">
    <div class="container text-category-name">
      <?php the_search_query() ?>
    </div>
  </div>

  <!-- main -->
  <main class="container container-xs load-more-container">
    <!-- vertical thumbnails -->
    <?php
    $count = 0;
    while(have_posts() && $count<3):
      the_vertical_thumbnail_row(false);
      $count++;
    endwhile;
    ?>
  </main>


<?php get_footer(); ?>