<?php 
/*
Template Name: Игрушки для развития
Template Post Type: post, edu_toys
*/
?>

<?php
get_header();
?>

<main
id="main"
role="main"
>
  <?php
  while (have_posts()):
    the_post();

    get_template_part('template-parts/content', get_post_type());

  endwhile; // End of the loop.
  ?>

  <!-- You may also like -->
  <div class="container toys">
    <h2 class="subtitle">Другие развивающие игрушки</h2>
    <div class="toys__wrapper">

      <?php
      $soft_toys_posts = get_posts(
        array(
          'numberposts' => 2,
          'category_name' => 'education_toys',
          'orderby' => 'date',
          'order' => 'ASC',
          'post_type' => 'post',
          'suppress_filters' => true,
        )
      );

      global $post;

      foreach ($soft_toys_posts as $post) {
        setup_postdata($post);
        ?>
        <div
        class="toys__item"
        style="background-image: url(
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail_url();
            } else {
              echo get_template_directory_uri() . '/assets/img/not-found.jpg';
            }
            ?>)"
        >
          <div class="toys__item-info">
            <div class="toys__item-title">
              <?php the_title(); ?>
            </div>
            <div class="toys__item-descr">
              <?php the_field('toys_description'); ?>
            </div>
            <a href="<?php echo get_permalink(); ?>" class="minibutton toys__trigger">Подробнее</a>
          </div>
        </div>
        <?php
      }

      wp_reset_postdata();
      ?>
    </div>
  </div>

</main><!-- #main -->

<?php
get_footer();