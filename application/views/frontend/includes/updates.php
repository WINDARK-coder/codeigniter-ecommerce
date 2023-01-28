<!--Block Spotlight4  -->
<div class="so-spotlight4">
    <div class="container">
        <div class="row">
            <div class="module so-latest-blog latest-blog col-md-4 col-sm-6 col-xs-12">
                <h3 class="modtitle"><span>News Updates</span></h3>
                <div id="so_latest_blog_180" class="so-blog-external button-type2 button-type2">
                    <div class="blog-external-simple">
                        <?php foreach ($new_blogs as $new_blog) : ?>
                            <div class="media">
                                <div class="item">
                                    <div class="media-body">
                                        <div class="media-date-added"><?= $new_blog->created_at ?><br></div>
                                        <div class="media-content">
                                            <h4 class="media-heading">
                                                <a href="<?= base_url('Blog_detail/') . $new_blog->id; ?>" title="<?= $new_blog->title ?>" target="_blank"><?= $new_blog->title ?></a>
                                            </h4>
                                            <div class="description">
                                                <?= $new_blog->description ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="bestseller col-md-4 col-sm-6 col-xs-12">
                <div class="bestseller-inner">
                    <div>
                        <h3>Bestsellers</h3>
                        <?php foreach ($products_price as $product_price) : ?>
                            <div class="product-layout ">
                                <div class="product-thumb transition">
                                    <div class="image"><a href="<?= base_url('product/') . $product_price->id; ?>"><img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() . $product_price->path; ?>" title="<?= $product_price->title ?>" alt="<?= $product_price->title ?>" /></a></div>
                                    <div class="caption">
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        </div>
                                        <h4><a href="<?= base_url('product/') . $product_price->id; ?>"></a></h4>
                                        <p class="price">
                                            <span class="price-new"> $<?= $product_price->sales_price ?></span>
                                            <span class="price-old">$<?= $product_price->price ?></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="module testimonial col-md-4 col-sm-12 col-xs-12">
                <div class="clients_say">
                    <div class="block-title">
                        <h3><?= $team->fullname ?></h3>
                    </div>
                    <div class="slider-clients-say">
                        <div class="block_content">
                            <div class="image"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() . $team->image; ?>" alt="">
                            </div>
                            <div class="block-info">
                                <div class="text"><?= $team->about ?></div>
                                <div class="info">
                                    <div class="author"><?= $team->profession ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="block_content">
                            <div class="image"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url(); ?>assets/frontend/image/demo/cms/clients_say.png" alt="">
                            </div>
                            <div class="block-info">
                                <div class="text">"Dignissim ut tellus Aliquam, cursus erat ultricies tellus
                                    cursus erat ultricies tellus.. Nulla tempus sollicitudin mauris cursus
                                    dictum. Commodo laoreet semper lorem."</div>
                                <div class="info">
                                    <div class="author">- Aliquam Tellus</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Block Spotlight5  -->
<div class="so-spotlight5">
    <div class="container">
        <div class="block-brand">
            <div class="brand-slider">
                <?php foreach ($brands as $brand) : ?>
                    <div class="item-manu">
                        <a href="#" title="<?= $brand->title ?>">
                            <img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() . $brand->logo; ?>" alt="<?= $brand->title ?>">
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
</main>