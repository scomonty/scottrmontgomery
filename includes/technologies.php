<?php  $arr = array (
          "sass" => "style",
          "javascript" => "scripting",
          "bootstrap" => "frameworks",
          "wordpress" => "cms",
          "shopify" => "cms",
          "less" => "style",
          "php" => "scripting",
          "photoshop" => "image-editing",
          "hotjar" => "analytics"
          );
 ?>
<div id="tech-panel">
    <div class="container">
        <div class="row">
            <div class="col-md-12 cent">
                <h2 class="techies">Technologies we Use</h2>
                <p>Our websites are built on WordPress or Shopify CMS platforms alongside the Bootstrap framework. Hotjar and Google Analytics are utilized to monitor visitors and where and how they are interacting with your site.</p>
            </div>
                        <div class="col-md-12 cent">
            <?php foreach ($arr as $key => $value) { ?>
            <div class="col-xg-1 col-md-3 col-xs-4 element-item tech <?php echo $value ?>" data-category="techs">
                <img class="icon" src="wp-content/themes/scottrmontgomery/images/techs/<?php echo $key ?>.png" alt="<?php echo $key ?>">
                <div class="tech-exp">
                    <?php echo $key ?>
                </div>
            </div>
            <?php }; ?>
        </div>
        </div>
    </div>
</div>
