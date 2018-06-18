<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Joanna Gromadzka:Web Dev Examples</title>
        <meta name="viewport" content="width=device-width" />
        <meta name="robots" content="noindex,nofollow" />
        <meta charset="utf-8">
        <script src="https://use.fontawesome.com/6a71565c22.js"></script>
        <link rel="stylesheet" href="css/nav.css" />
        <link rel="stylesheet" href="css/big.css" />
        <link rel="stylesheet" href="css/form.css" />
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
   	    <script src="http://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
   	    <script src="js/script.js"></script>
    </head>
<body>
<!-- START WRAPPER -->
<div class="wrapper">
    <header>
      <h1><a href="index.php"><i class="logo fa fa-home"></i>Joanna Gromadzka:Web Dev Examples WEB120</a></h1>
      <nav id="cssmenu">
          <ul>
             <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120</span></a></li>
             <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> BIG</span></a></li>
             <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> (5) Web Dev Research Topics</span></a>
                 <ul>
                     <li><a href="flexbox.php"><span><i class="fa fa-fw fa-cube"></i> Flexbox</span></a></li>
                     <li><a href="galleries.php"><span><i class="fa fa-fw fa-camera-retro"></i> Galleries</span></a></li>
                     <li><a href="parallax.php"><span><i class="fa fa-fw fa-fighter-jet"></i> Parallax</span></a></li>
                     <li><a href="shoppingcarts.php"><span><i class="fa fa-fw fa-shopping-basket"></i> Shopping Carts</span></a></li>
                     <li><a href="siteapp.php"><span><i class="fa fa-fw fa-html5"></i> Site vs App</span></a></li>
                 </ul>
              </li>
             <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> (3) Google Apps</span></a>
                <ul>
                   <li><a href="calendar.php"><span><i class="fa fa-fw fa-calendar"></i> Calendar</span></a></li>
                   <li><a href="map.php"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li>
                   <li><a href="youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i> YouTube</span></a></li>
                </ul>
             </li>
             <li><a href="webcam.php"><span><i class="fa fa-fw fa-eye"></i> (2) Web Cams</span></a></li>
          </ul>
      </nav>
    </header>
        
    <!-- START LEFT COL -->
    <section>
     <h2 class="pageID">Client Form</h2>
    
        <?php include "includes/multiple.php";?>
        <p class="clear-recaptcha"></p>

    </section>
    <!-- END LEFT COL -->

    <!-- START RIGHT COL -->
    <aside>
     <h3>Additonal Resources</h3>
     
        <p>Website design process in 7 steps: <a href="https://xbsoftware.com/blog/website-development-process-full-guide/" target="_blank">www.webflow.com</a></p>
        <p>Web design process in 7 steps: <a href="https://webflow.com/blog/the-web-design-process-in-7-simple-steps" target="_blank">www.webflow.com</a></p>
     <p>Web development assistance:<a href="https://tutsplus.com/" target="_blank">www.tutsplus.com</a></p>
    </aside>
    <!-- END RIGHT COL -->
    
    <!-- START Footer -->
    <footer>
      <p><small>&copy; 2000 - <?=date('Y')?> by <a href="../contactme.php">Joanna Gromadzka</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
      <p><a href="disclaimer.html" target="_blank">Disclaimer</a></p>
    </footer>
    <!-- END Footer --> 
    
</div>
<!-- END WRAPPER -->

</body>
</html>
