<!-- footer -->
<div class="w3l_footer">
	<div class="container">
		<!-- Map -->
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3835.722220392341!2d108.18427717917335!3d15.975876212466652!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTXCsDU4JzMxLjkiTiAxMDjCsDExJzA1LjIiRQ!5e0!3m2!1svi!2sus!4v1567845734515!5m2!1svi!2sus" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
		<!-- //Map -->
		<div class="w3ls_footer_grids">

			<div class="w3ls_footer_grid">
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="w3ls_footer_grid_leftl">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<div class="w3ls_footer_grid_leftr" id="contact">
						<h4>Địa chỉ</h4>
						<p>Dương Sơn - Hòa Vang</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="w3ls_footer_grid_leftl">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>
					<div class="w3ls_footer_grid_leftr">
						<h4>Email</h4>
						<p>
							<a href="/">nhakhoahieuhandanang@gmail.com</a>
						</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="w3ls_footer_grid_leftl">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<div class="w3ls_footer_grid_leftr">
						<h4>Hotline</h4>
						<p>0905 050 824</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>

<!-- //footer -->
<script type="application/x-javascript">
	addEventListener("load", function () {
		setTimeout(hideURLbar, 0);
	}, false);

	function hideURLbar() {
		window.scrollTo(0, 1);
	}
</script>
<script type='text/javascript' src='assets/client/js/jquery-2.2.3.min.js'></script>
	<!-- //js -->
	<!-- requried-jsfiles-for owl -->
	<script src="assets/client/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo2").owlCarousel({
				items: 1,
				lazyLoad: false,
				autoPlay: true,
				navigation: false,
				navigationText: false,
				pagination: true,
			});
		});
	</script>
	<!-- //requried-jsfiles-for owl -->

	<script src="assets/client/js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!--search-bar-->
	<script src="assets/client/js/main.js"></script>
	<!--//search-bar-->
	<!-- Calendar -->
	<script src="assets/client/js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->
	<!-- Gallery-script -->
	<script src="assets/client/js/simpleLightbox.js"></script>
	<script>
		$('.gallery-columns a').simpleLightbox();
	</script>
	<!-- //Gallery-script -->

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="assets/client/js/move-top.js"></script>
	<script type="text/javascript" src="assets/client/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!--js for bootstrap working-->
	<script src="assets/client/js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<script type="text/javascript" src="assets/client/js/toastr.min.js"></script>
	@if(session('success'))
  <script type="text/javascript">
    toastr.success('{{ session('success') }}', 'Thông báo', {timeOut: 5000});
  </script>
 @endif
 @if(session('error'))
  <script type="text/javascript">
    toastr.error('{{ session('error') }}', 'Thông báo', {timeOut: 5000});
  </script>
  @endif