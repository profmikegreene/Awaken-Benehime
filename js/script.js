/* Author: Michael Greene

*/
// JavaScript Document
/* <![CDATA[ */

//Google Custom Search Engine
google.load('search', '1', {language : 'en'});
google.setOnLoadCallback(function() {
	var customSearchOptions = {};
	var customSearchControl = new google.search.CustomSearchControl(
		'008203677889488416766:mgnbpcq68be', customSearchOptions);
	customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
	var options = new google.search.DrawOptions();
	options.setAutoComplete(true);
	options.enableSearchboxOnly("http://www.rappahannock.edu/search");
	customSearchControl.draw('cse-search-form', options);
}, true);

//Begin jQuery
$(function() {
/* ==================================================================
*
*   Variables
*
* -----------------------------------------------------------------*/
	var $mask = $('#mask');
	var $dropDowns = ['#globalMyRCC', '#moreLinks', '#peopleNav', '#aboutNav',
										'#academicsNav', '#admissionsNav', '#departmentsNav',
										'#libraryNav', '#workforceNav'];
	var $body = $('body');
	var $globalNav = $('#globalNav');
	var $mobileMegaDropdownVisible = false;
	var $megaDropButton = $('#megaDropButton');
	var $top = 0;
		if($body.hasClass('logged-in')) {
			$top = 28;
		}
/* ==================================================================
*
*   Initiation Dropdown menus used across the site
*
* -----------------------------------------------------------------*/
	$($dropDowns.join(', ')).click(function(e){
		e.preventDefault();
		//Define dropdown elements
		var $currentID = $(this).attr('id');
		var $dropdownID = $(this).siblings('div').attr('id');

		//Toggle states
		if ($(this).hasClass('active')) {
			hideDropdown($currentID, $dropdownID);
		}else {
			showDropdown($currentID, $dropdownID);
		}
	});

/* ==================================================================
*
*   Responsive Dropdown Menu
*
* -----------------------------------------------------------------*/
	$('#responsiveMenu').click(function(e){
		e.preventDefault();

		//Define dropdown elements
		var $currentID = $(this).attr('id');
		var $dropdownID = $(this).siblings('div').attr('id');
		$('#'+$dropdownID).addClass('active');
		//Toggle states
		if ($(this).hasClass('active')) {
			hideDropdown($currentID, $dropdownID);
			console.log('responsive if - just ran hideDropdown');

		}else {
			console.log('responsive else');

			//Get the screen height and width
			var maskHeight = $(document).height();
			var maskWidth = $(window).width();

			//Set height of mobile menu to 90% of screen height
			$mobileHeight = $(window).height()*0.9;
			$('#navBar').css('height', $mobileHeight);

			//Turn variables into jQuery selectors
			$d = '#'+$currentID;
			$e = '#'+$dropdownID;

			//Hide all other dropdowns
			//$('.activeDropdown').hide().siblings().removeClass('active');

			//Show current dropdown
			$($d).addClass('active');
			$($e).addClass('activeResponsiveDropdown').show();

			//Set mask size to fill up the whole screen and show mask
			$mask.css({'width':maskWidth,'height':maskHeight}).show();
		}
	});

/* ==================================================================
*
*   Mobile Mega Dropdown Key
*   Screen size < 719px
* -----------------------------------------------------------------*/
	$(document.body).on('click', '#megaDropButton', function(e) {
		e.preventDefault();
		
		//Toggle states
		if ($megaDropButton.hasClass('active')) {
			$megaDropButton.removeClass('active');
			$globalNav.animate({
								top: -110 + $top + 'px'
							}, 1000);
		}else {
			$megaDropButton.addClass('active');
			
			$globalNav.animate({
								top: $top+'px'
							}, 1000);
		}

	});



/* ==================================================================
*
*   Allow users to click anywhere onscreen to remove dropdown
*
* -----------------------------------------------------------------*/
	$('#mask').click(function(e){
		$('.activeDropdown, .activeResponsiveDropdown').hide().removeClass('activeResponsiveDropdown activeDropdown active').siblings().removeClass('active');
		$(this).hide();
	});

/* ==================================================================
*
*   Show Navbar on window resize
*
* -----------------------------------------------------------------*/
$(window).resize(function(e){
	if ($(window).width()>=1024){
		$('#responsiveDropdownMenu').show();

	}
});

	$('#nav h3').click(function(e){
		$('#navBar').show();
	});

	$('#applyNow').mouseover(function() {
		$(this).css({'left' : '-8px'});
	});
	$('#applyNow').mouseout(function() {
		$(this).css({'left' : '-22px'});
	});

/* ==================================================================
*
*   Nivo Slider
*
* -----------------------------------------------------------------*/
	$('#slider').nivoSlider({
		effect: 'fade',
		boxCols: 16,
		boxRows: 10,
		slices:24,
		pauseTime: 5000,
		animSpeed: 400
	});

/* ==================================================================
*
*   Active Data Calendar integration
*
* -----------------------------------------------------------------*/
	var adx="Events are temporarily unavailable. Please check back later.";
	$.ajax(
		{
			dataType: 'script',
			url: 'http://cal.rappahannock.edu/EventListSyndicator.aspx?type=N&number=20&expire=Y&adpid=5&nem=No+events+are+available+that+match+your+request&sortorder=ASC&ver=2.0&target=adx090579'
		}
	);
	setTimeout(function() {if(typeof response=='undefined'){$('#adx080119').html(adx);}}, 5000);

/* ==================================================================
*
*   Responsive Font and Sliders
*
* -----------------------------------------------------------------*/

	//Mobile/small desktop only functions
	$(window).resize(function(){
		setBodyScale('.futureCta', '#whyRCC', 0.25, 300, 200);
		setBodyScale('.currentCta', '#whyRCC', 0.25, 300, 200);
		setBodyScale('.currentCta2', '#whyRCC', 0.25, 300, 200);
		setBodyScale('.banner', '#whyRCC', 0.65, 900, 300);
		nivoScale('.home .nivoSlider', 0.3936);
		if (window.innerWidth < 719 && !$mobileMegaDropdownVisible){
			
			showMobileMegaDropdown();
		} else if (window.innerWidth >= 720) {
			hideMobileMegaDropdown();
		}

	});

	//Fire it when the page first loads:
	setBodyScale('.futureCta', '#whyRCC', 0.25, 300, 200);
	setBodyScale('.currentCta', '#whyRCC', 0.25, 300, 200);
	setBodyScale('.currentCta2', '#whyRCC', 0.25, 300, 200);
	setBodyScale('.banner', '#whyRCC', 0.65, 900, 300);
	if (window.innerWidth < 719){
		nivoScale('.home .nivoSlider', 0.3936);
		showMobileMegaDropdown();
	}




/* ==================================================================
*
*   Creates Mobile mega dropdown menu
*
* -----------------------------------------------------------------*/
	function showMobileMegaDropdown() {
		$mobileMegaDropdownVisible = true;
		$globalNav.delay(500)
							.animate({
								top: -110 + $top + 'px'
							}, 1000);
	}

	function hideMobileMegaDropdown() {
		$globalNav.css('top',$top);
		$mobileMegaDropdownVisible = false;
	}

/* ==================================================================
*
*   Scales Nivo-Sliders on mobile devices
*
* -----------------------------------------------------------------*/
	function nivoScale($elem, $aspectRatio){
		$w = $($elem).width();
		$h = $w * $aspectRatio;
		$($elem + ' img').css('height', $h);
	}

/* ==================================================================
*
*   Scale font-size dynamically
*
* -----------------------------------------------------------------*/
  function setBodyScale($elem, $source, $scale, $min, $max) {
      var scaleSource = $($source).width(), //$body.width()
          scaleFactor = $scale, //0.35
          maxScale = $min,	//600
          minScale = $max; //30

      var fontSize = scaleSource * scaleFactor; //Multiply the width of the body by the scaling factor:

      if (fontSize > maxScale) fontSize = maxScale;
      if (fontSize < minScale) fontSize = minScale; //Enforce the minimum and maximums

      $($elem).css('font-size', fontSize + '%');
  }

/* ==================================================================
*
*   Shows invisiible mask to allow dropdowns to be cancelled by
*   clicking anywhere in the browser window
*
* -----------------------------------------------------------------*/
	function showDropdown(d,e) {


		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();

		//Turn variables into jQuery selectors
		d = '#'+d;
		e = '#'+e;

		//Hide all other dropdowns
		// if( $('#responsiveMenu').is(':visible')){
		// 	$(d).siblings().hide().removeClass('activeDropdown');
		// 	console.log('showDropdown if '+d+' '+e);
		// }else {
			$('div.activeDropdown').hide().siblings().removeClass('active');

			console.log('showDropdown else '+e);

		// }
		//Show current dropdown
		$(d).addClass('active');
		$(e).addClass('activeDropdown').show();

		//Set mask size to fill up the whole screen and show mask
		$mask.css({'width':maskWidth,'height':maskHeight}).show();
	}//end showDropdown

/* ==================================================================
*
*   Hides dropdown elements and mask
*
* -----------------------------------------------------------------*/
	function hideDropdown(d,e) {
		//Turn variables into jQuery selectors
		d = '#'+d;
		e = '#'+e;
		if(e!=='responsiveDropdownMenu'){
			$(e).removeClass('activeDropdown').hide().removeClass('active');
			console.log('hideDropdown');
		}
		$mask.hide();
		$(d).removeClass('active');
	}//end hideDropdown


});//end jQuery


function myVCCSValidate() {
	document.authx.password.value = document.authx.password_temp.value;
	document.authx.password_temp.value = "";
	return true;
}




/* ]]> */











