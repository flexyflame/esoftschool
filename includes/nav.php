
<!--Include Navigation | Menu--> 

<nav class="top-bar topbar-responsive">
  <div class="top-bar-title">
    <span data-responsive-toggle="topbar-responsive" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle></button>
    </span>
    <a class="topbar-responsive-logo" href="<?php echo $SESSION->Generate_Link("index", ""); ?>"><strong>eSoftSchool System</strong></a>
  </div>
  <div id="topbar-responsive" class="topbar-responsive-links">
    <div class="top-bar-right">
      <ul class="menu simple vertical medium-horizontal">
        <li><a style="color: aliceblue;" href="<?php echo $SESSION->Generate_Link("features", ""); ?>">Features**</a></li>
        <li><a style="color: aliceblue;" href="/index.php#benefits">Benefits</a></li>
        <li><a style="color: aliceblue;" href="/index.php#services">Services</a></li>
        <li><a style="color: aliceblue;" href="#">Support</a></li>
        <li><a style="color: aliceblue;" href="<?php echo $SESSION->Generate_Link("about", ""); ?>">About Us</a></li>
        <?php  
          echo  "<li><a href=\"" . $SESSION->Generate_Link("index", "aktion=logout") . "\"  class=\"button hollow topbar-responsive-button\" name=\"btn_logout\" id=\"btn_logout\">Logout</a></li>";  
          echo  "<li><a href=\"" . $SESSION->Generate_Link("#", "") . "\"  title=\"Info...!!!\" style=\"font-size: x-large;\"><i class=\"fa fa-info-circle\"></i></a></li>";
        ?>
      </ul>
    </div>
  </div>
</nav>

