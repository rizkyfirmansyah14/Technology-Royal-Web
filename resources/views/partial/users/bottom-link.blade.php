        <script src="vendors/base/vendor.bundle.base.js"></script>
		<script src="vendors/owl.carousel/js/owl.carousel.js"></script>
		<script src="vendors/aos/js/aos.js"></script>
		<script src="vendors/jquery-flipster/js/jquery.flipster.min.js"></script>
		<script src="js/template.js"></script>

		<!-- card script -->

		<!-- Bootstrap -->
		<script src="card-style/js/bootstrap.bundle.min.js"></script>
		<!-- Load jQuery require for isotope -->
		<script src="card-style/js/jquery.min.js"></script>
		<!-- Isotope -->
		<script src="card-style/js/isotope.pkgd.js"></script>
		<!-- Page Script -->
		<script>
			$(window).load(function() {
				// init Isotope
				var $projects = $('.projects').isotope({
					itemSelector: '.project',
					layoutMode: 'fitRows'
				});
				$(".filter-btn").click(function() {
					var data_filter = $(this).attr("data-filter");
					$projects.isotope({
						filter: data_filter
					});
					$(".filter-btn").removeClass("active");
					$(".filter-btn").removeClass("shadow");
					$(this).addClass("active");
					$(this).addClass("shadow");
					return false;
				});
			});
		</script>
		<!-- Templatemo -->
		<script src="card-style/js/templatemo.js"></script>
		<!-- Custom -->
		<script src="card-style/js/custom.js"></script>
