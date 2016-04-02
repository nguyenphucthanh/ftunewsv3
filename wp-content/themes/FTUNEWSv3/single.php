<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>


<?php if (have_posts()) : the_post(); ?>

<!-- first look -->
<div class="container-fluid single-bigpic ratio-16-9"
     style="background-image: url( <?php the_post_thumbnail_url(); ?>);">
  <div class="single-table">
    <div class="single-tablecell">
      <div class="single-posthead">
        <div class="single-category">
          <?php
            $category = get_the_category( get_the_ID() );
            echo $category[0]->cat_name;
          ?>
        </div>
        <h2 class="single-title"><?php the_title() ?></h2>
        <div class="single-details">
          by <span class="text-orange"><?php the_author() ?></span> on <?php the_time('F d, Y') ?> at <?php the_time('G:i') ?>
        </div>
      </div>
    </div>
  </div>
</div>

<main class="container container-xs single-main" >
  <div class="row">
    <div class="col-md-2 single-aside margin-top-20px">
      <!-- View count -->
      <div class="border1 single-viewcount">
        <div>Views</div>
        <div style="font-size:20px"><b><?php //view count ?></b></div>
      </div>
      <div style="margin-top:12px;">Share on</div>
      <div class="float-left single-aside-social">
        <div class="border1" style="width:50%; margin: -1px;">
            <img src="<?php echo get_template_directory_uri() ?>/images/btn-aside-facebook.png" alt="">
        </div>
        <div class="border1" style="width:50%; margin:-1px;">
          <img src="<?php echo get_template_directory_uri() ?>/images/btn-aside-twitter.png" alt="">
        </div>
      </div>
    </div>
    <div class="col-md-8 margin-top-20px">
      <div class="single-article">
          <?php the_content('Read the rest of this entry &raquo;'); ?>
      </div>
    </div>
  </div>

  <!-- Related -->
  <div class="single-related">
    <div class="single-related-head">RELATED</div>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8 single-related-body">
        <div class="single-related-slick" >

          <?php
            $tags = get_the_tags(); // array of objects
            if ($tags):
              $tagIDs = array();
              foreach ($tags as $tag) {
                echo $tag->id;
              }
              $args = array(
                'posts_per_page' => 10,
                'tag__in' => $tagIDs,
                'order' => 'DESC',
                'orderby' => 'date',
                'post__not_in' => array(get_the_ID()),
              );
              $queryRelated = new WP_Query($args);
              while ($queryRelated->have_posts()):
                $queryRelated->the_post();
          ?>
          <div>
            <div class="single-related-item-outer">
              <a href="" class="background-size-position single-related-item"
                 style="background-image: url(<?php the_post_thumbnail_url() ?>)">
                <div class="background-dark single-related-item-dark">
                  <div class="single-related-item-inner text-white text-big-bold">
                    <?php the_title() ?>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <?php
              endwhile;
              endif;
          ?>
        </div>
        <div class="row single-related-slick-control">
          <div class="col-xs-6">
            <button class="btn btn-warning related-back">Back</button>
          </div>
          <div class="col-xs-6 text-align-right">
            <button class="btn btn-warning related-next">Next</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Facebook Comment -->
  <div class="single-fbcmt">
  </div>
</main>

<?php else: ?>

  <p>No posts. :(</p>

<?php endif; ?>


</div>

<?php get_footer(); ?>