<?php session_start() ;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tour</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
	<?php $this->view("frontend.public.base") ?>
</head>

<body>
<?php $this->view("frontend.public.header") ?>
<a href="./index.php?controller=tour"><i class="fas fa-times close-btn mr-2 mt-2"></i></a>
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class='swiper-slide'><img src='<?= $thumbnail?>' alt="Ảnh <?= $tour["name"] ?>"></div> 
            <?php 
            foreach($details as $item){
            echo "<div class='swiper-slide'><img src='$item' alt='Ảnh ${tour["name"]}'></div>"; 
            } 
        ?>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <div class="container-fluid">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Tour: </b> <?= $tour["name"] ?></li>
            <li class="list-group-item"><b>Nơi đến: </b> <?= $placeName ?></li>
            <li class="list-group-item"><b>Khách sạn: </b> <?= $hotelName ?></li>
            <li class="list-group-item"><b>Phương tiện: </b> <?= $tour["vehicel"] ?></li>
            <li class="list-group-item"><b>Ngày đi: </b> <?= $tour["datego"] ?></li>
            <li class="list-group-item"><b>Ngày về: </b> <?= $tour["dateback"] ?></li>
            <li class="list-group-item"><b>Mô tả tour:</b></li>
            <li style="overflow-y: scroll;height:400px" class="list-group-item"><?= $tour["description"] ?></li>
        </ul>
            <form method="POST" action="./index.php?controller=booking&action=store&id=<?= $_GET['id'] ?>" class="needs-validation mt-5" novalidate>
            <div class="form-row">
                        <div class="col-md-2 mb-3">
                            <label for="name">Số lượng người đi</label>
                            <input name="quantity" class='quantity form-control' style='text-align: center;' type='number' min='1' value=1
                            onchange='if(this.value > <?= $tour["seats"] ?>){this.value = <?= $tour["seats"] ?>} if(this.value<0){this.value= this.value * -1} if(this.value==0){this.value= 1}' class='form-control'>

                            <div class="invalid-feedback">
                                Nhập số lượng người đi
                            </div>
                        </div>
                        <div class = "col-md-2 mb-3">
                            <label for="price">Gía tiền</label>
                            <input class='price form-control' style='text-align: center;' type='text' value='<?=$tour["price"]?>' disabled>
                        </div>   
                        <div class = "col-md-2 mb-3">
                            <label for="price">Tổng giá trị</label>
                            <input class='total form-control' style='text-align: center;' type='text' value='<?=$tour["price"]?>' disabled>
                        </div>                      
            </div>
            <button id="submitBtn" class="btn btn-primary" type="submit">Đặt tour</button> 
            <a href="./index.php?controller=booking"></a> 
        </form>

    </div>
    <?php $this->view('frontend.public.footer') ?>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 5000,
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
        });
    </script>

<script>
    $(document).ready(function() {

        // thay đổi số lượng
        $('.quantity').on('change', function() {
            var quantity = $(this).val()
            var priceString = $('.price').val()

            var priceNumber = Number(priceString.replace(/[^0-9.-]+/g, ""));
            var total = quantity * priceNumber
            var totalFormat = total.toLocaleString('it-IT', {
                style: 'currency',
                currency: 'VND'
            
            });

            $('.total').val(totalFormat)

            
        })
    
    
       
    });
    </script>
</body>

</html>