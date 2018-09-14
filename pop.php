<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	

<style>
	/* Styling the Popup Window */

.popup-trigger {
	display: block;
	color: #000;
	cursor: pointer;
}

.popup {
	display: none;
	position: absolute;
	top: 100px;
	left: 50%;
	width: 700px;
	margin-left: -350px;
	padding: 50px 30px;
	background: #fff;
	color: #333;
	font-size: 19px;
	line-height: 30px;
	border: 1px solid #150E2D;
	z-index: 9999;
}

.popup-mobile {
	position: relative;
	top: 0;
	left: 0;
	margin: 30px 0 0;
	width: 100%;
}

.popup-btn-close {
	position: absolute;
	top: 8px;
	right: 14px;
	color: #4EBD79;
	font-size: 14px;
	font-weight: bold;
	text-transform: uppercase;
	cursor: pointer;
}

.team-head {
	text-align: center;
}
</style>
	


<a class="popup-trigger" rel="nofollow">Popup Madrid</a>
<div class="popup">
  <div class="row">
    <div class="col-sm-12">
      <h1 class="team-head">Manish Ranjan</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4"><img height="201px" width="199px" src="https://centrik.in/wp-content/uploads/2017/02/user-image-.png"></div>
    <div class="col-sm-8">Madrid is a city in Europe and the capital and largest city of Spain. The population of the city is almost 3.2 million and that of the Madrid metropolitan area, around 6.3 million. The population of the city is almost 3.2 million and that of the Madrid metropolitan area </div>
  </div>
  <span class="popup-btn-close">close</span>
</div>



	
<script>
		// Popup Window
		var scrollTop = '';
		var newHeight = '100';

		$(window).bind('scroll', function() {
		   scrollTop = $( window ).scrollTop();
		   newHeight = scrollTop + 100;
		});

		$('.popup-trigger').click(function(e) {
  		 e.stopPropagation();
		 if(jQuery(window).width() < 767) {
		   $(this).after( $(this).nextAll('.popup:first') );
		   $(this).nextAll('.popup:first').show().addClass('popup-mobile').css('top', 0);
		   $('html, body').animate({
				scrollTop: $(this).nextAll('.popup:first').offset().top
			}, 500);
		 } else {
			 $('.popup').hide();
			 $(this).nextAll('.popup:first').removeClass('popup-mobile').css('top', newHeight).toggle();
		 };
		});

		$('html').click(function() {
		 $('.popup').hide();
		});

		$('.popup-btn-close').click(function(e){
		  $(this).parent().hide();
		});

		$('.popup').click(function(e){
		  e.stopPropagation();
		});
	</script>