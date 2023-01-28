	<!-- //Main Container -->
	<script type="text/javascript">
		var $typeheader = 'header-home1';
		//-->
	</script>
	<!-- Footer Container -->
	<footer class="footer-container typefooter-1">
		<!-- FOOTER TOP -->
		<!-- <div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="module social_block col-md-3 col-sm-12 col-xs-12">
							<ul class="social-block ">
								<li class="facebook"><a class="_blank" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li class="twitter"><a class="_blank" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li class="rss"><a class="_blank" href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
								<li class="google_plus"><a class="_blank" href="#" target="_blank"><i class="fa  fa-google-plus"></i></a></li>
								<li class="pinterest"><a class="_blank" href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						<div class="module news-letter col-md-9 col-sm-12 col-xs-12">
							<div class="newsletter">
								<div class="title-block">
									<div class="page-heading">SIGN UP FOR OUR NEWSLETTER</div>
									<div class="pre-text">
										Duis at ante non massa consectetur iaculis id non tellus
									</div>
								</div>
								<div class="block_content">
									<form method="post" name="signup" id="signup" class="btn-group form-inline signup">
										<div class="form-group required send-mail">
											<div class="input-box">
												<input type="email" placeholder="Your email address..." value="" class="form-control" id="txtemail" name="txtemail" size="55">
											</div>
											<div class="subcribe">
												<button class="btn btn-default btn-lg" type="submit" name="submit">
													Subscribe </button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- FOOTER CENTER -->
		<div class="footer-center" style="margin-top: 35px;">
			<div class="container content">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12 collapsed-block footer-links box-footer">
						<div class="module ">
							<div class="content-block-footer">
								<div class="footer-logo">
									<a href="<?= base_url('home'); ?>"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() . get_website_logo()->logo; ?>" title="Max Shop" alt="Max Shop" /></a>
								</div>
								<p><?= get_website_logo()->title; ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 box-account box-footer">
						<div class="module clearfix">
							<h3 class="modtitle">My Account</h3>
							<div class="modcontent">
								<ul class="menu">
									<li><a href="<?= base_url('my_account'); ?>">Account</a></li>
									<li><a href="<?= base_url('cart'); ?>">Cart</a></li>
									<li><a href="<?= base_url('wishlist'); ?>">Wishlist</a></li>
									<li><a href="<?= base_url('checkout'); ?>">Checkout</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 box-information box-footer">
						<div class="module clearfix">
							<h3 class="modtitle">Information</h3>
							<div class="modcontent">
								<ul class="menu">
									<li><a href="<?= base_url('about-us'); ?>">About Us</a></li>
									<li><a href="<?= base_url('contact_us'); ?>">Contact us</a></li>
									<li><a href="<?= base_url('blog_page'); ?>">Blog</a></li>
									<li><a href="<?= base_url('faq'); ?>">FAQ</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3  col-sm-6 collapsed-block box-footer">
						<div class="module ">
							<h3 class="modtitle">About Us</h3>
							<div class="modcontent">
								<ul class="contact-address">
									<li><span class="fa fa-home"></span> <?= get_settings2()->key ?></li>
									<li><span class="fa fa-envelope"></span> Email: <a href="#">
											<?= get_settings2()->value ?></a></li>
									<li><span class="fa fa-phone">&nbsp;</span> Phone 1: <?= get_settings2()->phone ?></li>
								</ul>
								<ul class="payment-method">
									<?php foreach ($payment_methods as $payment_method) : ?>
										<li><a title="<?= $payment_method->title ?>" href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() . $payment_method->image; ?>" alt="<?= $payment_method->title ?>"></a></li>
									<?php endforeach ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- FOOTER BOTTOM -->
		<div class="footer-bottom ">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						Maxshop © 2018 - 2019. MAGENTECH Store. All Rights Reserved.
					</div>
					<div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>
				</div>
			</div>
		</div>

	</footer>
	<!-- //end Footer Container -->

	<!-- Cpanel Block -->

	<div id="sp-cpanel" class="sp-delay">
		<div id="sp-cpanel_settings">
			<div class="panel-group ">
				<label>Header style</label>
				<div class="group-boxed">
					<select id="change_header_type" name="cpheaderstype" class="form-control" onchange="headerTypeChange(this.value);">
						<option value="header-home1">Header 1</option>
						<option value="header-home2">Header 2</option>
						<option value="header-home3">Header 3</option>
						<option value="header-home4">Header 4</option>
						<option value="header-home5">Header 5</option>
						<option value="header-home6">Header 6</option>
						<option value="header-home7">Header 7</option>
						<option value="header-home8">Header 8</option>
						<option value="header-home9">Header 9</option>
						<option value="header-home10">Header 10</option>
					</select>
				</div>
			</div>
		</div>
	</div>

	<link rel='stylesheet' property='stylesheet' href='<?= base_url(); ?>assets/frontend/css/themecss/cpanel.css' type='text/css' media='all' />

	<!-- Include Libs & Plugins
	============================================ -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/themejs/libs.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/unveil/jquery.unveil.js"></script>


	<!-- Theme files
	============================================ -->
	<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/themejs/application.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/themejs/toppanel.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/themejs/addtocart.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/themejs/cpanel.js"></script>
	</body>

	</html>