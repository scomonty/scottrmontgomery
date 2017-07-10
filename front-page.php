<?php get_header(); ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
            <?php include 'includes/banner.php'; ?>
    <div class="container-flex">
      <div class="row">
          <?php include 'includes/contact-form.php'; ?>
        </div>
      </div>
          <?php include 'includes/about.php';?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; endif; ?>
              <div class="container-flex">
          <div class="row">
          <?php include 'includes/technologies.php'; ?>
          </div>
        </div>
      </div>


    </div>
     <?php get_footer(); ?>