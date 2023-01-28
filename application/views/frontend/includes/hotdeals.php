<!-- Block Spotlight2  -->
<div class="so-spotlight2 ">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8 col-xs-12">
                <!-- DEAL -->
                <div class="module so-deals">
                    <h3 class="modtitle"><span>Hot Deals</span></h3>
                    <div class="modcontent">
                        <div id="so_deals_14513931681482050581" class="so-deal modcontent products-list grid clearfixbutton-type1 style2">
                            <div class="extraslider-inner product-layout deal-slider">
                                <?php foreach ($products_date as $product) : ?>
                                    <div class="product-thumb transition product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container">
                                                <div class="image">
                                                    <span class="label label-sale">Sale</span>
                                                    <a class="lt-image" href="<?= base_url('product/') . $product->id; ?>">
                                                        <img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() . $product->path; ?>" alt="<?= $product->title ?>" title="<?= $product->title ?>" />
                                                        <img class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() . $product->path; ?>" alt="<?= $product->title ?>" title="<?= $product->title ?>" />
                                                    </a>
                                                    <div class="item-time">
                                                        <div class="item-timer">
                                                            <div class="defaultCountdown-30"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <h4><a href="<?= base_url('product/') . $product->id; ?>" target="_self" title="<?= $product->title ?>"><?= $product->title ?></a></h4>
                                                <p class="price">
                                                    <span class="price-new">$<?= $product->sales_price ?></span> <span class="price-old">$<?= $product->price ?></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <!-- MODULE BESTSELER -->
                <div class="moduletable module best-seller">
                    <h3 class="modtitle"><span>Best Sellers</span></h3>
                    <div id="sp_extra_slider_20796849091482058205" class="so-extraslider">
                        <div class="extraslider-inner best-seller-slider">
                            <?php foreach ($products_quan as $product) : ?>
                                <div class="item ">
                                    <div class="item-wrap style1">
                                        <div class="item-wrap-inner media">
                                            <div class="media-left">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="<?= base_url('product/') . $product->id; ?>" class="lt-image" target="_self" title="<?= $product->title ?>">
                                                            <img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() . $product->path; ?>" alt="<?= $product->title ?>" title="<?= $product->title ?>" />
                                                            <img class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() . $product->path; ?>" alt="<?= $product->title ?>" title="<?= $product->title ?>" />
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="item-info">
                                                    <div class="rating">
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    </div>
                                                    <div class="item-title">
                                                        <a href="<?= base_url('product/') . $product->id; ?>" title="<?= $product->title ?>">
                                                            <?= $product->title ?> </a>
                                                    </div>
                                                    <div class="item-content">
                                                        <div class="content_price">
                                                            <span class="price product-price"> $<?= $product->sales_price ?> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>