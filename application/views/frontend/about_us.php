<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="<?= base_url('home'); ?>"><i class="fa fa-home"></i></a></li>
        <li><a href="<?= base_url('about-us'); ?>">About Us</a></li>
        <li><a href="#our_team">Our Team</a></li>
    </ul>
    <div class="row">
        <div id="content" class="col-sm-12">

            <div class="about-us about-demo-1">
                <div class="row">
                    <div class="col-lg-5 col-md-5 about-image"> <img src="<?= base_url() . $about_us->image; ?>" alt="<?= $about_us->title ?>"> </div>
                    <div class="col-lg-7 col-md-7 about-info">
                        <h2 class="about-title"><span><?= $about_us->title ?></span></h2>
                        <div class="about-text" id="our_team">
                            <p><?= $about_us->content ?></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 our-team">
                        <div class="our-team-content">
                            <h2 class="about-title line-hori"><span>Our Team</span></h2>
                            <div class="our-team-slider">
                                <div id="ytcs579bfc965e78d103041469840534" class="yt-content-slider owl-theme yt-content-slider-style-1 arrow-default owl2-carousel owl2-theme owl2-loaded" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-item_lg="4" data-item_sm="3" data-item_xs="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="no">
                                    <?php foreach ($our_team as $team) : ?>
                                        <div class="yt-content-slide yt-clearfix yt-content-wrap">
                                            <div class="item">
                                                <div class="member">
                                                    <div class="member-image"> <img src="<?= base_url() . $team->image; ?>" alt="Image Client" style="width: 150px; height:200px; margin-left:60px;" !important> </div>
                                                    <div class="member-info">
                                                        <h3 class="name-member"><?= $team->fullname ?></h3>
                                                        <p class="job-member"><?= $team->profession ?></p>
                                                        <p class="des-member"><?= $team->about ?></p>
                                                        <ul class="social-member">
                                                            <li class="social-icon rss"><a class="fa fa-rss" href="#" title="RSS"><span><?= $team->rss ?></span></a>
                                                            </li>
                                                            <li class="social-icon facebook"><a class="fa fa-facebook" href="#" title="Facebook"><span><?= $team->facebook ?></span></a>
                                                            </li>
                                                            <li class="social-icon twitter"><a class="fa fa-twitter" href="#" title="Twitter"><span><?= $team->twitter ?></span></a>
                                                            </li>
                                                            <li class="social-icon google"><a class="fa fa-google" href="#" title="Google"><span><?= $team->google ?></span></a>
                                                            </li>
                                                        </ul>
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
    </div>
</div>
<!-- //Main Container -->