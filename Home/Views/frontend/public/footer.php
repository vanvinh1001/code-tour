   <!--footer -->
   <footer>
    <section class="footer footer_w3layouts_section_1its py-5">
	<div class="container py-md-4">
		<div class="row footer-top">
			<div class="col-lg-4 col-md-6 col-sm-6 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>About Us</h3>
				</div>
				<div class="footer-text">
					<p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at tellus.
						Nulla porttitor accumsana tincidunt. Vestibulum ante ipsum primis tempus convallis.</p>
					
				</div>
			</div>
			
			<div class="col-lg-3 col-md-6 col-sm-3 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Useful Links</h3>
				</div>
				<ul class="links">
					<li><a href="./index.php?controller=home">Home</a></li>
					<li><a href="./index.php?controller=about">About</a></li>
					<li><a href="./index.php?controller=tour">Tour</a></li>
					<li><a href="./index.php?controller=post">Post</a></li>
					<li><a href="./index.php?controller=contact">Contact Us</a></li>
				</ul>
			</div>
			<div class="col-lg-5 col-md-12 col-sm-12 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Subscribe</h3>
				</div>
				<div class="footer-text">
					<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<button class="btn1"><i class="fa fa-envelope" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>
					</form>
				</div>
				<ul class="social_section_1info">
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-google-plus-g"></i></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin-in"></i></i></a></li>
					</ul>
			</div>
		</div>
		<div class="row mt-md-5">
			<div class="col-md-4 phn_w3l">
				<h6 class="text-btm text-white">Phone : +2534894364</h6>
			</div>
			<div class="col-md-4 fax_w3l">
				<h6 class="text-btm text-white">Fax : +2534894364</h6>
			</div>
			<div class="col-md-4 ema-w3l">
				<h6 class="text-btm text-white">Email : <a href="mailto:info@example.com">info@example.com</a></h6>
			</div>
		</div>
	</div>
</section>
</footer>
<!-- //footer -->
<script>
$('#success-alert').fadeTo(2000, 500).slideUp(500, function(){
        $('#success-alert').slideUp(500);
});
$(document).ready(function() {
$('#myWish').click(function showAlert() {
    $('#success-alert').fadeTo(2000, 500).slideUp(500, function() {
    $('#success-alert').slideUp(500);
    });
});
});
</script>
