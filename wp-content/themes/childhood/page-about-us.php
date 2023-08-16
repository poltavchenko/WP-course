<?php
/*
Template Name: About Us
Template Post Type: page
*/
?>

<?php get_header(); ?>

<main
id="main"
role="main"
>
  <!-- about -->
  <div class="about">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1 col-lg-5 offset-lg-1">
          <!-- <div class="about__img">
            <img src="<?php the_field('section-about_image') ?>" alt="про компанию">
          </div> -->
          <div class="about__img">
            <?php
            $about_image = get_field('section-about_image_2');

            if (!empty($about_image)): ?>
              <img
              src="<?php echo $about_image['url']; ?>"
              alt="<?php echo $about_image['alt']; ?>"
              width="<?php echo $about_image['width']; ?>"
              height="<?php echo $about_image['height']; ?>"
              >
            <?php endif;
            ?>
          </div>
        </div>
        <div
        class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 col-xl-5 offset-xl-1"
        >
          <h1 class="title underlined">
            <?php the_field('section-about_title'); ?>
          </h1>
          <?php
          $about_description = get_field('section-about_description');

          if (!empty($about_description)): ?>
            <div class="about__text rte">
              <?php echo $about_description; ?>
            </div>
          <?php endif; ?>
          <?php
          $about_link = get_field('section-about_link');

          if (!empty($about_link)): ?>
            <a
            href="<?php echo $about_link; ?>"
            class="button"
            >
              <?php the_field('section-about_link-text'); ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>