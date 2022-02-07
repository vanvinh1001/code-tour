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
            <li class="breadcrumb-item active" aria-current="page">Booking</li>
        </ol>
    </nav>
		<!-- promotions -->
	<section class="wthree-row w3-about  py-5">
		<div class="container py-md-4 mt-md-3">
			  <div class="w3ls-titles text-center mb-5">
				<h3 class="title"><span>Danh sách <span class="hdng">Tour </span> đã đặt</h3>
				<span class="btmspn">
					<i class="fas fa-bus"></i>
				</span>
			</div>


            <div class="tableFixHead table-responsive">
        <table class="table table-bordered">
            <thead >
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Ảnh đại diện</th>
                    <th scope="col">Tên tour</th>
                    <th scope="col">Ngày đi</th>
                    <th scope="col">Ngày về</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Tổng giá trị</th>

                </tr>
            </thead>
            <tbody class="row-table">
                <?php 
                            $STT = 0;
                            for($i=0; $i < count($tours); $i++){
                                // Sửa đường dẫn ảnh
                                $url_image = $tours[$i]['thumbnail'];
                                $STT = $i+1;
                                echo 
                                "<tr class='row-content'>
                                    <td>$STT</td>
                                    <td><img class='thumbnail-img' src='".$url_image."' alt='Ảnh ".$tours[$i]["name"]."' style='width:100px'></td>
                                    <td>".$tours[$i]["name"]."</td>
                                    <td>".$tours[$i]["datego"]."</td>
                                    <td>".$tours[$i]["dateback"]."</td>
                                    <td>".$booking[$i]["quantity"]."</td>
                                    <td>".$toltal[$i]."</td>
                                </tr>";
                            }
                        ?>
            </tbody>
        </table>
        <nav aria-label="...">
            <ul class="pagination mt-3 ml-3">
                <?php 
                    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                    for($i = 1; $i<=$toltalPage;$i++){
                        echo "
                        <li class='page-item ";
                        if($i==$current_page) echo "active";
                        
                        echo"'><a class='page-link' href='./index.php?controller=booking&action=index&page=$i'>$i</a></li>";
                    }
                ?>
            </ul>
        </nav>
        </section>

<?php $this->view('frontend.public.footer') ?>

</body>
</html>
