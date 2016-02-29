
<!-- ***********************Recent Blogs************************* -->
<div class="homepage_nav_title blogs">
    <?php if (onepage_get_option('onepage_recent_blog_heading') != '') { ?>
        <h1 class="index_titles"><?php echo stripslashes(onepage_get_option('onepage_recent_blog_heading')); ?></h1>
    <?php } else { ?>
        <h1 class="index_titles"><?php _e('Recent Blogs', 'onepage'); ?></h1>
    <?php } ?>
    <div class="clear"></div>
</div>

<!-- ***Recent blog container starts** -->
<?php if (onepage_get_option('onepage_bodybg') != '') { ?>
    <div class="featured_blog_content default_bg" style="background: url(<?php echo stripslashes(onepage_get_option('onepage_bodybg')); ?>);">
    <?php } else { ?>
        <div class="featured_blog_content default_bg">
        <?php } ?>

        <div class="container_24"><div class="grid_24">
                <!-- Start the Loop. -->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
                        <?php
                        static $count = 0;
                        if ($count == "6") {
                            break;
                        } else {
                            ?>

                            <!--post start-->

                            <?php
                            if (!has_post_thumbnail()) {
                                continue;
                            } else {
                                if (strpos($post->post_content, '[gallery') !== false) {
                                    continue;
                                } else {
                                    ?>
                                    <div class="post">
                                        <div class="post_heading_wrapper">
                                            <div class="postimage_container">
                                                <span class="thumb">
                                                    <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) { ?>
                                                        <a href="<?php the_permalink(); ?>">
                                                            <?php the_post_thumbnail(); ?>
                                                        </a>
                                                        <?php
                                                    }
                                                    ?>
                                                    <span>
                                                        <?php
                                                        // Get the Name of First Category
//Fetching all the categories for the post and displaying first pocket
                                                        the_category(', ');
                                                        ?>
                                                    </span>
                                                </span>
                                                <div class="clear"></div>
                                            </div>
                                            <ul class="post_meta">
                                                <li class="day"><?php echo get_the_time('d') ?></li>
                                                <li class="month"><?php echo get_the_time('M') ?></li>
                                                <li class="year"><?php echo get_the_time('Y') ?></li>
                                                <li class="posted_by"><span><?php _e('by&nbsp;', 'onepage'); ?></span><?php the_author_posts_link(); ?></li>
                                                <li class="post_comment"><?php comments_popup_link('No Comments.', '1 Comment.', '% Comments.'); ?></li>
                                            </ul>
                                            <h1 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                                        </div>
                                        <div class="post_content">
                                            <?php the_excerpt(); ?>

                                            <a class="read-more" href="<?php the_permalink() ?>"><?php echo READ_MORE; ?></a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <!--End Post-->
                                    <?php
                                }
                            }
                            ?>
                            <?php
                            $count++;
                        }
                        ?>
                        <?php
                    endwhile;
                else:
                    ?>

                    <div class="blogs_page_container">
                        <p>
                            <?php echo SORRY_NO_POST_MATCHED_YOUR_CRITERIA; ?>
                        </p>
                    </div>
                <?php endif; ?>
                <!--End Loop-->
            </div></div>
    </div>
    <div class="clear"></div>
    <!-- ***Recent blog container* ends** -->
