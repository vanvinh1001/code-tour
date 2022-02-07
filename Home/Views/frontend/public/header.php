    <!-- banner -->
    <div class="inner-banner" style="min-height: 164px;">
        <!-- header -->
        <header>
            <div class="top-head py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 callnumber text-left">
                        </div>
                        <div class="col-md-6 callnumber text-right">
                            <li class="mr-3">Việt Nam : +5687567890</li>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary pt-3">
                <h1>
                    <a class="navbar-brand" href="./index.php?controller=home">
                        Du lịch Việt
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item mr-lg-3 active">
                            <a class="nav-link" href="./index.php?controller=home">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-lg-3">
                            <a class="nav-link" href="./index.php?controller=about">about</a>
                        </li>
                        <li class="nav-item  mr-lg-3">
                            <a class="nav-link" href="./index.php?controller=tour">Tour</a>
                        </li>
                        <li class="nav-item  mr-lg-3">
                            <a class="nav-link" href="./index.php?controller=post">Bài Viết</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php?controller=contact">contact</a>
                        </li>
                        <?php 
                            if(isset($_SESSION["phone"])){
                                echo "
                                <li class='nav-item mr-lg-3'>
                                    <a href='./index.php?controller=home&action=logout'>
                                        <button type='button' class='btn serv_bottom ml-lg-5 w3ls-btn text-white''>
                                            Đăng xuất
                                        </button>
                                    </a>
                                </li>
                                <li class='nav-item mr-lg-3 header__navbar-item header__navbar-user'>
                                    <i aria-hidden='true'></i>
                                    <span data-id='".$_SESSION["phone"]."' class='nav-link header__navbar-user-name user-info'></span>
                                    <ul class='list-option header__navbar-user-menu'>
                                        <li class='header__navbar-user-item'>
                                            <a href='./index.php?controller=user&action=detail' class='list-option-link'><i class='glyphicon-header' aria-hidden='true'></i>Tài khoản</a>
                                        </li>
                                        <li class='header__navbar-user-item'>
                                            <a href='./index.php?controller=booking' class='list-option-link'><i class='glyphicon-header'></i>Booking</a>
                                        </li>
                                        <li class='header__navbar-user-item'>
                                            <a href='./index.php?controller=home&action=logout'><i class='glyphicon-header' aria-hidden='true'></i>Đăng xuất</a>
                                        </li>
                                    </ul>
                                </li>
                                ";
                            }
                            else{
                                echo '
                                <li class="nav-item mr-lg-3">
                                    <button type="button" class="btn serv_bottom ml-lg-5 w3ls-btn text-white" data-toggle="modal" aria-pressed="false" data-target="#exampleModal">
                                        Đăng nhập
                                    </button>
                                </li>
                                ';
                            }
                        ?>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- //header -->
    </div>
    <!-- //banner -->
    <script>
$(document).ready(function() {
    // Load tên người đăng nhập
    var phone = $('.user-info').attr("data-id")
    $.ajax({
        url: './index.php?controller=home&action=userInfo',
        dataType: 'html',
        data: {
            phone: phone
        },
        type: "POST",
        success: function(data) {
            $('.user-info').html(data);
        }
    });
});
    </script>
    <style>
        .header__navbar-item {
            position: relative;
        }
        .header__navbar-user{
            position: relative;
            display: flex;
            justify-items: center;
    }

    .header__navbar-user:hover .header__navbar-user-menu{
            display: block;
    }

    .header__navbar-user-menu{
        position:absolute;
        padding-left:  0px;
        top: calc(100% + 6px);
        right: 0;
        width: 134px;
        list-style: none;
        border-radius: 2px;
        background-color: white;
        z-index: 1;
        display: none;
    }

    .header__navbar-user-menu::before{
        content: "";
        border-width: 14px 27px;
        border-style:  solid;
        border-color: transparent transparent white transparent;
        position: absolute;
        right: 4px;
        top: -26px;
    }

    .header__navbar-user-menu::after{
        content: "";
        display: block;
        position: absolute;
        top: -8px;
        right: 0;
        width: 56%;
        height: 8px;
    }

    .header__navbar-user-item--separate{
        border-top: 1px solid rgba(0, 0, 0, 0.2);
    }

    .header__navbar-user-item a{
        text-decoration: none;
        color: var(--text-color);
        font-size: 1rem;
        padding: 4px 16px;
        display: block;
        box-shadow: 0 1px 2px #e0e0e0;
    }

    .header__navbar-user-item a:hover{
        background-color: rgba(0, 0, 0, 0.2);
    }

    .header__navbar-user-item a:first-child{
        border-top-left-radius: 2px ;
        border-top-right-radius: 2px;
    }

    .header__navbar-user-item a:last-child{
        border-bottom-left-radius: 2px ;
        border-bottom-right-radius: 2px;
    }

    .glyphicon-header{
        margin-right: 7px;
    }
    </style>