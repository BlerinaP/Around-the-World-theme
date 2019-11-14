<?php get_header(); ?>
<main role="main">
    <section class="upcoming-tours">
        <h2><span>Upcoming Travels</span></h2>
        <?php
            $args = array(
              'post_type' => 'tour',
              'orderby'  => 'menu_order',
              'order' => 'ASC',
              'posts_per_page' => 3
            );
        ?>
        <ul>
            <?php $tours = new WP_Query($args); ?>
            <?php while($tours->have_posts()): $tours->the_post(); ?>
              <li class="grid1-3">
                  <div class="image">
                      <a href="<?php the_permalink();?>">
                          <img class="more" src="<?php echo get_stylesheet_directory_uri(); ?>/img/moreinfo.png">
                      </a>
                      <?php my_responsive_thumbnail(get_the_ID()); ?>
                  </div>
                  <div class="content-tours">
                      <?php
                      $format = 'd F, Y';
                      $date = strtotime(get_field('leaving_date',false,false));
                      $leavingDate = date_i18n($format, $date);

                      $returningDate = strtotime(get_field('returning_date',false,false));
                      $returningDate = date_i18n($format, $returningDate);
                      ?>

                      <div class="date-price clear">
                          <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                          <p class="date"><?php echo $leavingDate . ' - ' . $returningDate ?></p>
                      </div>
                  </div>
              </li>
            <?php endwhile; wp_reset_postdata();?>
        </ul>
    </section>
<?php get_footer(); ?>
