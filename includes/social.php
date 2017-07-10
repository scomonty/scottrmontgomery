 <?php  $arr = array (
          "https://www.facebook.com/scott.montgomery.75470" => "facebook", 
          "https://www.linkedin.com/in/srm18135" => "linkedin",
          "https://github.com/scomonty" => "github",
          "https://twitter.com/Scomonty" => "twitter"); 
 ?>
 <div class="soc">
<div class="socialIcons">
<ul>
 <?php foreach ($arr as $key => $value) { ?>
 <li>
        <a href=<?php echo $key ?> target="_blank"><i class="fa fa-<?php echo $value ?>-square" aria-hidden="true"></i><?php }; ?></a></li>
        </ul>

    </div><! -- end socialicons -->
</div>