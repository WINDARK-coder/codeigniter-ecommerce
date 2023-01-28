<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Basic page needs
	============================================ -->
    <title>Maxshop - Premium Multipurpose HTML5/CSS3 Theme</title>
    <meta charset="utf-8" />
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech" />
    <meta name="robots" content="index, follow" />

    <!-- Mobile specific metas
	============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Favicon
	============================================ -->

    <link rel="shortcut icon" href="<?= base_url(); ?>assets/frontend/ico/favicon.png" />

    <!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Roboto:400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/bootstrap/css/bootstrap.min.css" />
    <link href="<?= base_url(); ?>assets/frontend/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/frontend/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/frontend/js/owl-carousel/owl.carousel.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/frontend/css/themecss/lib.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/frontend/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" />

    <!-- Theme CSS
	============================================ -->
    <link href="<?= base_url(); ?>assets/frontend/css/themecss/so_megamenu.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/frontend/css/themecss/so-categories.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/frontend/css/themecss/so-listing-tabs.css" rel="stylesheet" />

    <link id="color_scheme" href="<?= base_url(); ?>assets/frontend/css/theme.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/frontend/css/responsive.css" rel="stylesheet" />




</head>

<body class="res layout-subpage">
    <div id="wrapper" class="wrapper-full ">

        <!-- Main Container  -->
        <div class="main-container container">
            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-md-12 col-sm-12">

                    <div class="product-view row">
                        <div class="left-content-product col-lg-12 col-xs-12">
                            <div class="row">
                                <div class="content-product-left  col-sm-6 col-xs-12 ">
                                    <div class="large-image  ">
                                        <img itemprop="image" class="product-image-zoom" src="<?= base_url() . $products->path; ?>" data-zoom-image="image/demo/shop/product/j9.jpg" title="Bint Beef" alt="Bint Beef" />
                                    </div>

                                    <div id="thumb-slider" class="owl-theme owl-loaded owl-drag full_slider">
                                        <a data-index="0" class="img thumbnail " data-image="<?= base_url() . $products->path; ?>" title="<?= $products->title ?>">
                                            <img src="<?= base_url() . $products->path; ?>" title="<?= $products->title ?>" alt="<?= $products->title ?>" />
                                        </a>
                                        <a data-index="0" class="img thumbnail " data-image="<?= base_url() . $products->path; ?>" title="<?= $products->title ?>">
                                            <img src="<?= base_url() . $products->path; ?>" title="<?= $products->title ?>" alt="<?= $products->title ?>" />
                                        </a>
                                        <a data-index="0" class="img thumbnail " data-image="<?= base_url() . $products->path; ?>" title="<?= $products->title ?>">
                                            <img src="<?= base_url() . $products->path; ?>" title="<?= $products->title ?>" alt="<?= $products->title ?>" />
                                        </a>
                                        <a data-index="0" class="img thumbnail " data-image="<?= base_url() . $products->path; ?>" title="<?= $products->title ?>">
                                            <img src="<?= base_url() . $products->path; ?>" title="<?= $products->title ?>" alt="<?= $products->title ?>" />
                                        </a>
                                    </div>

                                </div>

                                <div class="content-product-right col-sm-6 col-xs-12">
                                    <div class="title-product">
                                        <h1><?= $products->title ?></h1>
                                    </div>
                                    <!-- Review ---->
                                    <div class="box-review form-group">
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>
                                        <a class="reviews_button" href="<?= base_url(); ?>assets/frontend/quickview.php.html" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews </a>
                                    </div>

                                    <div class="product-label form-group">
                                        <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                            <span class="price-new" itemprop="price">$<?= $products->sales_price ?></span>
                                            <span class="price-old">$<?= $products->price ?></span>
                                        </div>
                                        <div class="stock"><span>Availability: </span> <span class="status-stock">In Stock </span></div>
                                    </div>

                                    <div class="product-box-desc">
                                        <div class="inner-box-desc">
                                            <div class="price-tax"><span>Ex Tax: </span> $60.00 </div>
                                            <div class="reward"><span>Price in reward points: </span> 400 </div>
                                            <div class="brand"><span>Brand: </span><a href="#">Apple </a> </div>
                                            <div class="model"><span>Product Code: </span> Product 15 </div>
                                            <div class="reward"><span>Reward Points: </span> 100 </div>
                                        </div>
                                    </div>


                                    <div id="product">
                                        <div class="box-checkbox form-group required">
                                            <label class="control-label">Checkbox </label>
                                            <div id="input-option232">
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="option[232][]" value="36" /> Checkbox 1 (+$12.00) </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="option[232][]" value="37" /> Checkbox 2 (+$36.00) </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="option[232][]" value="38" /> Checkbox 3 (+$24.00) </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="option[232][]" value="39" /> Checkbox 4 (+$48.00) </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group box-info-product">
                                            <div class="option quantity">
                                                <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
                                                    <label>Qty </label>
                                                    <input class="form-control" type="text" name="quantity" value="1" />
                                                    <input type="hidden" name="product_id" value="50" />
                                                    <span class="input-group-addon product_quantity_down">− </span>
                                                    <span class="input-group-addon product_quantity_up">+ </span>
                                                </div>
                                            </div>
                                            <div class="cart">
                                                <input type="button" data-toggle="tooltip" title="" value="Add to Cart" onclick="cart.add('42', '1');" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" data-original-title="Add to Cart" />
                                            </div>
                                            <div class="add-to-links wish_comp">
                                                <ul class="blank list-inline">
                                                    <li class="wishlist">
                                                        <a class="icon" data-toggle="tooltip" title="" onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="compare">
                                                        <a class="icon" data-toggle="tooltip" title="" onclick="compare.add('50');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- end box info product -->

                                </div>
                            </div>
                        </div>


                    </div>

                    <script type="text/javascript">
                        // Cart add remove functions
                        var cart = {
                            'add': function(product_id, quantity) {
                                parent.addProductNotice('Product added to Cart', '<img src="image/demo/shop/product/e11.jpg" alt="">', '<h3><a href="#">Apple Cinema 30"</a> added to <a href="#">shopping cart</a>!</h3>', 'success');
                            }
                        }

                        var wishlist = {
                            'add': function(product_id) {
                                parent.addProductNotice('Product added to Wishlist', '<img src="image/demo/shop/product/e11.jpg" alt="">', '<h3>You must <a href="#">login</a>  to save <a href="#">Apple Cinema 30"</a> to your <a href="#">wish list</a>!</h3>', 'success');
                            }
                        }
                        var compare = {
                            'add': function(product_id) {
                                parent.addProductNotice('Product added to compare', '<img src="image/demo/shop/product/e11.jpg" alt="">', '<h3>Success: You have added <a href="#">Apple Cinema 30"</a> to your <a href="#">product comparison</a>!</h3>', 'success');
                            }
                        }
                    </script>


                </div>


            </div>
            <!--Middle Part End-->
        </div>
        <!-- //Main Container -->

        <style type="text/css">
            #wrapper {
                box-shadow: none;
            }

            #wrapper>*:not(.main-container) {
                display: none;
            }

            #content {
                margin: 0
            }

            .container {
                width: 100%;
            }

            .product-info .product-view,
            .left-content-product,
            .box-info-product {
                margin: 0;
            }

            .left-content-product .content-product-right .box-info-product .add-to-links {
                width: auto;
                float: none;
                margin-top: 0px;
            }
        </style>
    </div>
    <!-- Include Libs & Plugins
	============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/themejs/libs.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/unveil/jquery.unveil.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/countdown/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/datetimepicker/moment.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/jquery-ui/jquery-ui.min.js"></script>


    <!-- Theme files
============================================ -->


    <script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/themejs/so_megamenu.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/themejs/addtocart.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/themejs/application.js"></script>

</body>

</html>