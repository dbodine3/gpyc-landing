<?php
/**
 * Template Name: Landing Page - Full / No Header
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; ?>
