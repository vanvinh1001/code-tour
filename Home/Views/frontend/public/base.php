<script>
addEventListener("load", function () {
    setTimeout(hideURLbar, 0);
}, false);

function hideURLbar() {
    window.scrollTo(0, 1);
}
</script>
<!-- Custom Theme files -->
<?php $this->view("frontend.public.web.css.bootstrap") ?>
<?php $this->view("frontend.public.web.css.fontawesomeallmin") ?>
<?php $this->view("frontend.public.web.css.smoothbox") ?>
<?php $this->view("frontend.public.web.css.style") ?>


<!-- //Custom Theme files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=EB+Garamond:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- //online-fonts -->
<script src="./Home/Views/frontend/public/web/js/jquery-2.2.3.min.js"></script>
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
    <script src="./Home/Views/frontend/public/web/js/form-validation.js"></script>
    <!-- Responsiveslides -->
    <script src="./Home/Views/frontend/public/web/js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: false,
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
    <!-- // Responsiveslides -->
	 <!-- stats -->
    <script src="./Home/Views/frontend/public/web/js/jquery.waypoints.min.js"></script>
    <script src="./Home/Views/frontend/public/web/js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();

    </script>
    <!-- //stats -->

    <!-- start-smooth-scrolling -->
    <script src="./Home/Views/frontend/public/web/js/move-top.js"></script>
    <script src="./Home/Views/frontend/public/web/js/easing.js"></script>
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
    <script src="./Home/Views/frontend/public/web/js/SmoothScroll.min.js"></script>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Home/Views/frontend/public/web/js/bootstrap.js"></script>
