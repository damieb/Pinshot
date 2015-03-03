<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="author" content="leheri_d">
  <title><?php echo $title; ?></title>

  
  <link rel="stylesheet" href="<?php echo WEBROOT;?>media/css/foundation.css">
  <link rel="stylesheet" href="<?php echo WEBROOT;?>media/css/pinshot.css">
  <script src="<?php echo WEBROOT;?>media/js/vendor/custom.modernizr.js"></script>
  <script src="<?php echo WEBROOT;?>media/js/vendor/jquery.js"></script>
  <script src="<?php echo WEBROOT;?>media/js/jquery-1.10.2.min.js"></script>
  <script src="<?php echo WEBROOT;?>media/js/foundation.min.js"></script>
  <script src="<?php echo WEBROOT;?>media/js/upDragD.js"></script>
  <script src="<?php echo WEBROOT;?>media/js/comments.js"></script>
  <script src="<?php echo WEBROOT;?>media/js/utility.js"></script>

</head>

<body>
 
      <!-- Navigation -->
 
<nav class="top-bar" data-options="is_hover:false">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name">
      <h1>Pinshot</h1>
    </li>
    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Left Nav Section -->
    <ul class="left">
        <li><a href="<?php echo WEBROOT;?>">Home</a></li>
      <?php if(Auth::instance()->get_user() == true ){?>
        <li><a href="<?php echo WEBROOT;?>pins/mylist/1">Mes pins</a></li>
        <li><a href="<?php echo WEBROOT;?>pins/upload">Importer</a></li>
        <li><?php if(Auth::instance()->get_user() == true ){echo"<a href=".WEBROOT."messages/list/1>Messages</a>";}?></li>
        <?
        }
      ?>
      <li><a href="<?php echo WEBROOT;?>pins/list/1">Explorer</a></li>
    </ul>

 <ul class="right">
        <li><?php if(Auth::instance()->get_user() == false ){echo"<a href=".WEBROOT."users/signup>Inscription</a>";} ?></li>
        <li><?php if(Auth::instance()->get_user() == false ){echo"<a href=".WEBROOT."users/login>Connexion</a>";}?></li>
<?php if(Auth::instance()->get_user() == true ){
$idUSER = Auth::instance()->get_user()->pk();
$info = helper::info('user','id',$idUSER,2);
$avatar = gravatar::get_gravatar($info->email,35);
?>
        <li class="has-dropdown not-click" data-dropdown="drop2" data-options="is_hover:true"><a href='#' ><img src="<?php echo $avatar;?>"> <?php echo $info->username;?></a>
        </li>
<?php } ?>
    </ul>
  </section>
</nav>
<div id="drop2"class="f-dropdown content medium" data-dropdown-content>
  <div class="row">
    <a class="small button radius" href="<?php echo WEBROOT;?>users/edit">Mon Compte</a>
    <a class="small button radius" href="<?php echo WEBROOT;?>users/logout">D&eacute;connexion</a>
  </div>
</div>
 
      <!-- End Navigation -->
 
    <?php echo $body; ?>

      <!-- Footer -->
 
        <footer class="row">
        <div class="large-12 columns"><hr />
            <div class="row">
              <div class="large-6 columns">
                  <p>&copy; Copyright pinshot</p>
              </div>
            </div>
        </div>
      </footer>
 
      <!-- End Footer -->
<script type="text/javascript">
    $(document).ready(function() {
            document.onkeydown = function() 
                {
                    var j = event.keyIdentifier
                    if (j == "Right")
                        window.location = nextUrl
                    else if (j == "Left")
                        window.location = prevUrl            
                        }
                   });

      $(document).ready(function() {
                    var nextPage = $("#next_page_link")
                    var prevPage = $("#previous_page_link")
                    nextUrl = nextPage.attr("href")
                    prevUrl = prevPage.attr("href")
                });

</script>
<script>
  document.write('<script src=../../../pinshot/media/js/vendor/'
    + ('__proto__' in {} ? 'zepto' : 'jquery')
    + '.js><\/script>');
</script>
<script src="<?php echo WEBROOT;?>media/js/foundation/foundation.js"></script>
<script src="<?php echo WEBROOT;?>media/js/foundation/foundation.dropdown.js"></script>
<script src="<?php echo WEBROOT;?>media/js/foundation/foundation.reveal.js"></script>
<script src="<?php echo WEBROOT;?>media/js/foundation/foundation.orbit.js"></script>
<script src="<?php echo WEBROOT;?>media/js/foundation/foundation.clearing.js"></script>
<script src="<?php echo WEBROOT;?>media/js/foundation/foundation.tooltips.js"></script>
<script>
  $(document).foundation();
</script>

</body>
</html>