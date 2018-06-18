<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Joanna Gromadzka's Flexbox Research</title>
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
      <h1><a href="index.php"><i class="logo fa fa-fw fa-cube"></i>Joanna Gromadzka's  Web Dev Examples</a></h1>
      <nav id="cssmenu">
          <ul>
             <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120</span></a></li>
             <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> BIG</span></a></li>
             <li><a href="#" class="selected"><span><i class="fa fa-fw fa-chevron-down"></i> (5) Web Dev Research Topics</span></a>
                 <ul>
                     <li><a href="flexbox.php" ><span><i class="fa fa-fw fa-cube"></i> Flexbox</span></a></li>
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
     <h2 class="pageID">Flexbox</h2>
     Flexbox is a modern page layout module replacing block, inline, table and positioning modes. Using simple code you can control position of elements in container creating well balanced websites in way easier fashion. 
        <p> According to  Ire Aderinokun “learning all of flexbox isn’t so straightforward. There are 12 new properties, each with an average of 4 potential values. It can be a bit overwhelming to jump right in with everything.
        But you don’t have to start with everything. For a great number of circumstances, I find myself only needing to use 3 properties -</p>
            <ul>
                <li>display - This sets the element as an inline or block flexbox container element</li>
                <li>justify-content - This controls the horizontal alignment of items within the flex container (If the flex-direction is the default value of row or row-reverse)</li>
                <li>align-items - This controls the vertical alignment of items within the flex container (If the flex-direction is the default value of row or row-reverse)”(Aderinokun).</li>
            </ul>
<p>Taylor L. says “ Unfortunately, Flexbox support wasn’t added to Internet Explorer until version 10, leaving older versions – still popular in some corners – out of the Flexbox revolution. This idea didn’t sit well with 10up’er Jonathan Neal, tasked with engineering a beautiful layout for a Fortune 50 forced to contend with supporting older versions. We decided to subsidize his time to see if we could introduce Flexbox support under less-than-ideal browser requirements. The result was Flexibility: a smooth front end experience for older browsers, without compromising our ability to use pioneering layout technology”(Lovett).</p>

<p>“Thankfully there are prefixes that let us control older browsers behaviour. We can’t forget about the order of prefixes and trust me – that is one of the most common mistakes when working with prefixes in CSS. The rule is to use old syntax before the new one so if the browser understands new options, those should be used.”(Joanna N.)</p>
        
<h4>Works Cited:</h4>

<p>Aderinokun, Ire. “6 Reasons to Start Using Flexbox.” Bitsofcode, Bitsofcode, 25 Feb. 2016, bitsofco.de/6-reasons-to-start-using-flexbox.</p>

<p>N., Joanna. “Cross-Browser Issues with Flexbox.” Digital and Creative Agency In Birmingham, Midlands - Fastfwd, 9 Jan. 2018, www.fastfwd.com/cross-browser-issues-flexbox/.</p>

<p>Lovett, Taylor. “Flexibility: Flexbox Support for Internet Explorer.” 10up, 10up, 23 Dec. 2015, 10up.com/blog/2015/flexibility-flexbox-ie/. 
</p>        

    </section>
    <!-- END LEFT COL -->

    <!-- START RIGHT COL -->
    <aside>
     <h3>Additonal Resources</h3>
     <p><a href="
https://medium.freecodecamp.org/learn-css-flexbox-in-5-minutes-b941f0affc34" target="_blank">www.medium.freecodecamp.org</a>
</p>
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
