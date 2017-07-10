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
  <div class="col-xs-12 col-sm-5">
<div class="cta">Technologies I Use</div>
<div class="ctanext">I can work with just about any technology but these are the ones I use most.</div>
</div>
  <div class="col-xs-12 col-sm-7 button-group filters-button-group">
    <ul>
   <li data-filter="*" class="tech-sort">Show All</li>
    <li data-filter=".image-editing" class="tech-sort">Image Editing</li>
    <li data-filter=".markup" class="tech-sort">Markup</li>
    <li data-filter=".cms" class="tech-sort">CMS</li>
    <li data-filter=".style" class="tech-sort">Style</li>
    <li data-filter=".frameworks" class="tech-sort">Frameworks</li>
    <li data-filter=".scripting" class="tech-sort">Scripting</li>
    <li data-filter=".task-runner" class="tech-sort">Task Runners</li>
    </ul>
  </div>
  <div style="clear:both"></div>
  <div class="col-md-12">
    <div class="grid">
      <?php foreach ($arr as $key => $value) { ?>
      <div class="element-item tech <?php echo $value ?>" data-category="techs">
        <img class="icon" src="wp-content/themes/scottrmontgomery/images/techs/<?php echo $key ?>.png" alt="<?php echo $key ?>"><div class="tech-exp"><?php echo $key ?></div></div><?php }; ?>
  </div>
</div>
  </div>