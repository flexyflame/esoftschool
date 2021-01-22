<script>
    history.pushState(null, null, null);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, null);
    });
</script>


<!--Include Header**Nice WORK DERRICK-->
<?php 
/*require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/output_functions.php");  
Student_Export_XLS('AA');*/


 //require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/functions.php");
  $path = $_SERVER['DOCUMENT_ROOT'];
  $header = $path . "/includes/header.php";
  include ($header);

  $nav = $path . "/includes/nav.php";
  include ($nav);
?>

<!-- Navigation 
<div class="title-bar" data-responsive-toggle="realEstateMenu" data-hide-for="small">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="realEstateMenu" style="background-color: #2c3840; color: cornflowerblue;">
  <div class="top-bar-left">
    <ul class="menu" style="background-color: transparent;">
      <li class="menu-text"><a style="padding: 0px; text-align: center; color: #c7c7c7;" href="<?php $SESSION->Generate_Link("index", "")?>">eSoftSchool System<br><span style="font-size: 11px; font-weight: 300; font-style: italic;">School Admin Anytime, Anywhere</span></a></li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu" style="background-color: transparent;">
      <li><a style="color: aliceblue;" href="#">Features</a></li>
      <li><a style="color: aliceblue;" href="/index.php#benefits">Benefits</a></li>
      <li><a style="color: aliceblue;" href="/index.php#services">Services</a></li>
      <li><a style="color: aliceblue;" href="#">Support</a></li>
      <li><a style="color: aliceblue;" href="<?php echo $SESSION->Generate_Link("about", ""); ?>">About Us</a></li>
    </ul>
  </div>
</div>-->
<!-- /Navigation 

<nav class="top-bar topbar-responsive">
  <div class="top-bar-title">
    <span data-responsive-toggle="topbar-responsive" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle></button>
    </span>
    <a class="topbar-responsive-logo" href="<?php $SESSION->Generate_Link("index", "")?>"><strong>eSoftSchool System</strong></a>
  </div>
  <div id="topbar-responsive" class="topbar-responsive-links">
    <div class="top-bar-right">
      <ul class="menu simple vertical medium-horizontal">
        <li><a style="color: aliceblue;" href="#">Features</a></li>
      <li><a style="color: aliceblue;" href="/index.php#benefits">Benefits</a></li>
      <li><a style="color: aliceblue;" href="/index.php#services">Services</a></li>
      <li><a style="color: aliceblue;" href="#">Support</a></li>
      <li><a style="color: aliceblue;" href="<?php echo $SESSION->Generate_Link("about", ""); ?>">About Us</a></li>
      <li>
        <button type="button" class="button hollow topbar-responsive-button">Logout</button>
      </li>

      <li>
      <?php  
        /*echo  "  <a href=\"" . $SESSION->Generate_Link("index", "aktion=logout") . "\" class=\"button hollow topbar-responsive-button\">Logout</a>";
        echo  "  <a href=\"" . $SESSION->Generate_Link("#", "") . "\" height=\"30\" width=\"30\" alt=\"Info...!!!\"><i class=\"fa fa-info-circle\"></i></a>";*/
      ?>
      </li>
      </ul>
    </div>
  </div>
</nav>-->







