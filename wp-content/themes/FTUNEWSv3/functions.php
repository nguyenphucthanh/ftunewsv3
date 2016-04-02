<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

// Custom HTML5 Comment Markup
function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li>
     <article <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
       <header class="comment-author vcard">
          <?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
          <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
          <time><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a></time>
          <?php edit_comment_link(__('(Edit)'),'  ','') ?>
       </header>
       <?php if ($comment->comment_approved == '0') : ?>
          <em><?php _e('Your comment is awaiting moderation.') ?></em>
          <br />
       <?php endif; ?>

       <?php comment_text() ?>

       <nav>
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
       </nav>
     </article>
    <!-- </li> is added by wordpress automatically -->
<?php
}

automatic_feed_links();

// Widgetized Sidebar HTML5 Markup
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<section>',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

// Custom Functions for CSS/Javascript Versioning
$GLOBALS["TEMPLATE_URL"] = get_bloginfo('template_url')."/";
$GLOBALS["TEMPLATE_RELATIVE_URL"] = wp_make_link_relative($GLOBALS["TEMPLATE_URL"]);

// Add ?v=[last modified time] to style sheets
function versioned_stylesheet($relative_url, $add_attributes=""){
  echo '<link rel="stylesheet" href="'.versioned_resource($relative_url).'" '.$add_attributes.'>'."\n";
}

// Add ?v=[last modified time] to javascripts
function versioned_javascript($relative_url, $add_attributes=""){
  echo '<script src="'.versioned_resource($relative_url).'" '.$add_attributes.'></script>'."\n";
}

// Add ?v=[last modified time] to a file url
function versioned_resource($relative_url){
  $file = $_SERVER["DOCUMENT_ROOT"].$relative_url;
  $file_version = "";

  if(file_exists($file)) {
    $file_version = "?v=".filemtime($file);
  }

  return $relative_url.$file_version;
}
// Enable post thumbnail - featured image
add_theme_support( 'post-thumbnails' );

// The gridtop item: ratio 1:1
function the_gridtop_item() {
    if (have_posts()):
        the_post();
        ?>
       <div class="col-lg-15 col-sm-3 no-padding">
           <a href="<?php the_permalink() ?>" class="display-block background-size-position ratio-1-1"
              style="background-image: url(<?php the_post_thumbnail_url('large') ?>);">
               <div class="background-dark index-gridtop-item-dark">
                   <div class="index-gridtop-item-inner">
                       <div class="index-gridtop-item-table">
                           <div class="index-gridtop-item-cell text-white">
                               <div class="index-gridtop-item-category">
                                   <?php
                                       $category = get_the_category( get_the_ID() );
                                       echo $category[0]->cat_name;
                                   ?>
                               </div>
                               <div class="text-big-bold"><?php the_title() ?></div>
                           </div>
                       </div>
                   </div>
               </div>
           </a>
       </div>
       <?php
    endif;
}

// The gridtop item: ratio-2-1
function the_gridtop_item_2() {
    if (have_posts()):
        the_post();
        ?>
        <div class="col-lg-25 col-sm-6 no-padding">
            <a href="#" class="display-block background-size-position ratio-2-1"
               style="background-image: url(<?php the_post_thumbnail_url('large') ?>);">
                <div class="background-dark index-gridtop-item-dark">
                    <div class="index-gridtop-item-inner">
                        <div class="index-gridtop-item-table">
                            <div class="index-gridtop-item-cell text-white">
                                <div class="index-gridtop-item-category">
                                    <?php
                                    $category = get_the_category( get_the_ID() );
                                    echo $category[0]->cat_name;
                                    ?>
                                </div>
                                <div class="text-big-bold"><?php the_title() ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php
    endif;
}

// The vertical thumbnail
function the_vertical_thumbnail($showCategoryAndComment = true) {
    if (have_posts()):
        the_post();
        ?>
            <div class="col-sm-4 one-post" >
                <div>
                    <?php if ($showCategoryAndComment): ?>
                    <div class="row">
                        <div class="col-xs-6 text-orange text-uppercase"><?php echo get_the_category(get_the_ID())[0]->cat_name ?></div>
                        <div class="col-xs-6 text-align-right"><?php ?> COMMENT</div>
                    </div>
                    <?php endif; ?>
                    <a href="<?php the_permalink() ?>" class="display-block background-size-position ratio-16-9"
                       style="background-image: url(<?php echo get_the_post_thumbnail_url('large') ?>)"></a>
                    <div>
                        <a href="<?php the_permalink() ?>"><b><?php the_title() ?></b></a>
                        <p>
                            by <span class="text-orange"><?php the_author() ?></span>, <?php the_time('d/m/Y') ?>
                        </p>
                        <p>
                            <?php the_excerpt() ?>
                        </p>
                    </div>
                </div>
            </div>
       <?php
    endif;
}
// The vertical thumbnail row
function the_vertical_thumbnail_row($showCategoryAndContent = true) {
    ?>
    <div class="row margin-top-20px one-post-row">
    <?php
        $count = 0;
        while(have_posts() && $count<3):
            the_vertical_thumbnail($showCategoryAndContent);
            $count ++;
            endwhile;
    ?>
    </div>
    <?php
}

// The horizontal thumbnail
function the_horizontal_thumbnail() {
    if (have_posts()):
        the_post();
        ?>
            <div>
                <div class="row">
                  <div class="col-xs-6 text-orange text-uppercase"><?php echo get_the_category()[0]->cat_name ?></div>
                  <div class="col-xs-6 text-align-right"><?php ?> COMMENTS</div>
                </div>
                <div class="row margin-top-10px">
                  <div class="col-sm-6">
                    <a href="<?php the_permalink() ?>"
                       class="display-block background-size-position ratio-16-9"
                       style="background-image: url(<?php the_post_thumbnail_url('large')?>)">
                    </a>
                  </div>
                  <div class="col-sm-6">
                    <div>
                      <a href="<?php the_permalink() ?>" class="text-big-bold"><?php the_title() ?></a>
                      <div><small>by <span class="text-orange"><?php the_author() ?></span>, <?php the_time('d/m/Y') ?></small></div>
                      <div>
                          <?php the_excerpt() ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
       <?php
   endif;
}

// The banner news
function the_banner_post() {
    if (have_posts()):
        the_post();
        ?>
           <div class="background-size-position ratio-3-1"
                style="background-image: url(<?php the_post_thumbnail_url() ?>)">
               <div class="mask gradient-bottom-black"></div>
               <div class="text-cover-bottom-left text-white">
                   <div class="text-big-bold"><?php the_title() ?></div>
                   <div>by <span class="text-orange"><?php the_author() ?></span>, <?php the_time('d/m/Y') ?></div>
               </div>
           </div>
        <?php
    endif;
}