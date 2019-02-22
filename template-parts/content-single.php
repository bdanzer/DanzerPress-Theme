<div id="primary" class="danzerpress-container-fw" style="padding-top: 40px; background: white;">
    <main id="main" class="danzerpress-wrap">
        <div class="danzerpress-flex-row danzerpress-row-fix">
            <div class="danzerpress-two-thirds">
                
                <?php if (get_the_post_thumbnail()) { ?>
                    <div class="danzerpress-blog-thumbnail">
                        <div class="danzerpress-image-wrap">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    </div>
                <?php } ?>

                <div class="danzerpress-box danzerpress-white" style="padding: 20px 0;">
                    <?php
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content', get_post_type() );
                        Loader::render('content-post-pagination.php');
                    endwhile; // End of the loop.
                    ?>
                </div>

            </div>
            <div id="" class="danzerpress-one-third">
                <div class="danzerpress-box">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

 <?php 
// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) : ?>
    <div class="danzerpress-comments">	
        <div class="danzerpress-wrap" style="max-width: 900px;">
            <?php comments_template(); ?>
        </div>
    </div>
<?php endif; ?>