<br>
<article>
  <div class="row">

    <div class="show-for-small-only small-12 columns" style="text-align: -webkit-center;">
      <div style="box-shadow: 0 0 4px 3px rgba(204,25,25,.26); max-width: 50%;">
        <img src="/images/logo_img.png" alt="picture of space">
      </div>
    </div>
    

    <div class="small-12 medium-6 large-6 columns">
      <h1 class="hero-heading" style="text-align: left;">Welcome to <span class="pink-h">eSoftSchool</span></h1>
      <p class="subheader">The SoftSchool System is the integrated school management system for the Primary, Junior High School (JHS) and Senior High School (SHS) that wants to be innovative and competitive in this new millennium.</p>
      <div class="button-group-option" style="margin-top: 1.5rem;" data-grouptype="OR">
        <a href="#" class="button success radius" style="color: #ffffff;">Take a Tour</a>
        <a href="#" class="button primary radius" style="color: #ffffff;">Start a free trial</a>
      </div>
      <?php
        if (isset($_SESSION['error_type'])) {
          if ($_SESSION['error_type'] == 'login_success') {
            echo $UTIL->Print_Notification ('System Login successful!', 'success');
          } elseif ($_SESSION['error_type'] == 'login_error') {
            echo $UTIL->Print_Notification ('Login Failed. Check Username and Password', 'alert');
          } elseif ($_SESSION['error_type'] == 'logout_success') {
            echo $UTIL->Print_Notification ('Logout successful!', 'primary');
          } elseif ($_SESSION['error_type'] == 'school_code_success') {
            echo $UTIL->Print_Notification ('School access successful!', 'primary');
          } elseif ($_SESSION['error_type'] == 'school_code_error') {
            echo $UTIL->Print_Notification ('Invalid School Code. Please inform your supervisor!', 'alert');
          }
        } 
      ?>
    </div>

    <div class="show-for-large small-12 medium-6 large-3 columns" style="box-shadow: 0 0 4px 3px rgba(204,25,25,.26);">
      <img src="/images/logo_img.png" alt="picture of space">
    </div>

    <div class="small-12 medium-6 large-3 columns">
      <div class="school-code-cover" style="height: 100%; padding: 1rem; box-shadow: 0 0 4px 3px rgb(25 80 204 / 26%); background: azure;">
        
        <?php 
          if ($_SESSION['school_access'] == FALSE) {
            echo    "<form action=" . $SESSION->Generate_Link("index", "") . " id=\"form_school_access\" name=\"form_school_access\" method=\"GET\" >";
            echo    "<div class=\"row\">";
            echo    "  <div class=\"small-12 columns\" style=\"padding-top: 30px;\">";
            echo    "    <label>Please Enter Your School Code<input type=\"text\" id=\"text_school_code\" name=\"text_school_code\" placeholder=\"School Code\"></label>";
            echo    "    <button type=\"submit\" class=\"button\" style=\"width: 100%;\">Access School Log In!</button>";
            echo    "    <input name=\"aktion\" type=\"hidden\" id=\"aktion\" value=\"school_code_check\" />";
            echo    "  </div>";
            echo    "</div>";
            echo    "</form>";

          } else {
            
            if ($_SESSION['login_access'] == FALSE) {
                echo    "<form action=" . $SESSION->Generate_Link("index", "") . " id=\"form_login_access\" name=\"form_login_access\" method=\"GET\" >";
                echo    "<div class=\"row\">";
                echo    "  <div class=\"small-12 columns\" style=\"padding-top: 0px;\">";
                echo    "    <label>Username<input type=\"text\" id=\"text_username\" name=\"text_username\" placeholder=\"Username\"></label>";
                echo    "    <label>Password<input type=\"text\" id=\"text_password\" name=\"text_password\" placeholder=\"Password\"></label>";
                echo    "    <button type=\"submit\" class=\"button\" style=\"width: 100%;\">System Log In</button>";
                echo    "    <input name=\"aktion\" type=\"hidden\" id=\"aktion\" value=\"login\" />";
                echo    "    <p style=\"font-size: small;\"><a href=\"" . $SESSION->Generate_Link("#", "") . "\">Forgot username? </a><a href=\"" . $SESSION->Generate_Link("index", "aktion=logout") . "\"> Back</a></p>";

                echo    "  </div>";
                echo    "</div>";
                echo    "</form>";
            } else {

                echo    "<div class=\"row\">";
                echo    "  <div class=\"small-12 columns\" style=\"padding-top: 30px;\">";
                echo    "    <strong style=\"font-size: x-large; font-family: -webkit-pictograph,'Roboto', cursive; font-style: oblique;\">Welcome</strong>";
                echo    "    <p style=\"font-size: medium;\">" . $_SESSION['fullname'] . "</p>";
                echo    "  </div>";

                echo    "  <div class=\"small-12 columns\" style=\"padding-top: 30px;\">";
                echo    "     <a style=\"font-size: medium; font-weight: 600; padding: 10px 10px; float: left;\" href=\"" . $SESSION->Generate_Link("index", "aktion=logout") . "\" class=\"hollow button alert\">Logout <i style=\"font-size: larger; color: #ffae00;\" class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a>";
                echo    "     <a style=\"font-size: medium; font-weight: 600; padding: 10px 10px; float: right;\" href=\"" . $SESSION->Generate_Link("dashboard", "") . "\" class=\"hollow button success\">Dashboard <i style=\"font-size: larger; color: cadetblue;\" class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a>";
                echo    "  </div>";

                echo    "</div>";
            }

          }


        ?>

      </div>
    </div>

  </div>

  <div class="row column">
    <hr>
  </div>

  <section id="marketing" style="padding-bottom: 20px;">
    <div class="marketing-site-content-section">
      <div class="marketing-site-content-section-img">
        <img src="/images/schoolchildren1.jpg" alt="The best School Management Software" />
      </div>
      <div class="marketing-site-content-section-block">
        <h3 class="marketing-site-content-section-block-header">The best School Management Software</h3>
        <a href="#" class=" hollow round button small">learn more</a>
      </div>
      <div class="marketing-site-content-section-block small-order-2 medium-order-1">
        <h3 class="marketing-site-content-section-block-header">Choose eSoftSchool and you will never regret</h3>
        <a href="#" class="hollow round button small">learn more</a>
      </div>
      <div class="marketing-site-content-section-img small-order-1 medium-order-2">
        <img src="/images/schoolchildren2.jpg" alt="Choose eSoftSchool and you will never regret" />
      </div>
    </div>


  </section>

  <section id="benefits" style="background-color: #2c3840; padding: 20px 0;">
      <div class="row column">
        <h2 class="lead" style="color: aliceblue;">BENEFITS</h2>
      </div>

      <div class="row small-up-1 medium-up-2 large-up-3">
        <div class="column">
          <div class="callout">
            <p>Easy Accessible</p>
            <p><img src="/images/acessible.jpg" alt="image of a planet called Pegasi B"></p>
            <p class="subheader">Find Earth-like planets life outside the Solar System</p>
          </div>
        </div>
        <div class="column">
          <div class="callout">
            <p>Full Online Implementation</p>
            <p><img src="/images/online.jpg" alt="image of a planet called Pegasi B"></p>
            <p class="subheader">Find Earth-like planets life outside the Solar System</p>
          </div>
        </div>
        <div class="column">
          <div class="callout">
            <p>Data Backup Provided</p>
            <p><img src="/images/network.jpg" alt="image of a planet called Pegasi B"></p>
            <p class="subheader">Find Earth-like planets life outside the Solar System</p>
          </div>
        </div>
        <div class="column">
          <div class="callout">
            <p>Secured From Cyber Attacks</p>
            <p><img src="/images/cyber-security.jpg" alt="image of a planet called Pegasi B"></p>
            <p class="subheader">Find Earth-like planets life outside the Solar System</p>
          </div>
        </div>
        <div class="column">
          <div class="callout">
            <p>Easy Online Accounts Reconciliation</p>
            <p><img src="/images/communication.jpg" alt="image of a planet called Pegasi B"></p>
            <p class="subheader">Find Earth-like planets life outside the Solar System</p>
          </div>
        </div>
        <div class="column">
          <div class="callout">
            <p> 24/7 Support: whatsapp and Email</p>
            <p><img src="/images/monitor.jpg" alt="image of a planet called Pegasi B"></p>
            <p class="subheader">Find Earth-like planets life outside the Solar System</p>
          </div>
        </div>

      </div>
  </section>

  <section class="marketing-site-three-up" id="services">
    <h2 class="marketing-site-three-up-headline">Services</h2>
    <div class="row medium-unstack">
      <div class="columns">
        <i class="fa fa-gg" aria-hidden="true"></i>
        <h4 class="marketing-site-three-up-title">Primary School</h4>
        <p class="marketing-site-three-up-desc">These modules are interlinked by datasets that allows Parents, Teachers, School Management and Students to manage, maintain monitor and provide quality education and services to every student attending your school.</p>
      </div>
      <div class="columns">
        <i class="fa fa-user-o" aria-hidden="true"></i>
        <h4 class="marketing-site-three-up-title">Junior High School</h4>
        <p class="marketing-site-three-up-desc">SoftSchool is built on the latest computer technologies and can be used by schools of any size. Its database is robust and can support millions of records.</p>
      </div>
      <div class="columns">
        <i class="fa fa-check-square-o" aria-hidden="true"></i>
        <h4 class="marketing-site-three-up-title">Products</h4>
        <p class="marketing-site-three-up-desc">Data is never thrown away and will be available for querying long after students have graduated and left. Parents and guardians ability to access student data and reports over the internet is an added bonus. SoftSchool is developed and supported by Superior Software Systems and its customer focused network of expert channel partners.</p>
      </div>
    </div>
  </section>

  <section id="about-us" style="padding-top: 8vw; padding-bottom: 8vw; background-color: #2c3840;">
    <div style="margin-right: auto; margin-left: auto; max-width: 1000px; align-items: center; text-align: center;">
      <p style="color: aliceblue;"><span>- eSoftSchool -</span></p>
      <h3 style="font-weight: 800; color: #a0d9d5;">ABOUT US</h3>

      <p style="color: lightgray;"><span>The SoftSchool System is the integrated school management system for the Primary, Junior High School (JHS) and Senior High School (SHS) that wants to be innovative and competitive in this new millennium. It has been designed with an extensive feature set, yet it is simple to manage and configure. SoftSchool is modular in design and can grow as your institution and requirements grow. It grows with you, ensuring that new features that are introduced are truly features that are needed. SoftSchool is a system that is open to the needs and requests of its customers. In creating a large family of users, you can be assured that as requests for certain features are incorporated, all users will benefit.</span><br>

      <span style="color: darkgrey">SoftSchool is built on the latest computer technologies and can be used by schools of any size. Its database is robust and can support millions of records. Data is never thrown away and will be available for querying long after students have graduated and left. Parents and guardians ability to access student data and reports over the internet is an added bonus SoftSchool is developed and supported by Superior Software Systems and its customer focused network of expert channel partners. You can be assured that there is always a support person nearby. There is also a dedicated help desk, which is just a phone call or an e-mail away.</span></p>
    </div>
  </section>

  <div style="padding-top: 4vw; padding-bottom: 4vw; background-color: #a0d9d5;">
    <div style="margin-right: auto; margin-left: auto; max-width: 1000px;">
      <h4 style="text-align: center;">Use the code <strong>#MIXGH007BMW</strong> and get a great disccount on all our components</h4>
    </div>
  </div>

</article>


 <!--Include Footer-->
  <?php 
    $path = $_SERVER['DOCUMENT_ROOT'] ;
    $path .= "/includes/footer.php";
    include ($path);
  ?>