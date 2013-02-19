<?php
/**
 * Template Name: Online Schedule
 *
 * This is the template that displays the online schedule at /schedule
 * Version: 5.0.0
 */

get_header(); ?>

	<div class="siteInfo">
	<?php the_post_thumbnail(); ?>
	<div class="container blue">
		<div class="grid-4">
		<a href="http://www.rappahannock.edu" class="noBorder"><img src="<?php bloginfo('template_directory'); ?>/images/rccLogo-white.png" alt="Rappahannock Community College Logo" id="logo" class="logo"></a>
	</div>
	<div class="grid-8">
		<h1 class="entry-title"><?php echo bloginfo('name'); ?></h1>
		<p class="site-description"><?php echo bloginfo('description'); ?></p>
	</div>
</div>
</div>
		<div id="mainContainer" class="container mainContainer page_v3">
			<div class="pageHeader">
				<?php profmg_breadcrumb(); ?>
			</div>
			<div id="content" class="grid-12" role="main">
				
				<div class="pageContent">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>
				<div id="optionsBar"> 
<img src="/wp-content/themes/Reconstruct10Schedule/images/Knob-Help.png" alt="Click here for help on using the Online Schedule" id="help"/>	
<ul id="links">
  <li class="selector" title="Quick Links">Quick Links</li>
  <div id="hiddenLinks" class="hidden0">
  	<ul>
      <li><a href="#" id="examSchedule" title="Exam Schedule">Exam Schedule</a></li> 
      <!--<li><a href="/pdf/Student-wait-list-procedures.pdf" title="Classes full? Read the Waitlist instructions.">Waitlist instructions</a></li>-->
      <li><a href="/helpdesk/how-to-register-and-pay-for-classes-online/" title="Registration Instructions">Registration Instructions</a></li>
       
  	</ul> 
  </div> 
</ul>

<ul id="schedules">
  <li class="selector" title="Select Semester">Semester</li>
  <div id="hiddenSchedules" class="hiddenO">
  <ul>
      <li class="semester" title="2122">Spring 2012</li>
      <li class="semester" title="2123">Summer 2012</li>
      <li class="semester" title="2124">Fall 2012</li> 
  </ul>
  </div>
</ul>
<ul id="subjects">
    <li class="selector disabled" title="Select Subject">Subject</li>
    <div id="hiddenSubjects" class="hiddenO">
        <ul>
        <!--insert subjects here--> 
        </ul>
    </div>
</ul>
<ul id="options">
  <li class="selector" title="Select Options">Options</li>
  
  <div id="hiddenOptions" class="hiddenO">
      <p>These options are <strong>not</strong> required but may help you find the courses you're looking for.</p>
      <form action="" name="options" id="optionsForm">
        <fieldset>
        <legend>options</legend>
          <p>Location</p>
          <input type="checkbox" name="location" value="Distance Learning" id="locationOnline" class="location" /><label for="locationOnline">Online</label><br />
          <input type="checkbox" name="location" value="GLENNS" id="locationGlenns" class="location" /><label for="locationGlenns">Glenns</label><br />
          <input type="checkbox" name="location" value="KILMARNOCK" id="locationKilmarnock" class="location" /><label for="locationKilmarnock">Kilmarnock</label><br /> 
          <input type="checkbox" name="location" value="KGEORGE" id="locationKG" class="location" /><label for="locationKG">King George</label><br />
          <input type="checkbox" name="location" value="WARSAW" id="locationWarsaw" class="location" /><label for="locationWarsaw">Warsaw</label>
          <br /><br />
          <p>Mode</p>
          <input type="checkbox" name="mode" value="In Person" id="modeTradional" class="mode" /><label for="modeTraditional">Traditional</label><br />
          <!--<input type="checkbox" name="mode" value="WWW Online" id="modeOnline" class="mode" /><label for="modeOnline">Online</label><br />-->
          <input type="checkbox" name="mode" value="Hybrid" id="modeHybrid" class="mode"  /><label for="modeHybrid">Hybrid</label><br />
          <input type="checkbox" name="mode" value="Interactive Classroom Video" id="modeIV"/ class="mode" ><label for="modeIV">Interactive Video</label>
          <br /><br />
          <p>Time</p>
          <input type="radio" name="time" value="1" id="timeDay" class="time"  /><label for="timeDay">Day</label><br />
          <input type="radio" name="time" value="2" id="timeNight" class="time"  /><label for="timeNight">Night</label><br />
          <input type="radio" name="time" value="All" id="timeAll" class="time" checked /><label for="timeAll">Any Time</label><br />
          <input type="checkbox" name="day" value="Friday" id="Friday" class="day"  /><label for="Friday">FT Friday&rsquo;s</label><br />
          <input type="checkbox" name="day" value="Saturday" id="Saturday" class="day"  /><label for="Saturday">FT Saturday&rsquo;s</label>
         </fieldset>
         <br /><br />
        <input type="submit" id="optionSubmit" title="Save Options" value="Save Options" />  
      </form>
      <div style="clear:both"></div>
  </div><!--end hiddenOptions-->
	</ul>
</div><!--end optionsBar -->
			</div>
			</div><!-- #content -->
		</div><!-- #mainContainer -->

<?php get_footer(); ?>