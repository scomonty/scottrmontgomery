
<?php get_header(); ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
            <?php include 'includes/banner.php'; ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; endif; ?>
          <?php include 'includes/circle.php'; ?>
          <?php include 'includes/technologies.php'; ?>
      </div>
    </div>
     <?php get_footer(); ?>
