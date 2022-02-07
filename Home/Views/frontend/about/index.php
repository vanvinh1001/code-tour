<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php $this->view("frontend.public.base") ?>
</head>

<body>
<?php $this->view("frontend.public.header") ?>
    <!-- //banner -->
     <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="./index.php?controller=home">Trang chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Giới thiệu</li>
        </ol>
    </nav>
	<!-- about -->
	<section class="welcome py-5">
		<div class="container py-md-4 mt-md-3">
			<div class="w3ls-titles text-center">
				<h3 class="title"><span class="hdng">Giới thiệu</span></h3>
				<span class="btmspn">
					<i class="fas fa-bus"></i>
				</span>
				<p class="mt-2 mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel ab, nesciunt quod!</p>
			</div>

			<div class="row about-tp mt-md-12 pt-5">
				<div class="col-lg-12 welcome-left">
					<h3>Welcome</h3>
					<h4>Được thành lập từ năm 2008 giữa lúc nền kinh tế trong nước và Quốc tế đang suy thoái, Du Lịch Việt xuất hiện trên thị trường du lịch Việt Nam với sản phẩm du lịch        
						trong nước và Quốc tế chất lượng cao, giá thành rẻ đến bất ngờ. Từ những đường tour du lịch nội địa, công ty triển khai các đường tour du lịch nước ngoài 
						với điểm đến là các quốc gia trong khu vực như Campuchia, Thái Lan, Singapore, Malaysia, Hong Kong, Trung Quốc, Hàn Quốc…cùng các sản phẩm dịch vụ du lịch đa dạng, 
						nhận được sự phản hồi tích cực của khách hàng như: Du lịch trọn gói trong nước và Quốc tế khởi hành hàng ngày; Du lịch nghỉ dưỡng cao cấp, Trăng mật lãng mạn, Khám phá mạo hiểm. 
						Song song với các đường tour ngắn, Du Lịch Việt cũng tiếp tục khai thác các thị trường xa như Châu Âu, Nga, Mỹ, Úc… Đặc biệt, Công ty đã phát triển mạnh các tour du lịch hành hương Công Giáo 
						đặc biệt đi đến Đất Thánh Israel, Tòa Thánh Vatican, Fatima…</h4>
					<p>Công ty Du Lịch Việt luôn nỗ lực hết mình và không ngừng sáng tạo, đổi mới, phấn đấu trở thành công ty quy mô và chuyên nghiệp nhất trong lĩnh vực du lịch lữ hành. 
						Với tầm nhìn xa của Ban Lãnh đạo công ty cùng đội ngũ hơn 500 cán bộ công nhân viên, hướng dẫn viên năng động, chuyên nghiệp; Kết hợp thế mạnh về nguồn tài chính vững chắc, 
						mối quan hệ bền vững với các đối tác trong và ngoài nước; Công ty đã và ngày càng xây dựng nhiều sản phẩm du lịch và loại hình du lịch đa dạng phục vụ nhu cầu của khách hàng; Đem lại sự hài lòng, thoải mái, sự trải nghiệm thú vị trong từng chuyến thưởng ngoạn du lịch đầy đam mê và hấp dẫn cùng Du Lịch Việt.</p>
				</div>
				<div class="col-lg-12 welcome-right">
					<div class="welcome-right-top">
						<img src="./public/images/g1.jpg" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //about -->
	<!-- banner bottom -->
	<div class="banner-bottom py-5">
		<div class="container py-xl-3 py-lg-3">
			<div class="row">
				<div class="col-md-9 banner-left-bottom-w3ls">
					<h3 class="text-white my-3">Fastest Way to Compare and Book over 450 Cheap Flights</h3>

				</div>
				<div class="col-md-3 button">
					<a href="about.html" class="w3ls-button-agile">Read More
						<i class="fas fa-hand-point-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner bottom -->



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
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="contact.html">Contact Us</a></li>
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

    <div class="cpy-right text-center  py-3">
        <p class="text-white">© 2018 Expedition. All rights reserved | Design by
            <a href="http://w3layouts.com" class="text-white"> W3layouts.</a>
        </p>
    </div>
    <!-- //footer -->

    <!-- login  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name" required="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="Password" id="password" required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control serv_bottom" value="Login">
                        </div>
                        <div class="row sub-w3l my-3">
                            <div class="col sub-agile">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1" class="text-secondary">
                                    <span></span>Remember me?</label>
                            </div>
                            <div class="col forgot-w3l text-right">
                                <a href="#" class="text-secondary">Forgot Password?</a>
                            </div>
                        </div>
                        <p class="text-center text-secondary">Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-dark font-weight-bold">
                                Register Now</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- // login -->
    <!-- register -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-rname" required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder=" " name="Email" id="recipient-email" required="">
                        </div>
                        <div class="form-group">
                            <label for="password1" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="Password" id="password1" required="">
                        </div>
                        <div class="form-group">
                            <label for="password2" class="col-form-label">Confirm Password</label>
                            <input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password2" required="">
                        </div>
                        <div class="sub-w3l">
                            <div class="sub-agile">
                                <input type="checkbox" id="brand2" value="">
                                <label for="brand2" class="mb-3">
                                    <span></span>I Accept to the Terms & Conditions</label>
                            </div>
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control serv_bottom" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- // register -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- contact validation js -->
    <script src="js/form-validation.js"></script>
   
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
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
    <script src="js/SmoothScroll.min.js"></script>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
    
</body>
</html>