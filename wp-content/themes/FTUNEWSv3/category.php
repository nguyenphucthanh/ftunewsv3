<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header();?>



<!-- category name -->
<div class="container-fluid background-dark-gray">
    <div class="container text-category-name">
        <?php single_cat_title() ?>
    </div>
</div>

<!-- main -->
<main class="container">

    <?php $catID = get_cat_ID(single_cat_title('',false)) ?>

    <!-- full width thumbnail -->
    <?php if (have_posts()): the_post() ?>
    <div class="row">
        <div class="col-md-35 margin-top-20px">
            <a href="" class="display-block background-size-position category-thumbnail-fullwidth-image"
               style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)">
            </a>
        </div>
        <div class="col-md-25 margin-top-20px">
            <div>
                <a href="<?php the_permalink()?>" class="text-big-bold">
                    <?php the_title() ?>
                </a>
                <p>
                    <small>by <span class="text-orange"><?php the_author() ?></span>, <?php the_time('d/m/Y')?></small>
                </p>
                <div class="category-thumbnail-fullwidth-content">
                    <?php the_excerpt() ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif ?>

    <!-- vertical thumbnails -->
    <div class="row  margin-top-20px">

        <?php while (have_posts()): the_post()?>
        <!-- One post -->
        <div class="col-md-4">
            <div class="margin-top-20px">
                <a href="" class="display-block background-size-position category-thumbnail-vertical-image"
                   style="background-image: url(<?php the_post_thumbnail_url('large') ?>)"></a>
                <a href="" class="display-block text-big-bold margin-top-10px">
                    <?php the_title() ?>
                </a>
                <p>
                    <small>by <span class="text-orange"><?php the_author() ?></span>, <?php the_time('d-m-Y') ?></small>
                </p>
                <div class="category-thumbnail-vertical-content">
                    <?php the_content() ?>
                </div>
            </div>
        </div>
        <?php endwhile;  ?>
    </div>

    <!-- load more button -->
    <div class="btn btn-load-more margin-top-20px">LOAD MORE ARTICLES</div>
</main>



<?php get_footer(); ?>