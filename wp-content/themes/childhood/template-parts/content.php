<article
id="post-<?php the_ID(); ?>"
<?php post_class(); ?>
>
  <div class="container py-5">
    <?php
    if (is_singular()):
      the_title('<h1 class="entry-title subtitle toys">', '</h1>');
    else:
      the_title('<h2 class="entry-title subtitle toys"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
    endif;
    ?>

    <div class="entry-content rte">
      <?php
      the_content(
        sprintf(
          wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'mir'),
            array(
              'span' => array(
                'class' => array(),
              ),
            )
          ),
          wp_kses_post(get_the_title())
        )
      );

      wp_link_pages(
        array(
          'before' => '<div class="page-links">' . esc_html__('Pages:', 'mir'),
          'after' => '</div>',
        )
      );
      ?>
    </div><!-- .entry-content -->
  </div>
</article><!-- #post-<?php the_ID(); ?> -->