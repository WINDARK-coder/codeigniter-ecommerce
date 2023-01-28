<!-- Block Spotlight3  -->
<div class="so-spotlight3">
    <div class="container">
        <!-- Mod Supercategory 1 -->
        <div class="module cus-style-supper-cate supper1" style="margin-top: 4px !important;">
            <div class="header">
                <h3 class="modtitle">
                    <span class="icon-color">
                        <i class="fa fa-futbol-o "></i>
                        Appliances
                        <small class="arow-after"></small>
                    </span>
                    <strong class="line-color"></strong>
                </h3>
            </div>

            <div id="so_super_category_1" class="so-sp-cat first-load">
                <div class="spcat-wrap ">
                    <div class="spcat-tabs-container" data-delay="300" data-duration="600" data-effect="flip" data-ajaxurl="#" data-modid="155">
                        <!--Begin Tabs-->
                        <div class="spcat-tabs-wrap">
                            <span class="spcat-tab-selected"> Rating </span>
                            <span class="spcat-tab-arrow">▼</span>
                            <ul class="spcat-tabs cf">
                                <li class="spcat-tab  tab-sel tab-loaded" data-active-content=".items-category-sales" data-field_order="sales">
                                    <span class="spcat-tab-label">Sale</span>
                                </li>
                                <li class="spcat-tab " data-active-content=".items-category-p_sort_order" data-field_order="p_sort_order">
                                    <span class="spcat-tab-label">Sort Order</span>
                                </li>
                                <li class="spcat-tab" data-active-content=".items-category-rating" data-field_order="rating">
                                    <span class="spcat-tab-label">Rating</span>
                                </li>
                                <li class="spcat-tab " data-active-content=".items-category-p_quantity" data-field_order="p_quantity">
                                    <span class="spcat-tab-label">Quantity</span>
                                </li>
                                <li class="spcat-tab " data-active-content=".items-category-p_price" data-field_order="p_price">
                                    <span class="spcat-tab-label">Price</span>
                                </li>
                            </ul>
                        </div>
                        <!-- End Tabs-->
                    </div>
                    <div class="main-left">
                        <div class="banner-post-text">
                            <a href="#" title="<?= $banners_app[0]->title ?>"> <img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() . $banners_app[0]->image ?>" alt="banner"> </a>
                        </div>
                        <div class="hot-category">
                            <div class="category-wrap-cat">
                                <?php foreach ($lists_app as  $key => $value) : ?>
                                    <div class="title-imageslider  sp-cat-title-parent">
                                        <?= $value['title'] ?>
                                    </div>

                                    <div id="cat_slider_3" class="slider">
                                        <?php if (!empty($value['childs'])) : ?>
                                            <?php $childs = $value['childs'];
                                            foreach ($childs as  $ke => $val) : ?>

                                                <div class="cat_slider_inner so_category_type_default">
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="cat_slider_title">

                                                                <a href="<?= base_url('category'); ?>" title="<?= $val['title'] ?>" target="_self">
                                                                    <i class="fa fa-caret-right"></i> <?= $val['title'] ?>
                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>
                                        <?php endif ?>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                    <div class="main-right">
                        <div class="banner-pre-text">
                            <a href="#" title="<?= $banners_app[1]->title ?>"> <img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() . $banners_app[1]->image ?>" alt="banner"></a>
                        </div>

                        <div class="spcat-items-container products-list grid show-pre show-row">
                            <!--Begin Items-->
                            <div class="spcat-items spcat-items-loaded items-category-sales product-layout spcat-items-selected" data-total="9">
                                <div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
                                    <div class="ltabs-items-inner ltabs-slider ">
                                        <?php foreach ($products_app as $product) : ?>

                                            <div class="ltabs-item ">
                                                <div class="item-inner product-thumb product-item-container transition ">

                                                    <div class="left-block">
                                                        <div class="product-image-container">
                                                            <div class="image">
                                                                <a class="lt-image" href="<?= base_url('product/') . $product->id; ?>" target="_self" title="<?= $product->title ?>">
                                                                    <img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() . $product->path; ?>" alt="<?= $product->title ?>" title="<?= $product->title ?>" />
                                                                    <img class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() . $product->path; ?>" alt="<?= $product->title ?>" title="<?= $product->title ?>" />
                                                                </a>
                                                            </div>

                                                        </div>
                                                        <span class="label label-sale">Sale</span>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="caption">
                                                            <div class="rating">
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            </div>
                                                            <h4>
                                                                <a href="<?= base_url('product') . $product->id; ?>" title="<?= $product->title ?>" target="_self">
                                                                    <?= $product->title ?></a>
                                                            </h4>
                                                            <p class="price">
                                                                <span class="price-new">$<?= $product->sales_price ?></span> <span class="price-old">$<?= $product->price ?></span>

                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                                        <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="<?= base_url('quickview'); ?>" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                                                    </div>

                                                </div>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Items-->
                    </div>


                </div>
            </div>
        </div>
        <!-- End Mod -->
        <!-- Banner Content1 -->
        <div class="module banner">
            <div class="banners">
                <div><a title="<?= $banners_app[2]->title ?>" href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() . $banners_app[2]->image ?>" alt="Static Image"></a></div>
            </div>
        </div>
        <!-- End Banner -->
        <!-- Mod Supercategory 2 -->
        <div class="module cus-style-supper-cate supper1" style="margin-top: 4px !important;">
            <div class="header">
                <h3 class="modtitle">
                    <span class="icon-color">
                        <i class="fa fa-futbol-o "></i>

                        Culinary
                        <small class="arow-after"></small>
                    </span>
                    <strong class="line-color"></strong>
                </h3>

            </div>


            <div id="so_super_category_1" class="so-sp-cat first-load">
                <div class="spcat-wrap ">
                    <div class="spcat-tabs-container" data-delay="300" data-duration="600" data-effect="flip" data-ajaxurl="#" data-modid="155">
                        <!--Begin Tabs-->
                        <div class="spcat-tabs-wrap">
                            <span class="spcat-tab-selected"> Rating </span>
                            <span class="spcat-tab-arrow">▼</span>
                            <ul class="spcat-tabs cf">
                                <li class="spcat-tab  tab-sel tab-loaded" data-active-content=".items-category-sales" data-field_order="sales">
                                    <span class="spcat-tab-label">Sale</span>
                                </li>
                                <li class="spcat-tab " data-active-content=".items-category-p_sort_order" data-field_order="p_sort_order">
                                    <span class="spcat-tab-label">Sort Order</span>
                                </li>
                                <li class="spcat-tab" data-active-content=".items-category-rating" data-field_order="rating">
                                    <span class="spcat-tab-label">Rating</span>
                                </li>
                                <li class="spcat-tab " data-active-content=".items-category-p_quantity" data-field_order="p_quantity">
                                    <span class="spcat-tab-label">Quantity</span>
                                </li>
                                <li class="spcat-tab " data-active-content=".items-category-p_price" data-field_order="p_price">
                                    <span class="spcat-tab-label">Price</span>
                                </li>
                            </ul>
                        </div>
                        <!-- End Tabs-->
                    </div>
                    <div class="main-left">
                        <div class="banner-post-text">
                            <a href="#" title="<?= $banners_cul[0]->title ?>"> <img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() . $banners_cul[0]->image ?>" alt="banner"> </a>
                        </div>
                        <div class="hot-category">
                            <div class="category-wrap-cat">
                                <?php foreach ($lists_cul as  $key => $value) : ?>

                                    <div class="title-imageslider  sp-cat-title-parent">
                                        <?= $value['title'] ?> </div>

                                    <!-- <div id="cat_slider_3" class="slider">
                                        <?php if (!empty($value['childs'])) : ?>
                                            <?php $childs = $value['childs'];
                                            foreach ($childs as  $ke => $val) : ?>
                                                <div class="cat_slider_inner so_category_type_default">
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <?= $val['title'] ?>
                                                            <div class="cat_slider_title">

                                                                <a href="<?= base_url('category'); ?>" title="Tange manue" target="_self">
                                                                    <i class="fa fa-caret-right"></i>
                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>

                                        <?php endif ?>
                                    </div> -->
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                    <div class="main-right">
                        <div class="banner-pre-text">
                            <a href="#" title="<?= $banners_cul[1]->title ?>"> <img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() . $banners_cul[1]->image ?>" alt="banner"></a>
                        </div>

                        <div class="spcat-items-container products-list grid show-pre show-row">
                            <!--Begin Items-->

                            <div class="spcat-items spcat-items-loaded items-category-sales product-layout spcat-items-selected" data-total="9">
                                <div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
                                    <div class="ltabs-items-inner ltabs-slider ">

                                        <?php foreach ($products_cul as $product) : ?>

                                            <div class="ltabs-item ">
                                                <div class="item-inner product-thumb product-item-container transition ">
                                                    <div class="left-block">
                                                        <div class="product-image-container">
                                                            <div class="image">
                                                                <a class="lt-image" href="<?= base_url('product/') . $product->id; ?>" target="_self" title="<?= $product->title ?>">
                                                                    <img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() . $product->path; ?>" alt="<?= $product->title ?>" title="<?= $product->title ?>" />
                                                                    <img class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() . $product->path; ?>" alt="<?= $product->title ?>" title="<?= $product->title ?>" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <span class="label label-new">New</span>
                                                        <span class="label label-sale">Sale</span>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="caption">
                                                            <div class="rating">
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <h4>
                                                                <a href="<?= base_url('product/') . $product->id; ?>" title="<?= $product->title ?>" target="_self">
                                                                    <?= $product->title ?> </a>
                                                            </h4>
                                                            <p class="price">
                                                                <span class="price-new">$<?= $product->sales_price ?></span> <span class="price-old">$<?= $product->price ?></span>

                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                                        <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="<?= base_url('quickview'); ?>" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Items-->
                    </div>


                </div>
            </div>
        </div>
        <!-- End Mod -->
        <!-- Banner Content2 -->
        <div class="module banner">
            <div class="banners">
                <div><a title="<?= $banners_cul[2]->title ?>" href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() . $banners_cul[2]->image ?>" alt="<?= $banners_cul[2]->title ?>"></a></div>
            </div>
        </div>
        <!-- End Banner -->
        <!-- Mod Supercategory 3 -->
        <div class="module cus-style-supper-cate supper3">
            <div class="header">
                <h3 class="modtitle">
                    <span class="icon-color">
                        <i class="fa fa-empire"></i>

                        Electronics
                        <small class="arow-after"></small>
                    </span>
                    <strong class="line-color"></strong>
                </h3>

            </div>

            <div id="so_super_category_3" class="so-sp-cat first-load">
                <div class="spcat-wrap ">
                    <div class="spcat-tabs-container" data-delay="300" data-duration="600" data-effect="flip" data-ajaxurl="#" data-modid="155">
                        <!--Begin Tabs-->
                        <div class="spcat-tabs-wrap">
                            <span class="spcat-tab-selected"> Rating </span>
                            <span class="spcat-tab-arrow">▼</span>
                            <ul class="spcat-tabs cf">
                                <li class="spcat-tab  " data-active-content=".items-category-sales" data-field_order="sales">
                                    <span class="spcat-tab-label">Sale</span>
                                </li>
                                <li class="spcat-tab " data-active-content=".items-category-p_sort_order" data-field_order="p_sort_order">
                                    <span class="spcat-tab-label">Sort Order</span>
                                </li>
                                <li class="spcat-tab" data-active-content=".items-category-rating" data-field_order="rating">
                                    <span class="spcat-tab-label">Rating</span>
                                </li>
                                <li class="spcat-tab " data-active-content=".items-category-p_quantity" data-field_order="p_quantity">
                                    <span class="spcat-tab-label">Quantity</span>
                                </li>
                                <li class="spcat-tab tab-sel tab-loaded" data-active-content=".items-category-p_price" data-field_order="p_price">
                                    <span class="spcat-tab-label">Price</span>
                                </li>
                            </ul>
                        </div>
                        <!-- End Tabs-->
                    </div>
                    <div class="main-left">
                        <div class="banner-post-text">
                            <a href="#" title="<?= $banners_elect[0]->title ?>"> <img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() . $banners_elect[0]->image ?>" alt="<?= $banners_elect[0]->title ?>"> </a>
                        </div>
                        <div class="hot-category">
                            <div class="category-wrap-cat">
                                <?php foreach ($lists_elect as  $key => $value) : ?>
                                    <div class="title-imageslider  sp-cat-title-parent">
                                        <?= $value['title'] ?> </div>
                                    <?php if (!empty($value['childs'])) : ?>
                                        <div id="cat_slider_1" class="slider" style="min-height: 100px;">
                                            <?php $childs = $value['childs'];
                                            foreach ($childs as  $k => $v) : ?>
                                                <div class="cat_slider_inner so_category_type_default">
                                                    <div class="item">
                                                        <div class="item-inner">
                                                            <div class="cat_slider_title">

                                                                <a href="<?= base_url('category'); ?>" title="Tange manue" target="_self">
                                                                    <i class="fa fa-caret-right"></i> <?= $v['title'] ?> </a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                    <?php endif ?>

                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                    <div class="main-right">
                        <div class="banner-pre-text">
                            <a href="#" title="<?= $banners_elect[1]->title ?>"> <img src="<?= base_url() . $banners_elect[1]->image ?>" alt="banner"></a>
                        </div>

                        <div class="spcat-items-container products-list grid show-pre show-row">
                            <!--Begin Items-->
                            <div class="spcat-items spcat-items-loaded items-category-p_price product-layout spcat-items-selected" data-total="9">
                                <div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
                                    <div class="ltabs-items-inner ltabs-slider ">
                                        <?php foreach ($products_elect as $product) : ?>

                                            <div class="ltabs-item ">
                                                <div class="item-inner product-thumb product-item-container transition ">
                                                    <div class="left-block">
                                                        <div class="product-image-container">
                                                            <div class="image">
                                                                <a class="lt-image" href="<?= base_url('product/') . $product->id; ?>" target="_self" title="<?= $product->title ?>">
                                                                    <img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() . $product->path; ?>" alt="<?= $product->title ?>" title="<?= $product->title ?>" />
                                                                    <img class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() . $product->path; ?>" alt="<?= $product->title ?>" title="<?= $product->title ?>" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <span class="label label-new">New</span>
                                                        <span class="label label-sale">Sale</span>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="caption">
                                                            <div class="rating">
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <h4>
                                                                <a href="<?= base_url('product/') . $product->id; ?>" title="<?= $product->title ?>" target="_self">
                                                                    <?= $product->title ?> </a>
                                                            </h4>
                                                            <p class="price">
                                                                <span class="price-new">$<?= $product->sales_price ?></span> <span class="price-old">$<?= $product->price ?></span>

                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                                        <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="<?= base_url('quickview'); ?>" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Items-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mod -->
        <!-- Banner Content3 -->
        <div class="module banner">
            <div class="banners">
                <div><a title="<?= $banners_elect[2]->title ?>" href="#"><img class="lazyload img-responsive" data-sizes="auto" data-src="<?= base_url() . $banners_elect[2]->image ?>" alt="<?= $banners_elect[2]->title ?>"></a></div>
            </div>
        </div>
        <!-- End Banner -->
    </div>
</div>