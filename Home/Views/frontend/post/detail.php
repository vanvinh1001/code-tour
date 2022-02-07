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
            <div class='swiper-slide'><img style='width: 400px;' src='<?= $thumbnail?>' alt="Ảnh <?= $post["name"] ?>"></div> 
            <?php 
            foreach($details as $item){
            echo "<div class='swiper-slide'><img style='width: 400px; ' src='$item' alt='Ảnh ${post["name"]}'></div>"; 
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
            <li class="list-group-item"><b>Post: </b> <?= $post["name"] ?></li>
            <li class="list-group-item"><b>Người post: </b> <?= $userName ?></li>
            <li class="list-group-item"><b>Ngày post: </b> <?= $post["datepost"] ?></li>
            <li class="list-group-item"><b>Mô tả tour:</b></li>
            <li style="overflow-y: scroll;height:400px" class="list-group-item"><?= $post["description"] ?></li>
        </ul>

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