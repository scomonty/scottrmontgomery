<?php get_header(); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 text">
                <div class="banner-title">WEBBY
                    <br />D<span class="llc">llc</span></div>
                <h2 class="pageTitle">What we've<br />been up to<br />lately</h2>
            </div>
            <div class="col-sm-6 image">
                <img class="face" src="../wp-content/themes/scottrmontgomery/images/news.png" alt="webby d llc news">
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <img class="cloud" src="../wp-content/themes/scottrmontgomery/images/clouds.png" alt="">
</div>
<div id="news">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 cent col-sm-offset-1">
                <p class="liner">extra. extra. read all about it!</p>
                <h2>Check in often for the latest news coming out of Webby D LLC</h2>
            </div>
        </div>
    </div>
</div>
<div id="blog">
            <div class="col-md-4">
                    <div class="container">
        <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php endwhile; else : ?>
    <p><?php esc_html_e( 'doesnt look like weve been up to much so far' ); ?></p>
<?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
