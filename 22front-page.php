<?php get_header(); ?>
<div class="whyRCC" id="whyRCC">
	<div class="container">
		<div class="grid-12 hugeContent">
			<h1 class="banner">Welcome to RCC</h1>
		</div>
		<div class="cube grid-6  " id="futureCta">
			<h1 class="futureCta"><a href="#">Your future starts here</a></h1>
		</div>
		<div class="cube grid-6  " id="currentCta">
			<h1 class="currentCta"><a href="#">Fall 2012 Schedule</a></h1>
		</div>
		<!-- <div class="cube cube15w blueCube" id="currentCta2">
			<h2><a href="#">Fall 2012 Course List</a></h2>
		</div> -->
	</div>
</div>



 <div class="wrapper container" id="wrapper">
	<div class="cube grid-12"> 
		<div class="slider-wrapper theme-default">
			<img 	src="<?php bloginfo('template_directory'); ?>/images/rccLogo-white.png" 
									alt="Rappahannock Community College Logo"
									id="logo" class="logo"/>
			<div id="slider" class="nivoSlider">
				<img data-src="<?php bloginfo('template_directory'); ?>/images/billboard.jpg" src="<?php bloginfo('template_directory'); ?>/images/billboard.jpg" title="#caption1" />
				<img data-src="<?php bloginfo('template_directory'); ?>/images/billboard2.jpg" title="#caption2" />
				<img data-src="<?php bloginfo('template_directory'); ?>/images/billboard3.jpg" title="#caption3" />
				<img data-src="<?php bloginfo('template_directory'); ?>/images/billboard4.jpg" title="#caption4" />
			</div>
			<div id="caption1" class="nivo-html-caption">
				<h1><a href="#">Affordable education delivered in awesome learning environments</a></h1>
			</div>
			<div id="caption2" class="nivo-html-caption">
				<h1><a href="#">Cutting edge technology supporting degrees in engineering, nursing, and more</a></h1>
			</div>
			<div id="caption3" class="nivo-html-caption">
				<h1><a href="#">Award-winning, passionate, and caring faculty delivering life-changing instruction</a></h1>
			</div>
			<div id="caption4" class="nivo-html-caption">
				<h1><a href="#">Friendly, accepting, and fun loving student body</a></h1>
			</div>
		</div>
	</div>
</div> 
	

 <div id="mainContainer" class="container mainContainer">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article class="post" id="post-<?php the_ID(); ?>">

	<div class="entry">
		<?php the_content(); ?>

		<div class="cube grid-3 bodyCopy activeDataEmbed" id="activeDataEmbed">
			<h3>Current Events</h3>

			<div id="adx090579" class="activeDataContent">Loading Events...</div>
		</div>
		<div class="cube grid-4 brightgreen bodyCopy importantLinks" id="importantLinks">
			<h3>Updates and Announcements</h3>
			<ul class="importantLinksContent">
				<li class="cta">
					<a href="#">S.O.A.R. Glenns Campus</a>
					<span>Student Orientation, Advising, and Registration on the Glenns Campus.</span>
				</li>
				<li class="cta">
					<a href="#">S.O.A.R. Warsaw Campus</a>
					<span>Student Orientation, Advising, and Registration on the Warsaw Campus.</span>
				</li>
				 <li class="cta">  
	         <a href="#"> 2012 RCC Preakness Party</a>
	         <span>Students can begin registering for classes on July 19th. Lorem ipsum dolor sit amet, consectetur...</span>
		     </li> 
		     <li class="cta">  
		         <a href="#">Give now to the RCC Foundation</a>
		         <span>Lorem ipsum dolor sit amet, consectetur...</span>
		     </li>
	   </ul>
		</div>
		<div class="cube grid-25 blue" id="fCourse1" data="/schedule/?semid=2124&subject=JPN">
			<h3>JPN 101</h3>
			<p>Japanese I</p>
		</div>
		<div class="cube grid-25 orange" id="applyToday">
			<h3>Apply to RCC Today</h3>
		</div>
		<div class="cube grid-25 darkblue" id="fProgram">
			<h3>General Engineering Technology Degree</h3>
		</div>
		<div class="cube grid-25 purple" id="fProgram2">
			<h3>Psychology & Social Work Degree</h3>
		</div>
		<div class="grid-3 rappenings">
			<h3>Recent <span>Rappenings</span></h3>
			<p>A look into the daily life of RCC.</p>
		</div>
		<div class="cube grid-3 fRapp" id="fRapp1">
			<img src="<?php bloginfo('template_directory'); ?>/images/1.jpg" />
			<p><a href="#">Rappahannock chief addresses RCC audiences</a></p>
		</div>
		<div class="cube grid-3 fRapp" id="fRapp2">
			<img src="<?php bloginfo('template_directory'); ?>/images/2.jpg" />
			<p><a href="#">RCC co-sponsors Green Vendor Fair</a></p>
		</div>
		<div class="cube grid-3 fRapp" id="fRapp3">
			<img src="<?php bloginfo('template_directory'); ?>/images/6.jpg" />
			<p><a href="#">RCC’s Opportunity 2012! campaign now taking online donations</a></p>
		</div>

		
		
		<div class="cube grid-6 darkestblue bodyCopy contactCube" id="contactCube">
			<h3>Contact Us</h3>
      <ul class="contactInfo">
        <li class="name"><a href="/about/glenns/">Glenns Campus</a></li>
        <li class="phone">Phone 804.758.6700</li>
        <li class="phone">Toll-Free 800.836.9381</li>
        <li class="phone">Fax 804.758.3852</li>
        <li class="address">12745 College Drive</li>
        <li class="address">Glenns, VA 23149</li>            
      </ul>
      <ul class="contactInfo">
        <li class="name"><a href="/about/warsaw/">Warsaw Campus</a></li>
        <li class="phone">Phone 804.333.6700</li> 
        <li class="phone">Toll-Free 800.836.9379</li>
        <li class="phone">Fax 804.333.0106</li>
        <li class="address">52 Campus Drive</li>
        <li class="address">Warsaw, VA 22572</li>            
      </ul>
      <ul class="contactInfo">
	      <li class="name"><a href="/about/king-george">King-George Site</a></li>
	      <li class="phone">Phone 540.775.0087</li>
	      <li class="address">10100 Foxes Way</li>
	      <li class="address">King George, VA 22485</li>            
      </ul>
      <ul class="contactInfo">
        <li class="name"><a href="/about/kilmarnock">Kilmarnock Center</a></li>
        <li class="phone">Phone 804.435.8970</li>
        <li class="address">447 N. Main St</li> 
        <li class="address">Kilmarnock, VA 22482</li>
      </ul> 
		</div>
		<div class="cube grid-2 socialCube cube13" id="cube13">
			<h2>Like</h2>
		</div>
		<div class="cube grid-2 socialCube cube14" id="cube14">
			<h2>Follow</h2>
		</div>
		<div class="cube grid-2 socialCube cube15" id="cube15">
			<h2>Watch</h2>
		</div>
		<div class="cube grid-2 socialCube cube16" id="cube16">
			<h2>Read</h2>
		</div>
		<div class="cube grid-2 socialCube cube17" id="cube17">
			<h2><a href="https://alert.rappahannock.edu">Alert</a></h2>
		</div>
		<div class="cube grid-2 socialCube cube18" id="cube18">
			<h2>Learn</h2>
		</div>
		<br class="clearFloat" />
	</div>
</article>

	<?php endwhile; endif; ?>



<?php get_footer(); ?>
