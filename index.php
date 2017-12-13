<?php get_header(); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text">
                <h1>WEBBY<br />D<span class="llc">llc</span></h1>
                <h2 class="pageTitle">Latest News</h2>
            </div>
            <div class="col-md-6 image">
                <img class="face" src="../wp-content/themes/scottrmontgomery/images/news.png" alt="webby d llc news">
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <img class="cloud" src="../wp-content/themes/scottrmontgomery/images/clouds.png" alt="">
</div>
<div class="container-flex">
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>
