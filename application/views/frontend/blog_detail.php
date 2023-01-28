<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Kire tuma demonstraverunt lector</a></li>
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
                                    <a href="#"><img src="<?= base_url() . $product->path; ?>" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 90px; height: 90px;"></a>
                                </div>
                                <div class="media-body">
                                    <div class="caption">
                                        <h4><a href="#"><?= $product->title ?></a></h4>

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
            <!-- Add here latest added products in database -->
        </aside>
        <!--Left Part End -->

        <!--Middle Part Start-->
        <div id="content" class="col-md-9 col-sm-8">
            <div class="article-info">



                <div class="blog-header">
                    <h3><?= $blogs->title ?></h3>
                </div>
                <div class="article-sub-title">
                    <span class="article-author">Post by: <a href="#"> <?= $blogs->post_by ?></a></span>
                    <span class="article-date"><?= $blogs->created_at ?></span>
                    <span class="article-comment">0 Comments</span>
                </div>
                <div class="form-group">
                    <a href="<?= base_url() . $blogs->image; ?>" class="image-popup"><img src="<?= base_url() . $blogs->image; ?>" alt="Kire tuma demonstraverunt lector"></a>
                </div>

                <div class="article-description">
                    <p><?= $blogs->content ?></p>
                </div>

                <div class="panel panel-default related-comment">
                    <div class="panel-body">
                        <div class="form-group">
                            <div id="comments" class="blog-comment-info">

                                <h3 id="review-title">Leave your comment </h3>
                                <input type="hidden" name="blog_article_reply_id" value="0" id="blog-reply-id">
                                <div class="comment-left contacts-form row">
                                    <div class="col-md-6">
                                        <b>Your Name:</b>
                                        <br>
                                        <input type="text" name="name" value="" class="form-control">
                                        <br>
                                    </div>
                                    <div class="col-md-12">
                                        <b>Your Comment:</b>
                                        <br>
                                        <textarea rows="6" cols="50" name="text" class="form-control"></textarea>
                                        <span style="font-size: 11px;">Note: HTML is not translated!</span>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                                <br>
                                <div class="text-left"><a id="button-comment" class="btn buttonGray"><span>Submit</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Middle Part End-->
</div>
<!-- //Main Container -->