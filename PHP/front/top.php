<?php
require('connection.inc.php');
require('function.inc.php');
require('add_to_cart.php');

$cat_res = mysqli_query($con, "select * from category where category_id='C01' order by category_id asc");
$cat_arr = array();
while ($row = mysqli_fetch_assoc($cat_res)) {
    $cat_arr[] = $row;
}

$subcat_res = mysqli_query($con, "select * from subcategory where category_id='C01' order by subcategory_id asc");
$subcat_arr = array();
while ($row = mysqli_fetch_assoc($subcat_res)) {
    $subcat_arr[] = $row;
}

$cat_res = mysqli_query($con, "select * from category where category_id='C02' order by category_id asc");
$cat_arr1 = array();
while ($row = mysqli_fetch_assoc($cat_res)) {
    $cat_arr1[] = $row;
}

$subcat_res = mysqli_query($con, "select * from subcategory where category_id='C02' order by subcategory_id asc");
$subcat_arr1 = array();
while ($row = mysqli_fetch_assoc($subcat_res)) {
    $subcat_arr1[] = $row;
}

$cat_res = mysqli_query($con, "select * from category where category_id='C03' order by category_id asc");
$cat_arr2 = array();
while ($row = mysqli_fetch_assoc($cat_res)) {
    $cat_arr2[] = $row;
}

$subcat_res = mysqli_query($con, "select * from subcategory where category_id='C03' order by subcategory_id asc");
$subcat_arr2 = array();
while ($row = mysqli_fetch_assoc($subcat_res)) {
    $subcat_arr2[] = $row;
}

$cat_res = mysqli_query($con, "select * from category where category_id='C04' order by category_id asc");
$cat_arr3 = array();
while ($row = mysqli_fetch_assoc($cat_res)) {
    $cat_arr3[] = $row;
}

$subcat_res = mysqli_query($con, "select * from subcategory where category_id='C04' order by subcategory_id asc");
$subcat_arr3 = array();
while ($row = mysqli_fetch_assoc($subcat_res)) {
    $subcat_arr3[] = $row;
}

$cat_res = mysqli_query($con, "select * from category where category_id='C05' order by category_id asc");
$cat_arr4 = array();
while ($row = mysqli_fetch_assoc($cat_res)) {
    $cat_arr4[] = $row;
}

$subcat_res = mysqli_query($con, "select * from subcategory where category_id='C05' order by subcategory_id asc");
$subcat_arr4 = array();
while ($row = mysqli_fetch_assoc($subcat_res)) {
    $subcat_arr4[] = $row;
}

$cat_res = mysqli_query($con, "select * from category where category_id='C06' order by category_id asc");
$cat_arr5 = array();
while ($row = mysqli_fetch_assoc($cat_res)) {
    $cat_arr5[] = $row;
}

$subcat_res = mysqli_query($con, "select * from subcategory where category_id='C06' order by subcategory_id asc");
$subcat_arr5 = array();
while ($row = mysqli_fetch_assoc($subcat_res)) {
    $subcat_arr5[] = $row;
}

$cat_res = mysqli_query($con, "select * from category where category_id='C07' order by category_id asc");
$cat_arr6 = array();
while ($row = mysqli_fetch_assoc($cat_res)) {
    $cat_arr6[] = $row;
}

$subcat_res = mysqli_query($con, "select * from subcategory where category_id='C07' order by subcategory_id asc");
$subcat_arr6 = array();
while ($row = mysqli_fetch_assoc($subcat_res)) {
    $subcat_arr6[] = $row;
}

$obj = new cart();
$totalProduct = $obj->totalProduct();

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bhramani Electricals Lamps & Lights</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/LOGO.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/add_wishlist.js"></script>
    <script src="js/add_cart.js"></script>
    <script src="js/add_checkout.js"></script>

</head>

