<div class="a1-element a1-post-carousel--element">
  <div class="a1-element--inner swiper a1-swiper" data-slides_per_view="<?php echo $atts['slides_per_view'] ?>">
    <div class="swiper-wrapper">
      <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="swiper-slide post-item">
          <a href="<?php the_permalink() ?>" class="post-thumb">
            <div class="thumb-layer" style="background-image: url('<?php the_post_thumbnail_url( 'medium' ) ?>')"></div>
          </a>
          <h4 class="post-title">
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
          </h4>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>

    <div class="swiper-button-prev"> </div>
    <div class="swiper-button-next"> </div>
  </div>
</div> <!-- .a1-post-carousel--element -->