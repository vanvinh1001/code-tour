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

<!-- banner bottom -->
<div class="banner-bottom py-5">
        <?php 
            if(!empty($alert)){
                echo "<div class='alert alert-danger' id='success-alert'>
                <strong>$alert</strong>
            </div>";
            } 
            if(!empty($success)){
                echo "<div class='alert alert-success' id='success-alert'>
                <strong>$success</strong>
            </div>";
            }
        ?>
		<div class="container py-xl-3 py-lg-3">
			<div class="row">
				<div class="col-md-9 banner-left-bottom-w3ls">
					<h3 class="text-white my-3">Cách nhanh nhất để so sánh và đặt chỗ hơn 450 chuyến bay giá rẻ</h3>

				</div>
				<div class="col-md-3 button">
					<a href="about.html" class="w3ls-button-agile">Đọc thêm
						<i class="fas fa-hand-point-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner bottom -->
    <!-- blog -->
    <section class="blog_w3ls py-lg-5">
        <div class="container">
		 <div class="w3ls-titles text-center mb-5">
				<h3 class="title"><span class="hdng">Bài đăng </span>Gần đây</h3>
				<span class="btmspn">
					<i class="fas fa-bus"></i>
				</span>
				<p class="mt-2 mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel ab, nesciunt quod!</p>
			</div>
            <div class="row py-5">
                
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                       
                        <div class="card-body text-center">
							<img src="./Views/frontend/public/web/images/g2.jpg" alt="" class="img-fluid">
							<h5 class="blog-title card-title mt-3 mb-3">
                                <a href="./">Destinations of 2018</a>
                            </h5>
                            <p> Vivamus magna justo,
                                lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit.</p>
                            <a href="services.html" class="service-btn">Read more</a>
                        </div>
                        <div class="card-footer blog_w3icon border-top pt-2 mt-3 d-flex justify-content-between">
                            <small>
                                <b>By <a href="#">admin</a></b>
                            </small>
                            <span><i class="fas fa-calendar-alt"></i>
                               12/08/18 <i class="fas fa-comments"></i> <a href="#">02</a>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                    <div class="card">
                       
                        <div class="card-body text-center">
						<img src="./Views/frontend/public/web/images/g3.jpg" alt="" class="img-fluid">
						<h5 class="blog-title card-title mt-3 mb-3">
                                <a href="services.html">72 Hours in Toronto</a>
                            </h5>
                            <p>Vivamus magna justo,
                                lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit.</p>
                            <a href="services.html" class="service-btn">Read more</a>
                        </div>
                        <div class="card-footer blog_w3icon border-top pt-2 mt-3 d-flex justify-content-between">
                            <small>
                                <b>By <a href="#">admin</a></b>
                            </small>
                           <span><i class="fas fa-calendar-alt"></i>
                               16/08/18 <i class="fas fa-comments"></i> <a href="#">02</a>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
				<!-- blog grid -->
                <div class="col-lg-4 col-md-6 blog-3 mt-md-0 mt-5">
                    <div class="card">
                        
                        <div class="card-body text-center">
							<img src="./Views/frontend/public/web/images/g6.jpg" alt="" class="img-fluid">
                            <h5 class="blog-title card-title mt-3 mb-3">
                                <a href="services.html">Visiting the UAE</a>
                            </h5>
							<p> Vivamus magna justo,
                                lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit.</p>
                            <a href="services.html" class="service-btn">Read more</a>
                        </div>
                        <div class="card-footer blog_w3icon border-top pt-2 mt-3 d-flex justify-content-between">
                            <small>
                                <b>By <a href="#">admin</a></b>
                            </small>
                           <span><i class="fas fa-calendar-alt"></i>
                               22/08/18 <i class="fas fa-comments"></i> <a href="#">02</a>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
            </div>
        </div>
    </section>
    <!-- //blog -->
	<!-- stats -->
	<section class="stat_w3l py-5">
		<div class="container">
		 <div class="w3ls-titles text-center mb-5">
				<h3 class="title text-white"><span class="hdng">Services </span>Fact</h3>
				<span class="btmspn">
					<i class="fas fa-bus"></i>
				</span>
				<p class="mt-2 mx-auto text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel ab, nesciunt quod!</p>
			</div>
			<div class="row py-lg-5 stats-con">
                    <div class="col-lg-3 col-md-6 stats_info counter_grid">
						<div class="stats_info1">
							<i class="fas fa-users"></i>
							<p class="counter">25,000</p>
							<h4>Happy Clients</h4>
						</div>
                    </div>
                    <div class="col-lg-3 col-md-6 stats_info counter_grid">
						<div class="stats_info1">
							<i class="fas fa-fighter-jet"></i>
							<p class="counter">120</p>
							<h4>Amazing Tours</h4>
						</div>
                    </div>
                    <div class="col-lg-3 col-md-6 stats_info counter_grid1">
						<div class="stats_info1">
							<i class="fas fa-briefcase"></i>
							<p class="counter">486</p>
							<h4>Partners</h4>
						</div>
                    </div>
                    <div class="col-lg-3 col-md-6 stats_info counter_grid2">
						<div class="stats_info1">
							<i class="fas fa-comments"></i>
							<p class="counter">6,812</p>
							<h4>Questions Answered</h4>
						</div>
                    </div>
            </div>
		</div>
	</section>
