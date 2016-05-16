<!-- Load jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-2.1.3.min.js"><\/script>')</script>

<!-- Plugins -->
<script src="js/vendor/bootstrap.min.js"></script> 
<script src="js/detect-browser.js"></script>
<script src="js/jquery.scrollomatic.js"></script>
<script src="js/jquery.cookiecuttr/jquery.cookie.js"></script>
<script src="js/jquery.cookiecuttr/jquery.cookiecuttr.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>

<!---- Adds support for Type Rendering Mix: http://typerendering.com/#instructions -->
<script src="js/trmix.min.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. --
<script>
	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='https://www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
<!---->

<script type="text/javascript">

	// Avoid `console` errors in browsers that lack a console.
	(function() {
		var method;
		var noop = function () {};
		var methods = [
			'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
			'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
			'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
			'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
		];
		var length = methods.length;
		var console = (window.console = window.console || {});
	
		while (length--) {
			method = methods[length];
	
			// Only stub undefined methods.
			if (!console[method]) {
				console[method] = noop;
			}
		}
	}());
	
	// Core JS

	// START functions
	
	function defaultValue(id,value,formId){
		$(id).val(value);
		$(id).focus(function(){
			if($(id).val() == value){
				$(id).val('');
				$(id).css('color','#999999');
			};
		});
		$(id).blur(function(){
			$(id).css('color','#999999');
			if($(id).val() == ''){
				$(id).val(value);
				$(id).css('color','#cccccc');
			};
		});
		$(formId).submit(function(){
			if($(id).val() == value){
				$(id).val('');
				$(formId).validate();
			};
		});
	};
	
	function yesNoBtn(){
		$('.btn-yes').click(function(){
			$(this).parent().children('a').removeClass('btn-green');
			$(this).parent().children('a').removeClass('btn-red');
			$(this).addClass('btn-green');
			$(this).parent().parent().children('input[type="text"]').val('Yes');
		});
		$('.btn-no').click(function(){
			$(this).parent().children('a').removeClass('btn-green');
			$(this).parent().children('a').removeClass('btn-red');
			$(this).addClass('btn-red');
			$(this).parent().parent().children('input[type="text"]').val('No');
		});
	};
	
	// Loads Textarea Counter
	function textareaCounter(id){
		$(id).keyup(function(){
			var maxlength = parseInt($(this).attr('maxlength'));
			var left = maxlength - $(this).val().length;
			if (left < 0) {
				left = 0;
			}
			$(id + '-counter').text('Characters left: ' + left);
		});
	};
	
	// END functions

	// START document.ready
	$(document).ready(function() {
		
		$('.btn-menu').click(function(){
			$('nav').slideToggle();
		});
		
		$(window).resize(function(){
			if($(window).width() > 920){
				$('nav').show();
			};		
		});
		
		// Reg form default values
		defaultValue('.form-reg #name','Name','#form-reg');
		defaultValue('.form-reg #company_name','Company Name','#form-reg');
		defaultValue('.form-reg #option_5','Option 5','#form-reg');
		defaultValue('.form-reg #option_6','Option 6','#form-reg');
		defaultValue('.form-reg #queries','Any questions','#form-reg');

		// Contact form default values
		defaultValue('.form-contact #name','Name','#form-contact');
		defaultValue('.form-contact #email','Email','#form-contact');
		defaultValue('.form-contact #organisation','Organisation','#form-contact');
		defaultValue('.form-contact #job_title','Job Title','#form-contact');
		defaultValue('.form-contact #message','Message','#form-contact');
	
		yesNoBtn();
		textareaCounter('#queries');
		textareaCounter('#message');
				
		if(window.location.href.indexOf("regThankyou") > -1) {
			$("html, body").css({height: "100%", overflow: "hidden"});
			$('.thankyou-overlay').addClass('regThankyou');
			$('.regThankyou').fadeIn();
			$('.regThankyou span').text('registering');
		}
							
		if(window.location.href.indexOf("contactThankyou") > -1) {
			$("html, body").css({height: "100%", overflow: "hidden"});
			$('.thankyou-overlay').addClass('contactThankyou');
			$('.contactThankyou').fadeIn();
			$('.contactThankyou span').text('contacting us');
		}
		
		$('.thankyou-overlay .btn').click(function(){
			$("html, body").css({height: "auto", overflow: "auto"});
			$('.thankyou-overlay').removeClass('regThankyou');
			$('.thankyou-overlay').removeClass('contactThankyou');
			$('.thankyou-overlay').fadeOut();
		});
		
		$('[data-toggle="tooltip"]').tooltip();

		$('a.scroll').scrollomatic({
			duration: 200
		});
		
		$(document).on('click','.navbar-collapse.in',function(e) {
			if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
				$(this).collapse('hide');
			}
		});

		$.cookieCuttr();
		
		// Adds current year to copyright section in footer
		$('.current-year').text( (new Date).getFullYear() );
		
		// Fixes navbar height issue for mobile where the navbar header prevents scrolling to bottom of menu
		$(".navbar-collapse").css({ maxHeight: $(window).height() - $(".navbar-header").height() + "px" });	
		
		// Adds touch support for main slider
		$("#mainSlider").swiperight(function() {  
			$("#mainSlider").carousel('prev');  
		});  
		$("#mainSlider").swipeleft(function() {  
			$("#mainSlider").carousel('next');  
		}); 											
				
	});
	// END document.ready

</script>