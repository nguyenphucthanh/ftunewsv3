<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header();

$args = array (
  'posts_per_page'=> 24,
  'order' => 'DESC',
  'orderby' => 'date'
);
query_posts($args);

?>


<!-- first look/ grid top -->
<div class="container-fluid container-xs">
  <div class="row">

    <?php the_gridtop_item() ?>
    <?php the_gridtop_item_2() ?>
    <?php the_gridtop_item() ?>
    <?php the_gridtop_item() ?>
    <?php the_gridtop_item() ?>
    <?php the_gridtop_item() ?>
    <?php the_gridtop_item() ?>

    <div class="col-lg-15 col-sm-4 no-padding">
      <div href="#" class="ratio-1-1">
        <div class="index-gridtop-item-dark" style="background-color:red;">
          <div class="index-gridtop-item-inner">
            <div class="index-gridtop-item-table">
              <div class="index-gridtop-item-cell text-white">
                <div class="index-gridtop-editor-choice">EDITOR'S CHOICE</div>
                <p>
                  <u>CẢM THỨC</u><br>
                  <b>Working far away in European Fields</b>
                </p>
                <p>
                  <u>CẢM THỨC</u><br>
                  <b>Working far away in European Fields</b>
                </p>
                <p>
                  <u>CẢM THỨC</u><br>
                  <b>Working far away in European Fields</b>
                </p>
                <p>
                  <u>CẢM THỨC</u><br>
                  <b>Working far away in European Fields</b>
                </p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php the_gridtop_item() ?>

  </div>
</div>

<!-- MAIN -->
<main class="container container-xs load-more-container">
  <!-- SECTION 1: -->
  <?php the_vertical_thumbnail_row() ?>

  <!-- SECTION 2: Videos -->
  <div class="row section2">
  </div>

  <!-- SECTION 3: 3 horizon, shortnews -->
  <div class="row section3">
    <div class="col-sm-8">
      <?php the_horizontal_thumbnail()?>
      <?php the_horizontal_thumbnail()?>
      <?php the_horizontal_thumbnail()?>
    </div>
    <div class="col-sm-4">
    </div>
  </div>

  <div class="section4">
    <?php the_banner_post()?>
  </div>

  <!-- SECTION 5: 3 vertical -->
  <?php the_vertical_thumbnail_row() ?>

  <!-- SECTION 6: 3 horizon -->
  <div class="row section6">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-8">
      <?php the_horizontal_thumbnail() ?>
      <?php the_horizontal_thumbnail() ?>
      <?php the_horizontal_thumbnail() ?>
    </div>
  </div>
  <!-- SECTION 7: 3 vertical, pattern for load more -->
  <?php the_vertical_thumbnail_row() ?>


</main>

<?php get_footer(); ?>


