<?php  $arr = array (
          "sass" => "style",
          "JavaScript" => "scripting",
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
            <div class="col-md-12">
                <h2>Technologies we Use</h2>
                <h3>Webby D LLC is happy to work with any technology that fits your needs but these are the ones we utilize most.</h3>
            </div>
            <?php foreach ($arr as $key => $value) { ?>
            <div class="col-sm-1 col-xs-6 element-item tech <?php echo $value ?>" data-category="techs">
                <img class="icon" src="wp-content/themes/scottrmontgomery/images/techs/<?php echo $key ?>.png" alt="<?php echo $key ?>">
                <div class="tech-exp">
                    <?php echo $key ?>
                </div>
            </div>
            <?php }; ?>
        </div>
    </div>
</div>
