<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DevCon Devise is a National Competition that aims to challenge students in solving real world problems with mobile applications.">
    <meta name="author" content="Developers Connect Philippines (DevCon)">

    <!-- icons -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-152x152.png" />

    <!-- FB OpenGraph tags -->
    <meta content="DevCon Devise" property="og:title" />
    <meta content="DevCon Devise is a National Competition that aims to challenge students in solving real world problems with mobile applications." property="og:description" />
    <meta content="http://devise.devcon.ph/" property="og:url" />
    <meta content="<?php echo get_template_directory_uri(); ?>/img/opengraph.png" property="og:image" />
    <meta content="200" property="og:image:width" />
    <meta content="200" property="og:image:height" />

    <title>DevCon Devise</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.css" rel="stylesheet">
	
    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/custom.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/html5shiv.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/respond.min.js"></script>
    <![endif]-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>	
	
	
	<script type="text/javascript">
    $('[data-spy="scroll"]').each(function () {
		  var $spy = $(this).scrollspy('refresh')
		})
  </script>
<script type="text/javascript">
  function resizeHeight() {
      if (window.innerHeight > 500 && window.innerWidth > 768) {
          $(".page-section").css("min-height", "" + window.innerHeight + "px");
          $(".wrapL").css("min-height", "" + (window.innerHeight - 80) + "px");
      } else {
          $(".page-section").css("min-height", "");
          $(".wrapL").css("min-height", "");
      }
  }
  $(document).ready(function(){
      resizeHeight();
      $(window).resize(resizeHeight);
	    $("#Mynavbar").on('activate.bs.scrollspy', function () {

	        // do something…
	    })
	});
