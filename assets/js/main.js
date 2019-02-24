$.noConflict();

jQuery(document).ready(function($) {

	"use strict";

	[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
		new SelectFx(el);
	});

	jQuery('.selectpicker').selectpicker;


	

	$('.search-trigger').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').addClass('open');
	});

	$('.search-close').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').removeClass('open');
	});

	$('.equal-height').matchHeight({
		property: 'max-height'
	});

	// var chartsheight = $('.flotRealtime2').height();
	// $('.traffic-chart').css('height', chartsheight-122);


	// Counter Number
	$('.count').each(function () {
		$(this).prop('Counter',0).animate({
			Counter: $(this).text()
		}, {
			duration: 3000,
			easing: 'swing',
			step: function (now) {
				$(this).text(Math.ceil(now));
			}
		});
	});


	 
	 
	// Menu Trigger
	$('#menuToggle').on('click', function(event) {
		var windowWidth = $(window).width();   		 
		if (windowWidth<1010) { 
			$('body').removeClass('open'); 
			if (windowWidth<760){ 
				$('#left-panel').slideToggle(); 
			} else {
				$('#left-panel').toggleClass('open-menu');  
			} 
		} else {
			$('body').toggleClass('open');
			$('#left-panel').removeClass('open-menu');  
		} 
			 
	}); 

	 
	$(".menu-item-has-children.dropdown").each(function() {
		$(this).on('click', function() {
			var $temp_text = $(this).children('.dropdown-toggle').html();
			$(this).children('.sub-menu').prepend('<li class="subtitle">' + $temp_text + '</li>'); 
		});
	});


	// Load Resize 
	$(window).on("load resize", function(event) { 
		var windowWidth = $(window).width();  		 
		if (windowWidth<1010) {
			$('body').addClass('small-device'); 
		} else {
			$('body').removeClass('small-device');  
		} 
		
	});
  
	const pesan = $('#pesan');
	$('#pesan').on('click', function(){
		Swal.fire(
			'Success',
			'Profile anda sudah baru!',
			'success'
		  )
	  });

	 
	 
		$('#table').dataTable( {

		"scrollX": true,
		scrollCollapse : true
			
		} );
	
	//sweetalert
	const hapus = $('.hapus');
	hapus.on('click', function(e){
	e.preventDefault();
	let href = $(this).attr('href');
	Swal.fire({
		title: 'Are you sure?',
		text: "Data akan dihapus!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, Hapus saja!'
	  }).then((result) => {
		if (result.value) {
		 document.location.href = href;
		}
	  })
	});

	const fData = $('.flash-data').data('flashdata');
	if(fData){
		Swal.fire({
		type: 'success',
  		title: 'Data berhasil ' + fData,
  		showConfirmButton: false,
  		timer: 1500
		  })
	}

	const fDataGagal = $('.flash-data-gagal').data('flashdata');
	if(fDataGagal){
		Swal.fire({
		type: 'error',
  		title: 'Data gagal ' + fDataGagal,
  		showConfirmButton: false,
  		timer: 1500
		  })
	}


	


});


 
