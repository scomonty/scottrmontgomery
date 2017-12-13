       <?php  $arr = array (
          "sass" => "style",
          "html5" => "markup",
          "css3" => "style",
          "AJAX" => "scripting",
          "JQuery" => "scripting",
          "JavaScript" => "scripting",
          "bootstrap" => "frameworks",
          "wordpress" => "cms",
          "gulp" => "task-runner",
          "angular" => "scripting",
          "less" => "style",
          "grunt" => "task-runner",
          "jinja2" => "scripting",
          "php" => "scripting",
          "npm" => "task-runner",
          "photoshop" => "image-editing",
          "illustrator" => "image-editing",
          "skeleton" => "frameworks",
          "foundation" => "frameworks"
          );
 ?>
 <div id="tech-panel">
  <div class="container">
    <div class="row">
  <div class="col-xs-12 col-md-7 col-dd-7">
<h2>Technologies we Use</h2>
<h3>Webby D LLC is happy to work with any technology that fits your needs but these are the ones we utilize most.</h3>
</div>
  <div class="col-xs-12">
    <div class="grid">
      <?php foreach ($arr as $key => $value) { ?>
      <div class="element-item tech <?php echo $value ?>" data-category="techs">
        <img class="icon" src="wp-content/themes/scottrmontgomery/images/techs/<?php echo $key ?>.png" alt="<?php echo $key ?>"><div class="tech-exp"><?php echo $key ?></div></div><?php }; ?>
  </div>
</div>
</div>
  </div>
  </div>