</script>
	
  </head>

  <body data-spy="scroll" data-target="#Mynavbar">
	<div class="navbar navbar-default navbar-fixed-top hidden-xs" id="Mynavbar">
      <div class="container">
      	<div class="row">
		    <div class="col-md-3 col-sm-2">
		        <div class="navbar-header logo-wrap">
		          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="index.html">LOGO HERE</a>
		        </div>
		    </div>
			<div class="col-md-9 col-sm-10">
        		<div class="row">
		        	<div class="col-md-12 navbar-top">
				        <div class="navbar-collapse collapse navbar-right navbar-right-wrap">
				          <ul class="nav navbar-nav nav-top" id="menu">
				            <li><a href="#home">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#howToJoin">How to Join</a></li>
							<li><a href="#mechanics">Mechanics</a></li>
							<li><a href="#sponsors">Sponsors</a></li>
				          </ul>
				        </div><!--/.nav-collapse -->
				    </div>
				</div>
		    </div>
		</div>
      </div>
    </div>	
	<div class="spacer"></div>
	<div id="home" class="page-section">
		<div class="banner-home">
			<div class="container">
				<div class="row">
					<div class="col-md-6 wrapL">
						<img src="<?php echo get_template_directory_uri(); ?>/img/devcon-logo.png" class="img-responsive" width="200px"/>
						<h1>Devise</h1><hr>
						<h5>Devcon Devise is a national competition that aims to challenge students in solving real world problems with mobile applications. </h5>
						<hr>
						<h5>This year’s theme is Public Safety and Disaster Preparedness.</h5>
						<hr><hr>
						<img src="<?php echo get_template_directory_uri(); ?>/img/icon1.png">&nbsp;<img src="<?php echo get_template_directory_uri(); ?>/img/icon2.png">&nbsp;
						<img src="<?php echo get_template_directory_uri(); ?>/img/icon3.png">&nbsp;<img src="<?php echo get_template_directory_uri(); ?>/img/icon4.png">&nbsp;
						<img src="<?php echo get_template_directory_uri(); ?>/img/icon5.png">&nbsp;<img src="<?php echo get_template_directory_uri(); ?>/img/icon6.png">&nbsp;
						<img src="<?php echo get_template_directory_uri(); ?>/img/icon7.png">&nbsp;<img src="<?php echo get_template_directory_uri(); ?>/img/icon8.png">&nbsp;
					</div>
					<div class="col-md-6 wrapR text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/devise-logo.png" class="img-responsive dlogo"/>
						<h4>Join the Cause</h4>
						<h4>Make a difference</h4>
						<hr>
						<p><a href="#about" class="btnW">Learn More.</a></p>
						<hr>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /banner-home -->
	<div id="about" class="page-section">
		<div class="spacer"></div>
		<div class="header-wrap">
				<h1>About</h1>
			</div>
		<div class="banner">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about-img1.png" class="img-responsive" />
						<hr>
						<p><span>Devcon Devise</span> is a National Competition that aims to challenge students in solving real world problems with mobile applications. </p>
					</div>
					<div class="col-md-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about-img2.png" class="img-responsive" />
						<hr>
						<h5>Theme:</h5>
						<p>The country has been facing inevitable man-made or natural catastrophes. Now, in the age where almost everyone owns a device, how can mobile technology overcome these challenges? Thus, this year's theme is <i><b>Public Safety and Disaster Preparedness.</b></i></p>
					</div>
					<div class="col-md-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about-img3.png" class="img-responsive" />
						<hr>
						<h5>Schedule</h5>
						<p><b>Jun 14</b> – Submission of Entries Open</p>
						<p><b>8th of the Month</b> – Announcement of New Qualified Entries </p>
						<p><b>Nov 30</b> – End of Submission of Entries </p>
						<p><b>Dec 13</b> – Culminating Activity/ Awarding of the Top 3 teams</p>
					</div>
				</div>
			</div>
		</div>
		<div class="spacer"></div>
	</div><!-- /banner-home -->
	<div id="howToJoin" class="page-section">
		<div class="spacer"></div>
		<div class="header-wrap">
				<h1>How to Join</h1>
			</div>
		<div class="banner">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/how-img1.png" class="img-responsive" />
						<hr>
						<h5>Registration</h5>
						<ul class="text-left">
							<li>Open the registration form here <a href="https://docs.google.com/a/devcon.ph/forms/d/132R_Cc61YuLws3DmbPELmEgRNPkIY_wrVGk4Fu8FXNs/viewform">(Google Form)</a>.</li>
							<li>Fill-in team details. Up to 5 team members in a team.</li>
							<li>Fill-in project details.</li>
							<li>Submit form.</li>
							<li>You will receive a notification email once your submission is successful.</li>
						</ul>
					</div>
					<div class="col-md-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/how-img2.png" class="img-responsive" />
						<hr>
						<h5>Platform and Tools</h5>
						<ul class="text-left">
							<li>Mobile platforms accepted are iOS, Android, BlackBerry, Windows Phone and Firefox OS.</li>
							<li>Applications on custom mobile devices (e.g. Raspberry Pi or Arduino based) are also accepted.</li>
						</ul>
					</div>
					<div class="col-md-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/how-img3.png" class="img-responsive" />
						<hr>
						<h5>3-Minute Video</h5>
						<ul class="text-left">
							<li>Part of the entry submission is a 3-minute video (maximum) that demonstrates the features of the application. </li>
							<li>The video can use simulators for footage as long as it shows the actual app or prototype (i.e. not a mockup).</li>
						</ul>
					</div>
				</div>
			</div>
			<hr>			
		</div>
		<div class="spacer"></div>
	</div><!-- /banner-home -->
	<div id="mechanics" class="page-section">
		<div class="spacer"></div>
		<div class="header-wrap">
				<h1>Mechanics</h1>
			</div>
		<div class="banner mech-wrap">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/mech-img1.png" class="img-responsive" />
						<hr>
						<h5>Judging</h5>
						<p class="pwrap"><span>Qualifying Round</span></p>
						<p>Entries will be screened based on requirements completion and relevance with the theme. Every 8th day of the month, new list of qualified entries will be announced where each team will be given a microsite to feature their project and add updates.</p>
						<p class="pwrap"><span>Pre-Final Round</span></p>
						<p>Selection of the Top 5 entries will be chosen on the last week of November.</p>
						<p class="pwrap"><span>Final Round of Judging</span></p>
						<p>By December 13, 2014, the top 5 teams will convene in Metro Manila and pitch their mobile applications. The selected judges will choose and award the winning 3 teams.</p>
					</div>
					<div class="col-md-4 mech-p">
						<img src="<?php echo get_template_directory_uri(); ?>/img/mech-img2.png" class="img-responsive" />
						<hr>
						<h5>Prizes</h5>
						<p>1st Prize – PHP 50,000</p>
						<p>2nd Prize – PHP 30,000</p>
						<p>3rd Prize – PHP 20,000</p>						
					</div>
					<div class="col-md-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/mech-img3.png" class="img-responsive" />
						<hr>
						<h5>Criteria for Judging</h5>
						<div class="row text-center">
							<div class="col-md-12">
								<table class="mech-tab">
									<tr>
										<td>50%</td>
										<td>Execution of Entry</td>
										<td>How fully developed and implemented is the Entrant’s concept in the submitted Entry? How complete is it?</td>
									</tr>
									<tr>
										<td>25%</td>
										<td>Innovation of Entry</td>
										<td>To what degree does the Entry illustrate new and innovative uses for mobile technology? Was the idea unique, or a different take on an existing/similar app?</td>
									</tr>
									<tr>
										<td>25%</td>
										<td>Utility of Entry</td>
										<td>How useful is the Entry in addresing public safety and disaster preparedness  with mobile technologies?</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
		</div>
		<div class="spacer"></div>
  </div><!-- /banner-home -->
  <div id="faq" class="page-section" style="min-height: 1351px;">
		<div class="spacer"></div>
		<div class="header-wrap">
				<h1>Frequently Asked Questions</h1>
			</div>
		<div class="banner">
			<div class="container">
				<div class="row text-left">
          <div class="col-md-12">
            <p class="question">1. Who can join this competition?</p>
            <p>Undergraduate students, both those of degree and non-degree courses, who are enrolled in a school in the Philippines any time within the contest period (June 14 - December 13) are allowed to join the contest.</p>
            <p>This means that people who have graduated or not currently enrolled in a course are not allowed to join the contest. On the other hand, this also allows for entries from High School and even Grade School students as long as they can prove that they are the ones who have coded most of the app.</p>
            <p class="question">2. What types of apps are allowed?</p>
            <p>Any type of mobile applications are allowed as long as it fits within the theme. Here are some examples:</p>
            <ul>
              <li>An educational game for kids that teaches them what to do when disaster strikes.</li>
              <li>A mobile app that uses geolocation to connect you to the closest and most relevant rescue services (e.g. fire department for fire, police department for crime) in a few taps.</li>
              <li>Cheap custom designed devices made from off-the-shelf parts that can be distributed to remote locations which can provide early warning for certain calamities for residents.</li>
            </ul>
            <p>You can also send an email to <a href="mailto:mailbox@devcon.ph">mailbox@devcon.ph</a> if you are unsure if your app is suited for this competition.</p>

            <p class="question">3. We already have an existing mobile app (e.g. thesis, side project), can we submit it as our entry?</p>

            <p>Yes.</p>

            <p class="question">4. Is there any advantage to submitting our entry early?</p>

            <p>Yes! <strong>We encourage participants to submit prototypes as early as possible.</strong> Doing so will allow us to tell you how you can improve the app while still giving you time to act upon those suggestions.</p>

            <p>Submitting entries is not a one-time deal: <em>you can re-submit your entry as many times as you like</em>, with the last submission containing the complete working application.</p>

            <p class="question">5. Can we pivot and change our app midway into the competition?</p>

            <p>Yes. However, the new version of the app will again be subject to pre-qualification.</p>

            <p class="question">6. Our team is not located near Metro Manila. Is travel and accommodation for the finalists covered?</p>

            <p>We will cover the travel and accommodation for 3 individuals per team, but we may increase this to 5 members later.</p>
					</div>
				</div>
			</div>
			<hr>
		</div>
		<div class="spacer"></div>
	</div>
	<div id="sponsors">
		<div class="spacer"></div>
		<div class="header-wrap">
				<h1>Brought To You By</h1>
			</div>
		<div class="banner">
			<div class="container">
				<div class="row text-center">
					<hr><hr><hr>
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/img/spon-img1.png" class="img-responsive" /><hr>
					</div>
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/img/spon-img4.png" class="img-responsive" /><hr>
					</div>
				</div>
			</div>
			<hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr>
		</div>
	</div><!-- /banner-home -->
  <div class="container facebook-like">
    <div class="row text-center">
      <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
        <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fdevcondevise&amp;width&amp;height=427&amp;colorscheme=light&amp;show_faces=false&amp;header=true&amp;stream=true&amp;show_border=true&amp;appId=488047311326879" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:427px; width:100%" allowTransparency="true"></iframe>
      </div>
    </div>
  </div>
	<footer>
		<div class="footer-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<p>DevCon Devise 2014</p>
						<ul>
							<li><a href="#home">Home</a> | </li>
							<li><a href="#about">About</a> | </li>
							<li><a href="#howToJoin">How to Join</a> | </li>
							<li><a href="#mechanics">Mechanics</a> | </li>
							<li><a href="#sponsors">Sponsors</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- /footer-wrap -->	
	</footer>

    <!--<script src="bootstrap/js/jquery.js"></script>-->
    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/respond.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/css3-mediaqueries.js"></script>
    <?php wp_footer(); ?> 
  </body>
</html>
