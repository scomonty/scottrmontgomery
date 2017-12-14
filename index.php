<?php get_header(); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text">
                <div class="banner-title">WEBBY
                    <br />D<span class="llc">llc</span></div>
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
<div id="news">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Here you will find the latest news coming out of Webby D LLC.</h2>
                <h3>In addition to blog entries from our founder, Scott Montgomery.</h3>
            </div>
            <div class="col-md-4">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
