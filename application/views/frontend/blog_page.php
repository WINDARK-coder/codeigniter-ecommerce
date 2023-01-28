<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="<?= base_url('home'); ?>"><i class="fa fa-home"></i></a></li>
        <li><a href="<?= base_url('blog_page'); ?>">Blog</a></li>

    </ul>

    <div class="row">
        <!--Left Part Start -->
        <aside class="col-sm-4 col-md-3" id="column-left">


            <div class="module latest-product titleLine">
                <h3 class="modtitle"><span>Latest Product</span></h3>
                <div class="modcontent ">
                    <?php foreach ($products_date_limit as $product) : ?>
                        <div class="product-latest-item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="<?= base_url('product/') . $product->id; ?>"><img src="<?= base_url() . $product->path; ?>" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 90px; height: 90px;"></a>
                                </div>
                                <div class="media-body">
                                    <div class="caption">
                                        <h4><a href="<?= base_url('product/') . $product->id; ?>"><?= $product->title ?></a></h4>

                                        <div class="price">
                                            <span class="price-new">$<?= $product->sales_price ?></span>
                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </aside>
        <!--Left Part End -->

        <!--Middle Part Start-->
        <div id="content" class="col-md-9 col-sm-8">
            <div class="blog-header">
                <h3>Our Blog</h3>
            </div>
            <div class="blog-listitem">
                <?php foreach ($blogs as $blog) : ?>
                    <div class="blog-item ">
                        <div class="itemBlogImg col-md-4 col-sm-12">
                            <div class="article-image banners">
                                <div>
                                    <a class="popup-gallery" href="<?= base_url('blog_detail/') . $blog->id; ?>"><img src="<?= base_url() . $blog->image;; ?>" alt="Kire tuma demonstraverunt lector"></a>
                                </div>
                            </div>
                        </div>
                        <div class="itemBlogContent col-md-8 col-sm-12">
                            <div class="article-title">
                                <h4>
                                    <a href="<?= base_url('blog_detail/') . $blog->id; ?>"><?= $blog->title ?></a>
                                </h4>

                            </div>
                            <div class="article-sub-title">
                                <span class="article-date">
                                    <i class="fa fa-calendar"></i><?= $blog->created_at ?>
                                </span>
                            </div>
                            <div class="article-description">
                                <?= $blog->description ?></div>
                            <div class="blog-meta">
                                <span class="comment_count">
                                    <a href="#">0 Comments</a>
                                </span>
                                <span class="author">
                                    <span>Post by </span><?= $blog->post_by ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                <ul class="pagination">
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#>&gt;</a></li>
						<li><a href=" #">&gt;|</a></li>
                </ul>

            </div>
        </div>
    </div>
    <!--Middle Part End-->
</div>
<!-- //Main Container -->