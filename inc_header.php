<?php define('SITEURL', "http://localhost/pcm") ?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js ie ie8"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>

        <meta charset="utf-8">

        <title><?php switch($page) {
			case 'home' : echo "Welcome to "; break;
			case 'about' : echo "About - "; break;
			case 'academic' : echo "Academics - "; break;
		} ?>President's College. Minuwangoda</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="stylesheet" href="css/main.css">  
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
		
		<script type="text/javascript" src="js/jquery.min.js"></script>

        <!--[if lt IE 9]>
         <script src="js/html5shiv.js"></script>
        <![endif]-->

    </head>
    <body>
        <header>
            <div class="parentContainer">
                <div id="socialButtons">
                    <a href="http://en.wikipedia.org/wiki/President%27s_College,_Minuwangoda" target="new" id="linked">
                        <p>Find us on Wikipedia</p> 
                        <span>linked </span>
                    </a>
                    <a href="https://www.facebook.com/presidentscollege" target="new" id="facebook">
                        <p>Find us on Facebook </p> 
                        <span>Facebook</span>
                    </a>
                </div>
            </div>
            <div>
        
                <div id="menu">
                    <section>
                        <a href="<?php echo SITEURL ?>"><img src="img/logo.png" alt=""></a>
                        <ul class="clearfix">
                            <li <?php if($page=='home') echo 'class="selected"' ?> ><a href="<?php echo SITEURL ?>">Home</a></li>
                            <li <?php if($page=='about') echo 'class="selected"' ?>><a href="<?php echo SITEURL ?>/about.php">About</a></li>
                            <li <?php if($page=='academic') echo 'class="selected"' ?>><a href="<?php echo SITEURL ?>/academic-structure.php">Academic</a>
								<ul class="sub-menu">
									<li><a href="<?php echo SITEURL ?>/academic-structure.php">Academic Structure</a></li>
									<li><a href="<?php echo SITEURL ?>/academic-staff.php">Academic Staff</a></li>
									<li><a href="<?php echo SITEURL ?>/academic-results-al.php">Results &raquo; Advanced Level</a></li>
								</ul>
							</li>
                            <li <?php if($page=='extra') echo 'class="selected"' ?>><a href="<?php echo SITEURL ?>/societies.php">Extra Curricular</a>
								<ul class="sub-menu">
                                    <li><a href="<?php echo SITEURL ?>/sports.php">Sports</a></li>
                                    <li><a href="<?php echo SITEURL ?>/societies.php">Clubs & Societies</a></li>
                                </ul>
							</li>
                            <li <?php if($page=='contact') echo 'class="selected"' ?>><a href="<?php echo SITEURL ?>/contact.php">Contact Us</a></li>
                        </ul>
                    </section>
                </div>
                <div id="tagline">
                    <section>
                        <a href="#">“Welcome to the official website of President's College”</a>
                    </section>
                </div>
                <div id="info">
                    <section>
                        <div>
                            <img src="img/motto.png" alt="Go Forward With Dignity">
                        </div>
                        <span class="element leftElement"></span>
                        <span class="triangle">triangle</span>
                    </section>
                </div>               
            </div>    
        </header>