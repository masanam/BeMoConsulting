$(document).ready(function() {

	// Header Scroll
	$(window).on('scroll', function() {
		var scroll = $(window).scrollTop();

		if (scroll >= 50) {
			$('#header').addClass('fixed');
		} else {
			$('#header').removeClass('fixed');
		}
	});

	// Waypoints
	$('.work').waypoint(function() {
		$('.work').addClass('animated fadeIn');
	}, {
		offset: '75%'
	});
	$('.download').waypoint(function() {
		$('.download .btn').addClass('animated tada');
	}, {
		offset: '75%'
	});

	// Fancybox
	$('.work-box').fancybox();

	// Flexslider
	$('.flexslider').flexslider({
		animation: "fade",
		directionNav: false,
	});

	// Page Scroll
	var sections = $('section')
		nav = $('nav[role="navigation"]');

	$(window).on('scroll', function () {
	  	var cur_pos = $(this).scrollTop();
	  	sections.each(function() {
	    	var top = $(this).offset().top - 76
	        	bottom = top + $(this).outerHeight();
	    	if (cur_pos >= top && cur_pos <= bottom) {
	      		nav.find('a').removeClass('active');
	      		nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
	    	}
	  	});
	});
	nav.find('a').on('click', function () {
	  	var $el = $(this)
	    	id = $el.attr('href');
		$('html, body').animate({
			scrollTop: $(id).offset().top - 75
		}, 500);
	  return false;
	});

	// Mobile Navigation
	$('.nav-toggle').on('click', function() {
		$(this).toggleClass('close-nav');
		nav.toggleClass('open');
		return false;
	});	
	nav.find('a').on('click', function() {
		$('.nav-toggle').toggleClass('close-nav');
		nav.toggleClass('open');
	});

	window._token = $('meta[name="csrf-token"]').attr('content');

	ClassicEditor.create(document.querySelector('.ckeditor'));
  
	moment.updateLocale('en', {
	  week: {dow: 1} // Monday is the first day of the week
	});
  
	$('.date').datetimepicker({
	  format: 'YYYY-MM-DD',
	  locale: 'en'
	});
  
	$('.datetime').datetimepicker({
	  format: 'YYYY-MM-DD HH:mm:ss',
	  locale: 'en',
	  sideBySide: true
	});
  
	$('.timepicker').datetimepicker({
	  format: 'HH:mm:ss'
	});
  

  
	$('.treeview').each(function () {
	  var shouldExpand = false
	  $(this).find('li').each(function () {
		if ($(this).hasClass('active')) {
		  shouldExpand = true
		}
	  })
	  if (shouldExpand) {
		$(this).addClass('active')
	  }
	});

	
	//move to bottom when done!
	$('.select-all').click(function () {
		let $select2 = $(this).parent().siblings('.select2')
		$select2.find('option').prop('selected', 'selected')
		$select2.trigger('change')
	  });
	  $('.deselect-all').click(function () {
		let $select2 = $(this).parent().siblings('.select2')
		$select2.find('option').prop('selected', '')
		$select2.trigger('change')
	  });
	
	  $('.select2').select2();

});