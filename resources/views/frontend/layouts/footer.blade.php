
	<!-- Start Footer Area -->
	<footer class="footer">
		<div class="footer-contact container">
		<div class="navbar p-0" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto d-block right-items-menu pt-3">
      

      <li class="nav-item">
	  <a class="nav-link" href="tel:2027263100">  Phone - 202-726-3100 </a>
</li>
<li class="nav-item">
	  <a class="nav-link" href="tel:8882108110">  Toll Free - 888-210-8110 </a>
</li>
<li class="nav-item">
	  <a class="nav-link" href="mailto:contact@nhmedsupply.com">  Email - contact@nhmedsupply.com </a>
</li>
		</div>

		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-lg-3 col-md-6 col-12 p-0">
						<!-- Single Widget -->
						<div class="single-footer about">
						<h4>About Us</h4>
						<ul>
						<li><a href="#">About Us</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Reviews</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12 p-0">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Quick Links</h4>
							<ul>
								<li><a href="#">Place Prescription Order</a></li>
								<li><a href="#">WIC</a></li>
								<li><a href="#">Show Room</a></li>
								
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12 p-0">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Help</h4>
							<ul>
							<li><a href="{{route('contact')}}">Contact Us</a></li>
								
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12 p-0">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Follow Us</h4>
							<!-- Single Widget -->
							
							<!-- End Single Widget -->
							<div class="sharethis-inline-follow-buttons"></div>
							<img class="mt-4 footer-logo mb-4" src="https://www.nhmedsupply.com/wp-content/uploads/2021/11/cropped-d11-2-1-300x72.png">
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container p-0">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
							<ul>
							
								
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Site Map</a></li>
							</ul>
								<p>Copyright © {{date('Y')}} New Hampshire Medical Supply</p>
							</div>
						</div>
						<!-- <div class="col-lg-6 col-12">
							<div class="right">
								<img src="{{asset('backend/img/payments.png')}}" alt="#">
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
 
	<!-- Jquery -->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{asset('frontend/js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<!-- Color JS -->
	<script src="{{asset('frontend/js/colors.js')}}"></script>
	<!-- Slicknav JS -->
	<script src="{{asset('frontend/js/slicknav.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{asset('frontend/js/owl-carousel.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{asset('frontend/js/magnific-popup.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{asset('frontend/js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{asset('frontend/js/nicesellect.js')}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{asset('frontend/js/flex-slider.js')}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{asset('frontend/js/scrollup.js')}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{asset('frontend/js/onepage-nav.min.js')}}"></script>
	{{-- Isotope --}}
	<script src="{{asset('frontend/js/isotope/isotope.pkgd.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{asset('frontend/js/easing.js')}}"></script>

	<!-- Active JS -->
	<script src="{{asset('frontend/js/active.js')}}"></script>

	
	@stack('scripts')
	<script>
		setTimeout(function(){
		  $('.alert').slideUp();
		},5000);
		$(function() {
		// ------------------------------------------------------- //
		// Multi Level dropdowns
		// ------------------------------------------------------ //
			$("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
				event.preventDefault();
				event.stopPropagation();

				$(this).siblings().toggleClass("show");


				if (!$(this).next().hasClass('show')) {
				$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
				}
				$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
				$('.dropdown-submenu .show').removeClass("show");
				});

			});
		});
	  </script>