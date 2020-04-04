jQuery(document).ready(function($) {

	var params = {
		mailingListWrap: $('.mailing-list-overlay-wrap'),
		delay: 3000,
		fade: 500,
		viewabilty: 8000
	}


	var WWCClass = function(){
		var events = {
			init: function() {
				wwc.events();
				wwc.viewability();
				wwc.moneyBlockDetect();
			},
			events: function(){
				wwc.mailingList();
			},
			mailingList: function(){
				/*setTimeout(function(){
					params.mailingListWrap.fadeIn(300);
				}, params.delay);*/
				$('#get-whisky-news-btn').on('click', function(){
					params.mailingListWrap.fadeIn(params.fade);
				});
				$('.mailing-list-overlay').on('click', function(){
					params.mailingListWrap.fadeOut(params.fade);
					//$('.mailing-list-modal').fadeOut(300);
				});
			},
			viewability: function(){
				$('.adnxs-desktop').addClass('viewability');
				setTimeout(function(){
					console.log('vieabilty removed');
					$('.adnxs-desktop').removeClass('viewability');
				}, params.viewabilty);
			},
			moneyBlockDetect: function() {
				var url = 'https://adservice.google.com/adsid/integrator.js',
				detect = document.createElement("script");

				detect.onerror=function(e){
					// set ga
					console.log('$$$ was blocked -- $$$ Block Detector');
				};
				detect.onload = function(e){
					// set ga
					console.log('No $$$ was blocked -- $$$ Block Detector');
				}
				detect.src = url;
				document.head.appendChild( detect );
			}
		}
		return events;
	};
	var wwc = new WWCClass();
	wwc.init();


	$('.menu-icon').on('click', function(e) {
		e.preventDefault();
		$('.mobile-menu').show().animate({
			'marginLeft': 0 
		}, 300);
	});

	$('.close-menu-btn').on('click', function(e) {
		e.preventDefault();
		$('.mobile-menu').animate({
			'marginLeft': -100 + '%'
		}, 300, function(){ $('.mobile-menu').hide(); });
	});

	$('.simplefavorites-clear').on('click', function(){
		setTimeout(function(){
			window.location.href='https://weewhiskyconnection.com/favorites-cleared/';
		}, 1000);
	});

	$('.description-button').on('click', function(e){
		e.preventDefault();
		$('html, body').animate({
		    'scrollTop': $('#single-description').offset().top
		}, 1000);
	});

	$('.tasting-button').on('click', function(e){

		e.preventDefault();
		//console.log('description button');
		$('html, body').animate({
		    'scrollTop': $('#single-tasting').offset().top
		}, 1000);
	});

	$('.where-to-buy-button, .where-to-buy-button').on('click', function(e){
		e.preventDefault();
		$('html, body').animate({
		    'scrollTop': $('.where-to-buy-section').offset().top
		}, 1000);
	});

	$('.whisky-button').on('click', function(e){
		e.preventDefault();
		$('html, body').animate({
		    'scrollTop': $('#dist-whiskies').offset().top
		}, 1000);
	});

	$('.dist-img-button').on('click', function(e){
		e.preventDefault();
		$('html, body').animate({
		    'scrollTop': $('.dist-img-section').offset().top
		}, 1000);
	});

	$('.dist-map-button').on('click', function(e){
		e.preventDefault();
		$('html, body').animate({
		    'scrollTop': $('.dist-map-section').offset().top
		}, 1000);
	});


	$('#menu-icon').on('click', function() {
		$('#nav-wrap').fadeIn(500);
	});
	
	$('.close-menu').on('click', function() {
		$('#nav-wrap').fadeOut(500);
	});

	$('.filter-icon').on('click', function(){
		console.log('Yeahp!!!!!!!!!!!!!!!!!!!!!!!!!');
		$('#filter-wrap').slideToggle();
	});

	
	
	function update(){ 
	    var pos = $(window).scrollTop();
	    $('.parallax').css('transform', 'translate3d(0px,' + pos/4 + 'px, 0px');
	};
	update();
	$(window).on('scroll', update);

	var animation = 1;

	$('.menu-item-has-children').on('mouseenter', function() {
		if(animation) {
			//animation = 0;
			$(this).find('.sub-menu').show();//('fast', function() {animation=1;});		
		}	
	});
	$('.menu-item-has-children').on('mouseleave', function() {
		if(animation) {
			//animation = 0;
			$(this).find('.sub-menu').hide();//'fast', function() {animation=1;});
		}
	});


	// cookie stuff
	function setCookie(cname, cvalue, exdays) {
	    var d = new Date();
	    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
	    var expires = "expires="+d.toUTCString();
	    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}

	function getCookie(cname) {
	    var name = cname + "=";
	    var ca = document.cookie.split(';');
	    for(var i = 0; i < ca.length; i++) {
	        var c = ca[i];
	        while (c.charAt(0) == ' ') {
	            c = c.substring(1);
	        }
	        if (c.indexOf(name) == 0) {
	            return c.substring(name.length, c.length);
	        }
	    }
	    return "";
	}

	function checkCookie() {
	    var user = getCookie("wwc-age-verified");
	    if (user != "") { // cookie exists
	        //console.log("Welcome again " + user + " cookie is set");
	    } else { //cookie does not exist
	    	//console.log('cookie is not set');
			$('.age-verification-wrap').fadeIn(0);	
	    }
	}

	// on load check cookie and decide weather or not to show overlay
	checkCookie();


	$('.verified').on('click', function(e){
		e.preventDefault();
		$('.age-verification-wrap').fadeOut(500);
		setCookie("wwc-age-verified", "active-user", 90);
	});

	$('.unverified').on('click', function(e){
		e.preventDefault();
		location.href = "https://www.cdc.gov/alcohol/fact-sheets/underage-drinking.htm";
	});





	/*function detectmob() { 
	 if( navigator.userAgent.match(/Android/i)
	 || navigator.userAgent.match(/webOS/i)
	 || navigator.userAgent.match(/iPhone/i)
	 || navigator.userAgent.match(/iPad/i)
	 || navigator.userAgent.match(/iPod/i)
	 || navigator.userAgent.match(/BlackBerry/i)
	 || navigator.userAgent.match(/Windows Phone/i)
	 ){
	    return true;
		
	  }
	 else {
	    return false;
	  }
	}

	var mobCheck = detectmob();

	if(mobCheck == true || window.ActiveXObject || "ActiveXObject" in window){

		$('.overlay_info').remove();
		
	} else {*/

	//if any version of ie
	if(window.ActiveXObject || "ActiveXObject" in window){

		//$('.overlay_info').remove();
	
	}

		


	/*Mobile Menu*/
	$(".nav-icon").on("click", function(){
		$("#menu-mobile").slideToggle();
		$(this).toggleClass("active");
	});
	

	

	
}(jQuery));