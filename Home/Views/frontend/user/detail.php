<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
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
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Tài khoản</li>
        </ol>
    </nav>
		<!-- promotions -->
	<section class="wthree-row w3-about  py-5">
		<div class="container py-md-4 mt-md-3">
			  <div class="w3ls-titles text-center mb-5">
				<h3 class="title"><span>Thông tin <span class="hdng">Cá nhân </span></h3>
				<span class="btmspn">
					<i class="fas fa-bus"></i>
				</span>
			</div>


            <div class="tableFixHead table-responsive">
            <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
            <th scope="col">Họ tên</th>
            <th scope="col">CMND/CCCD</th>
            <th scope="col">Ngày sinh</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Email</th>
            <th scope="col">sửa</th>
            </tr>
        </thead>
        <tbody class="row-table">
            <?php 
                // for($i = 0; $i < count($users); $i++){
                //     $stt = $i + 1;
                    echo 
                    "
                        <td>".$users["fullname"]."</td>
                        <td>".$users["idcard"]."</td>
                        <td>".$users["dob"]."</td>
                        <td>".$users["tel"]."</td>
                        <td>".$users["email"]."</td>
                        <td><a href='./index.php?controller=user&action=editUser&id=".$users["id"]."'><i class='editBtn fas fa-edit'></i></a></td>
                    </tr>";
                // }
            ?>
        </tbody>
        </table>
    </section>

<?php $this->view('frontend.public.footer') ?>

</body>
</html>
