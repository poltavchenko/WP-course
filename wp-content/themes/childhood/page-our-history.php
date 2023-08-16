<?php
/*
Template Name: Our History
Template Post Type: page
*/
?>

<?php get_header(); ?>

<main
id="main"
role="main"
>
  <section class="aboutus">
    <div class="container">
      <h1 class="title">
        <?php the_field('history_section_title'); ?>
      </h1>
      <div class="row">
        <div class="col-lg-6">
          <div class="subtitle">
            <?php the_field('image_with_text_title'); ?>
          </div>
          <?php
          $image_with_text_description_1 = get_field('image_with_text_description');

          if (!empty($image_with_text_description_1)): ?>
            <div class="aboutus__text rte">
              <?php echo $image_with_text_description_1; ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="col-lg-6">
          <img
          class="aboutus__img"
          src="<?php echo bloginfo('template_url'); ?>/assets/img/about_1.jpg"
          alt="мир детства"
          >
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <img
          class="aboutus__img"
          src="<?php echo bloginfo('template_url'); ?>/assets/img/about_2.jpg"
          alt="мир детства"
          >
        </div>
        <div class="col-lg-6">
          <div class="subtitle">
            <?php the_field('image_with_text_title_2'); ?>
          </div>
          <?php
          $image_with_text_description_2 = get_field('image_with_text_description_2');

          if (!empty($image_with_text_description_2)): ?>
            <div class="aboutus__text rte">
              <?php echo $image_with_text_description_2; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="subtitle">
            <?php the_field('image_with_text_title_3'); ?>
          </div>
          <?php
          $image_with_text_description_3 = get_field('image_with_text_description_3');

          if (!empty($image_with_text_description_3)): ?>
            <div class="aboutus__text rte">
              <?php echo $image_with_text_description_3; ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="col-lg-6">
          <img
          class="aboutus__img"
          src="<?php echo bloginfo('template_url'); ?>/assets/img/about_3.jpg"
          alt="мир детства"
          >
        </div>
      </div>

    </div>
  </section>
</main>

<?php get_footer(); ?>