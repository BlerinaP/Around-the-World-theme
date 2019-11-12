<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post title -->
            <h2><span><?php the_title(); ?></span></h2>
			<!-- /post title -->
            <div class="clear">
                <div class="grid1-3 post-information">
                    <!-- post details -->
                    <span class="date"><strong><?php _e( 'Published: ', 'html5blank' ); ?></strong><?php the_time('F j, Y'); ?></span><br/>
                    <span class="author"><strong><?php _e( 'by: ', 'html5blank' );?></strong><?php the_author_posts_link(); ?></span>
                    <p><strong><?php _e( 'Category: ', 'html5blank');?> </strong><?php the_category(', '); // Separated by commas ?></p>

                    <div class="share-button">
                        <p>Share this with your friends:</p>
                      <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5dca90a955d3baab"></script>
                       <div class="addthis_inline_share_toolbox_bcs1"></div>

                    </div>

                </div>
                <div class="grid2-3">
                    <?php the_content();?>
                    <?php edit_post_link(); // Always handy to have Edit Post Links available ?>
                    <?php comments_template(); ?>
                </div>
            </div>



		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>


<?php get_footer(); ?>