<body>

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
        <header id="htc__header" class="htc__header__area header--one">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="menumenu__container clearfix">
                            <div class="col-lg-3 col-md-2 col-sm-3 col-xs-5">
                                <div class="logo">
                                    <a href="index.php"><img src="images/logo/LOGO.png" alt="logo images" width="250px" height="60px"></a>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-7 col-sm-5 col-xs-3">
                                <nav class="main__menu__nav hidden-xs hidden-sm">
                                    <ul class="main__menu">
                                        <li class="drop"><a href="index.php">home</a></li>
                                        <li class="drop"><a href="#">category&nbsp;&nbsp;<span class="caret"></span></a>
                                            <ul class="dropdown">
                                                <?php
                                                foreach ($cat_arr as $list) {
                                                ?>
                                                    <li class="drop">
                                                        <a href="#">
                                                            <?php echo $list['category_name'] ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <span class="fa fa-caret-right"></span>
                                                        </a>
                                                        <ul class="main_menu">
                                                            <?php
                                                            foreach ($subcat_arr as $list) {
                                                            ?>
                                                                <li class="drop">

                                                                    <a href="subcategory.php?id=<?php echo $list['subcategory_id'] ?>">
                                                                        <?php echo $list['subcategory_name'] ?>
                                                                    </a>
                                                                <?php
                                                            }
                                                                ?>
                                                                </li>
                                                        </ul>
                                                    <?php
                                                }
                                                    ?>
                                                    </li>
                                                    <?php
                                                    foreach ($cat_arr1 as $list) {
                                                    ?>
                                                        <li class="drop">
                                                            <a href="#">
                                                                <?php echo $list['category_name'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <span class="fa fa-caret-right"></span>
                                                            </a>
                                                            <ul class="main_menu">
                                                                <?php
                                                                foreach ($subcat_arr1 as $list) {
                                                                ?>
                                                                    <li class="drop">

                                                                        <a href="subcategory.php?id=<?php echo $list['subcategory_id'] ?>">
                                                                            <?php echo $list['subcategory_name'] ?>
                                                                        </a>
                                                                    <?php
                                                                }
                                                                    ?>
                                                                    </li>

                                                            </ul>
                                                        <?php
                                                    }
                                                        ?>
                                                        </li>
                                                        <?php
                                                        foreach ($cat_arr2 as $list) {
                                                        ?>
                                                            <li class="drop">
                                                                <a href="#">
                                                                    <?php echo $list['category_name'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <span class="fa fa-caret-right"></span>
                                                                </a>
                                                                <ul class="main_menu">
                                                                    <?php
                                                                    foreach ($subcat_arr2 as $list) {
                                                                    ?>
                                                                        <li class="drop">

                                                                            <a href="subcategory.php?id=<?php echo $list['subcategory_id'] ?>">
                                                                                <?php echo $list['subcategory_name'] ?>
                                                                            </a>
                                                                        <?php
                                                                    }
                                                                        ?>
                                                                        </li>

                                                                </ul>
                                                            <?php
                                                        }
                                                            ?>
                                                            </li>
                                                            <?php
                                                            foreach ($cat_arr3 as $list) {
                                                            ?>
                                                                <li class="drop">
                                                                    <a href="#">
                                                                        <?php echo $list['category_name'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <span class="fa fa-caret-right"></span>
                                                                    </a>
                                                                    <ul class="main_menu">
                                                                        <?php
                                                                        foreach ($subcat_arr3 as $list) {
                                                                        ?>
                                                                            <li class="drop">

                                                                                <a href="subcategory.php?id=<?php echo $list['subcategory_id'] ?>">
                                                                                    <?php echo $list['subcategory_name'] ?>
                                                                                </a>
                                                                            <?php
                                                                        }
                                                                            ?>
                                                                            </li>

                                                                    </ul>
                                                                <?php
                                                            }
                                                                ?>
                                                                </li>
                                                                <?php
                                                                foreach ($cat_arr4 as $list) {
                                                                ?>
                                                                    <li class="drop">
                                                                        <a href="#">
                                                                            <?php echo $list['category_name'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                            <span class="fa fa-caret-right"></span>
                                                                        </a>
                                                                        <ul class="main_menu">
                                                                            <?php
                                                                            foreach ($subcat_arr4 as $list) {
                                                                            ?>
                                                                                <li class="drop">

                                                                                    <a href="subcategory.php?id=<?php echo $list['subcategory_id'] ?>">
                                                                                        <?php echo $list['subcategory_name'] ?>
                                                                                    </a>
                                                                                <?php
                                                                            }
                                                                                ?>
                                                                                </li>

                                                                        </ul>
                                                                    <?php
                                                                }
                                                                    ?>
                                                                    </li>
                                                                    <?php
                                                                    foreach ($cat_arr5 as $list) {
                                                                    ?>
                                                                        <li class="drop">
                                                                            <a href="#">
                                                                                <?php echo $list['category_name'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <span class="fa fa-caret-right"></span>
                                                                            </a>
                                                                            <ul class="main_menu">
                                                                                <?php
                                                                                foreach ($subcat_arr5 as $list) {
                                                                                ?>
                                                                                    <li class="drop">

                                                                                        <a href="subcategory.php?id=<?php echo $list['subcategory_id'] ?>">
                                                                                            <?php echo $list['subcategory_name'] ?>
                                                                                        </a>
                                                                                    <?php
                                                                                }
                                                                                    ?>
                                                                                    </li>

                                                                            </ul>
                                                                        <?php
                                                                    }
                                                                        ?>
                                                                        </li>
                                                                        <?php
                                                                        foreach ($cat_arr6 as $list) {
                                                                        ?>
                                                                            <li class="drop">
                                                                                <a href="#">
                                                                                    <?php echo $list['category_name'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                    <span class="fa fa-caret-right"></span>
                                                                                </a>
                                                                                <ul class="main_menu">
                                                                                    <?php
                                                                                    foreach ($subcat_arr6 as $list) {
                                                                                    ?>
                                                                                        <li class="drop">

                                                                                            <a href="subcategory.php?id=<?php echo $list['subcategory_id'] ?>">
                                                                                                <?php echo $list['subcategory_name'] ?>
                                                                                            </a>
                                                                                        <?php
                                                                                    }
                                                                                        ?>
                                                                                        </li>

                                                                                </ul>
                                                                            <?php
                                                                        }
                                                                            ?>
                                                                            </li>
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="contactus.php">Contact Us</a></li>
                                        <li class="drop"><a href="aboutus.php">About Us</a></li>
                                        <li class="drop"><a href="feedback.php">Feedback</a></li>
                                    </ul>
                                </nav>
                            </div>


                            <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                                <div class="header__right">
                                    <!--<div class="header__account">
                                        <a href="#"><i class="icon-user icons"></i></a>
                                    </div>-->
                                    <a href="wishlist.php"><i class="fa fa-heart" style="font-size:24px"></i></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="htc__shopping__cart">
                                        <a href="cart.php"><i class="fa fa-shopping-bag" style="font-size:22px"></i></a>
                                        <a href="#"><span class="htc__qua"><?php echo $totalProduct ?></span></a>
                                    </div>

                                    <?php
                                    if (isset($_SESSION['CUSTOMER_LOGIN'])) {
                                        echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php"><i class="fa fa-power-off" style="font-size:24px"></i></a>';
                                    } else {
                                        echo '<ul class="main__menu">                                    
                                        <li class="drop">
                                            <a href="#"><i class="fa fa-user" style="font-size:24px"></i></a>                                                   
                                            <ul class="dropdown">
                                                <li><a href="login.php">Login</a></li>
                                                <li><a href="registration.php">Registration</a></li>
                                            </ul>
                                        </li>                                    
                                    </ul>';
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Area -->


        <style>
            .main__menu ul {
                position: absolute;
                white-space: nowrap;
                z-index: 1;
                left: -999em;
            }

            .main__menu>li:hover>ul {
                left: auto;
                margin-top: 5px;
                min-width: 100%;
            }

            .main__menu>li li:hover>ul {
                left: 100%;
                margin-left: 1px;
                top: -1px;
            }

            /* arrow hover styling */
            .main__menu>li>a:first-child:nth-last-child(2):before {
                border-top-color: #ddd;
            }

            .main__menu>li:hover>a:first-child:nth-last-child(2):before {
                border: 5px solid transparent;
                margin-top: -5px
            }

            .main__menu li li>a:first-child:nth-last-child(2):before {
                border-left-color: #ddd;
                margin-top: -5px
            }

            .main__menu li li:hover>a:first-child:nth-last-child(2):before {
                border: 5px solid transparent;
                right: 10px;
            }

            .buttons-cart a {
                background: #A87C3C none repeat scroll 0 0;
                color: #ebebeb;
                font-family: 'Poppins', sans-serif;
                font-size: 12px;
                font-weight: 500;
                height: 62px;
                line-height: 62px;
                padding: 0 45px;
                text-transform: uppercase;
                display: inline-block;
            }

            .buttons-cart input,
            .coupon input[type="submit"],
            .coupon-info p.form-row input[type="submit"] {
                background: #A87C3C none repeat scroll 0 0;
                border: medium none;
                border-radius: 0;
                box-shadow: none;
                color: #fff;
                display: inline-block;
                font-size: 12px;
                font-weight: 700;
                height: 40px;
                line-height: 40px;
                margin-right: 15px;
                padding: 0 15px;
                text-shadow: none;
                text-transform: uppercase;
                transition: all 0.3s ease 0s;
                white-space: nowrap;
            }

            .buttons-cart input:hover,
            .coupon input[type=submit]:hover,
            .buttons-cart a:hover {
                background: #212121;
                color: #fff !important;
            }

            .buttons-cart--inner {
                display: flex;
                justify-content: space-between;
            }

            .buttons-cart a+a {
                margin-left: 20px;
            }

            .coupon {
                margin-bottom: 40px;
                overflow: hidden;
                padding-bottom: 20px;
            }

            .coupon h3 {
                margin: 0 0 10px;
                font-size: 14px;
                text-transform: uppercase;
            }

            .coupon input[type=text] {
                border: 1px solid #c1c1c1;
                float: left;
                height: 40px;
                margin: 0 6px 20px 0;
                max-width: 100%;
                padding: 0 0 0 10px;
                width: 170px;
            }

            .cart_totals {
                float: left;
                text-align: right;
                width: 100%;
            }

            .cart_totals h2 {
                border-bottom: 2px solid #c1c1c1;
                display: inline-block;
                font-size: 30px;
                margin: 0 0 35px;
                text-transform: uppercase;
            }

            .cart_totals table {
                border: medium none;
                float: right;
                margin: 0;
                text-align: right;
            }

            .cart_totals table th {
                border: medium none;
                font-size: 14px;
                font-weight: bold;
                padding: 0 20px 12px 0;
                text-align: right;
                text-transform: uppercase;
                vertical-align: top;
            }

            .cart_totals table td {
                border: medium none;
                padding: 0 0 12px;
                vertical-align: top;
            }

            .cart_totals table td .amount {
                color: #252525;
                float: right;
                font-size: 13px;
                font-weight: bold;
                margin-left: 5px;
                text-align: right;
                text-transform: uppercase;
            }

            .cart_totals table td ul#shipping_method {
                list-style: outside none none;
                margin: 0;
                padding: 0;
            }

            .cart_totals table td ul#shipping_method li {
                float: left;
                margin: 0 0 10px;
                padding: 0;
                text-indent: 0;
                width: 100%;
            }

            .cart_totals table td ul#shipping_method li input {
                margin: 0;
                position: relative;
                top: 2px;
            }

            a.shipping-calculator-button {
                font-weight: bold;
                color: #6f6f6f;
            }

            a.shipping-calculator-button:hover {
                color: #A87C3C
            }

            .cart_totals table tr.order-total th,
            .cart_totals table tr.order-total .amount {
                font-size: 20px;
                text-transform: uppercase;
                white-space: nowrap;
            }

            .wc-proceed-to-checkout a {
                background: #252525 none repeat scroll 0 0;
                color: #fff;
                display: inline-block;
                font-size: 14px;
                font-weight: 700;
                height: 50px;
                line-height: 50px;
                margin-top: 20px;
                padding: 0 30px;
                text-transform: none;
            }

            .wc-proceed-to-checkout a:hover {
                background: #A87C3C;
                color: #fff !important;
            }
        </style>