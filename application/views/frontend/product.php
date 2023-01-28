<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="<?= base_url('home') ?>"><i class="fa fa-home"></i></a></li>
        <li><a href="#"><?= $products->category_id ?></a></li>
        <li><a href="<?= base_url('product/') . $products->id; ?>"><?= $products->title ?></a></li>
    </ul>

    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-md-12 col-sm-12">

            <div class="product-view row">
                <div class="left-content-product col-lg-12 col-xs-12">
                    <div class="row">
                        <div class="content-product-left  col-sm-6 col-xs-12 ">
                            <div id="thumb-slider-vertical" class="thumb-vertical-outer">
                                <span class="btn-more prev-thumb nt"><i class="fa fa-chevron-up"></i></span>
                                <span class="btn-more next-thumb nt"><i class="fa fa-chevron-down"></i></span>
                                <ul class="thumb-vertical">
                                    <li class="owl2-item">
                                        <a data-index="0" class="img thumbnail" data-image="<?= base_url() . $products->path; ?>" title="<?= $products->title ?>">
                                            <img src="<?= base_url() . $products->path; ?>" title="<?= $products->title ?>" alt="<?= $products->title ?>">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="large-image  vertical">
                                <img itemprop="image" class="product-image-zoom" src="<?= base_url() . $products->path; ?>" data-zoom-image="<?= base_url() . $products->path; ?>" title="<?= $products->title ?>" alt="<?= $products->title ?>">
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
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    </div>
                                </div>

                                <a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews</a>
                                <!-- Make a count of reviews to this product -->
                                <a class="write_review_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a>
                            </div>

                            <div class="product-label form-group">
                                <div class="stock"><span>Availability:</span> <span class="status-stock">In Stock</span></div>
                                <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                    <span class="price-new" itemprop="price">$<?= $products->sales_price ?></span>
                                    <span class="price-old">$<?= $products->price ?></span>
                                </div>

                            </div>

                            <div class="product-box-desc">
                                <div class="inner-box-desc">
                                    <div class="price-tax"><span>Ex Tax:</span> $60.00</div>
                                    <div class="brand"><span>Brand:</span><a href="#">Apple</a> </div>
                                    <div class="model"><span>Product Code:</span> Product 15</div>
                                    <div class="reward"><span>Reward Points:</span> 100</div>
                                </div>
                            </div>


                            <div id="product">

                                <div class="form-group box-info-product">
                                    <div class="option quantity">
                                        <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
                                            <label>Qty</label>
                                            <input class="form-control" id="quantity" type="text" name="quantity" value="1">
                                            <input type="hidden" name="product_id" value="<?= $products->quantity ?>">
                                            <span class="input-group-addon product_quantity_down">−</span>
                                            <span class="input-group-addon product_quantity_up">+</span>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <input type="button" data-toggle="tooltip" title="" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" data-original-title="Add to Cart">
                                    </div>
                                    <div class="add-to-links wish_comp">
                                        <ul class="blank list-inline">
                                            <li class="wishlist">
                                                <a class="icon" data-toggle="tooltip" title="" data-original-title="Add to Wish List" id="button-wish"><i class="fa fa-heart"></i>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a class="icon" data-toggle="tooltip" title="<?= $products->title ?>" onclick="compare.add('50');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i>
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
            <div class="bototm-detail">
                <div class="row">
                    <div class="col-lg-3 col-md-4  col-xs-12">
                        <div class="module releate-horizontal">
                            <h3 class="modtitle"><span>Related Products</span></h3>
                            <div class="releate-product ">
                                <div class="product-item-container">
                                    <?php foreach ($related_products as $related_product) : ?>
                                        <div class="item-element clearfix">
                                            <div class="image">
                                                <img src="<?= base_url() . $related_product->path; ?>" title="<?= $related_product->title ?>" class="img-1 img-responsive" />
                                            </div>
                                            <div class="caption">

                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    </div>
                                                </div>
                                                <h4><a href="<?= base_url('product/') . $related_product->id; ?>"><?= $related_product->title ?></a></h4>
                                                <div class="price">
                                                    <span class="price-new">$<?= $related_product->sales_price ?></span>
                                                    <span class="price-old">$<?= $related_product->price ?></span>
                                                </div>

                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-9 col-md-8  col-xs-12">
                        <!-- Product Tabs -->
                        <div class="producttab ">
                            <div class="tabsslider  col-xs-12">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="<?= base_url('product/tab-1'); ?>">Description</a></li>
                                    <li class="item_nonactive"><a data-toggle="tab" href="<?= base_url('product/tab-review'); ?>">Reviews (1)</a></li>
                                    <li class="item_nonactive"><a data-toggle="tab" href="<?= base_url('product/tab-4/') . $products->id; ?>">Tags</a></li>
                                    <li class="item_nonactive"><a data-toggle="tab" href="<?= base_url('product/tab-5/') . $products->id; ?>">Custom Tab</a></li>
                                </ul>
                                <div class="tab-content col-xs-12">
                                    <div id="<?= base_url('product/tab-1'); ?>" class="tab-pane fade active in">
                                        <p><?= $products->description ?></p>
                                    </div>
                                    <div id="<?= base_url('product/tab-review'); ?>" class="tab-pane fade">
                                        <form>
                                            <div id="review">
                                                <table class="table table-striped table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 50%;"><strong>Super Administrator</strong></td>
                                                            <td class="text-right">29/07/2015</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <p>Best this product opencart</p>
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="text-right"></div>
                                            </div>
                                            <h2 id="review-title">Write a review</h2>
                                            <div class="contacts-form">
                                                <div class="form-group"> <span class="icon icon-user"></span>
                                                    <input type="text" name="name" class="form-control" value="Your Name" onblur="if (this.value == '') {this.value = 'Your Name';}" onfocus="if(this.value == 'Your Name') {this.value = '';}">
                                                </div>
                                                <div class="form-group"> <span class="icon icon-bubbles-2"></span>
                                                    <textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = 'Your Review';}" onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
                                                </div>
                                                <span style="font-size: 11px;"><span class="text-danger">Note:</span> HTML is not translated!</span>

                                                <div class="form-group">
                                                    <b>Rating</b> <span>Bad</span>&nbsp;
                                                    <input type="radio" name="rating" value="1"> &nbsp;
                                                    <input type="radio" name="rating" value="2"> &nbsp;
                                                    <input type="radio" name="rating" value="3"> &nbsp;
                                                    <input type="radio" name="rating" value="4"> &nbsp;
                                                    <input type="radio" name="rating" value="5"> &nbsp;<span>Good</span>

                                                </div>
                                                <div class="buttons clearfix"><a id="button-review" class="btn buttonGray">Continue</a></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="<?= base_url('product/tab-4/') . $products->id; ?>" class="tab-pane fade">
                                        <a href="#">Monitor</a>,
                                        <a href="#">Apple</a>
                                    </div>
                                    <div id="<?= base_url('product/tab-5/') . $products->id; ?>" class="tab-pane fade">
                                        <table class="data-table" style="width: 100%;" border="1">
                                            <tbody>
                                                <tr>
                                                    <td>Brand</td>
                                                    <td><img src="<?= base_url() . $brand->logo; ?>" title="<?= $brand->title ?>" class="img-1 img-responsive" /></td>
                                                </tr>
                                                <tr>
                                                    <td>History</td>
                                                    <td><?= $brand->history ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //Product Tabs -->
                        <!-- Upsell Products -->
                        <div class="related upsell titleLine products-list grid module ">
                            <h3 class="modtitle"><span>Upsell Products</span></h3>
                            <div class="upsell-products ">
                                <?php foreach ($products_quan as $product_quan) : ?>
                                    <div class="product-layout">
                                        <div class="product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container second_img ">
                                                    <img src="<?= base_url() . $product_quan->path; ?>" title="<?= $product_quan->title ?>" class="img-1 img-responsive" />
                                                    <img src="<?= base_url() . $product_quan->path; ?>" title="<?= $product_quan->title ?>" class="img-2 img-responsive" />
                                                </div>
                                                <!--Sale Label-->
                                                <span class="label label-sale">Sale</span>

                                            </div>
                                            <div class="button-group">
                                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                                <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
                                                <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                                <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="<?= base_url('quickview/') . $product_quan->id; ?>" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                                            </div>

                                            <div class="right-block">
                                                <div class="caption">
                                                    <h4><a href="<?= base_url('product/') . $product_quan->id; ?>"></a></h4>
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                        </div>
                                                    </div>

                                                    <div class="price">
                                                        <span class="price-new">$<?= $product_quan->sales_price ?></span>
                                                        <span class="price-old">$<?= $product_quan->price ?></span>
                                                    </div>
                                                    <div class="description item-desc ">
                                                        <p><?= $product_quan->title ?></p>
                                                    </div>
                                                </div>
                                            </div><!-- right block -->

                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <script type="text/javascript">
                $(document).ready(function() {
                    var zoomCollection = '.large-image img';
                    $(zoomCollection).elevateZoom({
                        zoomType: "inner",
                        lensSize: "200",
                        easing: true,
                        gallery: 'thumb-slider-vertical',
                        cursor: 'pointer',
                        galleryActiveClass: "active"
                    });
                    $('.large-image').magnificPopup({
                        items: [{
                                src: '<?= base_url(); ?>assets/frontend/image/demo/shop/product/1.png'
                            },
                            {
                                src: '<?= base_url(); ?>assets/frontend/image/demo/shop/product/f9.jpg'
                            },
                            {
                                src: '<?= base_url(); ?>assets/frontend/image/demo/shop/product/2.png'
                            },
                            {
                                src: '<?= base_url(); ?>assets/frontend/image/demo/shop/product/3.png'
                            },
                            {
                                src: '<?= base_url(); ?>assets/frontend/image/demo/shop/product/j9.jpg'
                            },
                        ],
                        gallery: {
                            enabled: true,
                            preload: [0, 2]
                        },
                        type: 'image',
                        mainClass: 'mfp-fade',
                        callbacks: {
                            open: function() {

                                var activeIndex = parseInt($('#thumb-slider-vertical .img.active').attr('data-index'));
                                var magnificPopup = $.magnificPopup.instance;
                                magnificPopup.goTo(activeIndex);
                            }
                        }
                    });
                    $("#thumb-slider-vertical .owl2-item").each(function() {
                        $(this).find("[data-index='0']").addClass('active');
                    });

                    $('.thumb-video').magnificPopup({
                        type: 'iframe',
                        iframe: {
                            patterns: {
                                youtube: {
                                    index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
                                    id: 'v=', // String that splits URL in a two parts, second part should be %id%
                                    src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
                                },
                            }
                        }
                    });

                    $('.product-options li.radio').click(function() {
                        $(this).addClass(function() {
                            if ($(this).hasClass("active")) return "";
                            return "active";
                        });

                        $(this).siblings("li").removeClass("active");
                        $(this).parent().find('.selected-option').html('<span class="label label-success">' + $(this).find('img').data('original-title') + '</span>');
                    });

                    var _isMobile = {
                        iOS: function() {
                            return navigator.userAgent.match(/iPhone/i);
                        },
                        any: function() {
                            return (_isMobile.iOS());
                        }
                    };

                    $(".thumb-vertical-outer .next-thumb").click(function() {
                        $(".thumb-vertical-outer .lSNext").trigger("click");
                    });

                    $(".thumb-vertical-outer .prev-thumb").click(function() {
                        $(".thumb-vertical-outer .lSPrev").trigger("click");
                    });

                    // $(".thumb-vertical-outer .thumb-vertical").lightSlider({
                    //     item: 4,
                    //     autoWidth: false,
                    //     vertical: true,
                    //     slideMargin: 7,
                    //     verticalHeight: 425,
                    //     pager: false,
                    //     controls: true,
                    //     prevHtml: '<i class="fa fa-chevron-up"></i>',
                    //     nextHtml: '<i class="fa fa-chevron-down"></i>',
                    //     responsive: [{
                    //             breakpoint: 1199,
                    //             settings: {
                    //                 verticalHeight: 330,
                    //                 item: 4,
                    //             }
                    //         },
                    //         {
                    //             breakpoint: 1024,
                    //             settings: {
                    //                 verticalHeight: 235,
                    //                 item: 2,
                    //                 slideMargin: 5,
                    //             }
                    //         },
                    //         {
                    //             breakpoint: 768,
                    //             settings: {
                    //                 verticalHeight: 340,
                    //                 item: 3,
                    //             }
                    //         },
                    //         {
                    //             breakpoint: 480,
                    //             settings: {
                    //                 verticalHeight: 100,
                    //                 item: 1,
                    //             }
                    //         }

                    //     ]

                    // });



                    // Product detial reviews button
                    $(".reviews_button,.write_review_button").click(function() {
                        var tabTop = $(".producttab").offset().top;
                        $("html, body").animate({
                            scrollTop: tabTop
                        }, 1000);
                    });




                });

                $('#button-cart').click(function() {
                    let id = <?= $products->id ?>;
                    let quantity = $("#quantity").val();
                    alert("aaaa")
                    $.ajax({
                        url: "<?= base_url('frontend/Cart/add_to_cart') ?>",
                        data: {
                            'id': id,
                            'quantity': quantity
                        },
                        type: 'post',
                        success: function(result) {
                            console.log(result)
                        }
                    })
                })
            </script>



        </div>


    </div>
    <!--Middle Part End-->
</div>
<!-- //Main Container -->