<?php
/*
Template Name: Our Team
Template Post Type: page
*/
?>

<?php get_header(); ?>

<main
id="main"
role="main"
>
  <div class="specialists">
    <div class="container">
      <div class="title">
        <?php the_field('section-specialists_title'); ?>
      </div>
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <?php
          $section_specialists_image = get_field('section-specialists_image');

          if (!empty($section_specialists_image)): ?>
            <img
            src="<?php echo $section_specialists_image['url']; ?>"
            alt="<?php echo $section_specialists_image['alt']; ?>"
            width="<?php echo $section_specialists_image['width']; ?>"
            class="specialists__img"
            height="<?php echo $section_specialists_image['height']; ?>"
            >
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>