<!-- //stats -->

    <!-- branches -->
    <section class="branches py-md-5 pt-4">
        <div class="container">
          <div class="w3ls-titles text-center mb-5">
				<h3 class="title"><span class="hdng">Best </span>Offers</h3>
				<span class="btmspn">
					<i class="fas fa-bus"></i>
				</span>
				<p class="mt-2 mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel ab, nesciunt quod!</p>
			</div>

            <div class="row py-5 branches-position">
                <div class="col-lg-3 col-md-6">
                    <!-- team-img -->
                    <div class="team-block">
                        <div class="team-img">
                            <img src="./Views/frontend/public/web/images/h1.jpg" alt="" class="img-fluid">
                            <div class="team-content">
                                <h4 class="text-white">Turkey</h4>
                                <p class="team-meta"> 8 days…</p>
                            </div>
                            <div class="overlay">
                                <div class="text">
                                     <p class="team-meta">-Istanbul,  </p>
                                    <p class="team-meta">- Antalya,</p>
                                   <p class="team-meta">
                                       -Ephesus.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.team-img -->
                <div class="col-lg-3 col-md-6">
                    <!-- team-img -->
                    <div class="team-block">
                        <div class="team-img">
                            <img src="./Views/frontend/public/web/images/h2.jpg" alt="" class="img-fluid">
                            <div class="team-content">
                                <h4 class="text-white">United Kingdom</h4>
                                <p class="team-meta">13 days…</p>
                            </div>
                            <div class="overlay">
                               <div class="text">
                                     <p class="team-meta">-England,   </p>
                                    <p class="team-meta">- Scotland,</p>
                                   <p class="team-meta">
                                       -Wales.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.team-img -->
                <div class="col-lg-3 col-md-6">
                    <!-- team-img -->
                    <div class="team-block">
                        <div class="team-img">
                            <img src="./Views/frontend/public/web/images/h3.jpg" alt="" class="img-fluid">
                            <div class="team-content">
                                <h4 class="text-white">Spain</h4>
                                <p class="team-meta">9 days…</p>
                            </div>
                            <div class="overlay">
                                <div class="text">
                                   <p class="team-meta">-Madrid,   </p>
                                    <p class="team-meta">- Andalucia,</p>
                                   <p class="team-meta">
                                       -Barcelona.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.team-img -->
                <div class="col-lg-3 col-md-6">
                    <!-- team-img -->
                    <div class="team-block">
                        <div class="team-img">
                            <img src="./Views/frontend/public/web/./Views/frontend/public/web/images/h4.jpg" alt="" class="img-fluid">
                            <div class="team-content">
                                <h4 class="text-white">Europe</h4>
                                <p class="team-meta">10 days…</p>
                            </div>
                            <div class="overlay">
                                <div class="text tex-center">
									
                                    <p class="team-meta">-Slovenia,  </p>
                                    <p class="team-meta">- Hungary,</p>
                                   <p class="team-meta">
                                       -Poland.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //branches -->
<?php $this->view("frontend.public.footer") ?>
<!-- login  -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Đăng nhập</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="./index.php?controller=home&action=login" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Số điện thoại</label>
                            <input type="text" class="form-control" placeholder=" " name="phone" id="recipient-name" required="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Mật khẩu</label>
                            <input type="password" class="form-control" placeholder="Mật khẩu" name="password" id="password" required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control serv_bottom" value="Đăng nhập">
                        </div>
                        <div class="row sub-w3l my-3">
                            <div class="col forgot-w3l text-right">
                                <a href="#" class="text-secondary">Quên mật khẩu?</a>
                            </div>
                        </div>
                        <p class="text-center text-secondary">Nếu bạn chưa có tài khoản ?
                            <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-dark font-weight-bold">
                                Đăng ký ngay</a>
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
                    <h5 class="modal-title" id="exampleModalLabel1">Đăng ký</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="./index.php?controller=home&action=register" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Họ và tên</label>
                            <input type="text" class="form-control" placeholder=" " name="fullname" id="recipient-rname" required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-cmnd" class="col-form-label">CMND</label>
                            <input type="text" class="form-control" placeholder=" " name="cmnd" id="recipient-cmnd" required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-dob" class="col-form-label">Ngày sinh</label>
                            <input type="date" class="form-control" placeholder=" " name="dob" id="recipient-dob" required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-phone" class="col-form-label">Số điện thoại</label>
                            <input type="tel" class="form-control" placeholder=" " name="phone" id="recipient-phone" required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder=" " name="email" id="recipient-email" required="">
                        </div>
                        <div class="form-group">
                            <label for="password1" class="col-form-label">Mật khẩu</label>
                            <input type="password" class="form-control" placeholder=" " name="password" id="password1" required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control serv_bottom" value="Đăng ký">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- // register -->
</body>
</html>