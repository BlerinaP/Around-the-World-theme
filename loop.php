<?php if (have_posts()):
$i = 0;
while (have_posts()) : the_post(); ?>

    <?php if($i == 0){ ?>
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
         <div class="photo">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('blog-images',array('class' => 'polaroid'));?>
			</a>
         </div>
		<?php endif; ?>
		<!-- /post thumbnail -->
        <div class="clear">
            <div class="grid1-3 post-information">
		<!-- post details -->
                <span class="date"><strong><?php _e( 'Published: ', 'html5blank' ); ?></strong><?php the_time('F j, Y'); ?></span><br/>
                <span class="author"><strong><?php _e( 'by: ', 'html5blank' );?></strong><?php the_author_posts_link(); ?></span>
                <p><strong><?php _e( 'Category: ', 'html5blank');?> </strong><?php the_category(', '); // Separated by commas ?></p>

		<!-- /post details -->
            </div>
            <div class="grid2-3">
            <!-- /post title -->
                <h3>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h3>
		        <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
            </div><!--grid-->
        </div><!--clear-->

		<?php //edit_post_link(); ?>

	</article>
	<!-- /article -->
    <?php } else { ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="clear">
                <div class="grid1-3">
                    <!-- post thumbnail -->
                    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                    <div class="photo">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail('medium',array('class' => 'polaroid'));?>
                        </a>
                    </div>
                    <?php endif; ?>
                    <!-- /post thumbnail -->
                </div>
                <div class="grid2-3">
                    <!-- /post title -->
                    <h3>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
                </div><!--grid-->
            </div><!--clear-->

           <?php //edit_post_link(); ?>
        </article>
    <?php } ?>

<?php $i++ ?>
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
