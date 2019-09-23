<div class="scrolltop">
	<i class="fa fa-angle-up" aria-hidden="true"></i>	
</div>
<footer class="footer">
	<div class="top_footer">
		<div class="container">
			<ul>
				<li>
					<a href="https://kohinoor.com.vn/" target="_blank"><img src="<?php echo BASE_URL; ?>/images/icon_koni.png"><img src="<?php echo BASE_URL; ?>/images/icon_koni_hv.png"></a>
					<p><a href="https://kohinoor.com.vn/" target="_blank">KOHINOOR</a></p>
				</li>
				<li>
					<a href="<?php echo get_option('footer_fb');?>" target="_blank" ><img src="<?php echo BASE_URL; ?>/images/icon_fb_footer.png"><img src="<?php echo BASE_URL; ?>/images/icon_fb_footer_hv.png"></a>
					<p><a href="<?php echo get_option('footer_fb');?>" target="_blank">Theo dõi tin tức</a></p>
				</li>
				<li>
					<a href="tel:<?php echo get_option('header_phone');?>"><img src="<?php echo BASE_URL; ?>/images/icon_phone_ft.png"><img src="<?php echo BASE_URL; ?>/images/icon_phone_ft_hv.png"></a>
					<p><a href="tel:<?php echo get_option('header_phone');?>">Hotline</a></p>
				</li>
				<li>
					<a href="<?php echo get_page_link(14); ?>"><img src="<?php echo BASE_URL; ?>/images/icon_question_ft.png"><img src="<?php echo BASE_URL; ?>/images/icon_question_hv.png"></a>
					<p><a href="<?php echo get_page_link(14); ?>">Hỏi đáp</a></p>
				</li>
			</ul>
		</div>
	</div>
	<div class="middle_footer">
		<div class="container">
			<div class="row">
					<?php if ( is_active_sidebar( 'footer1' ) ) { ?>
						<div class="col-sm-3">
							<?php dynamic_sidebar( 'footer1' ); ?>
						</div>	
					<?php } ?>
					<?php if ( is_active_sidebar( 'footer2' ) ) { ?>
						<div class="col-sm-3">
							<?php dynamic_sidebar( 'footer2' ); ?>
						</div>	
					<?php } ?>
					<?php if ( is_active_sidebar( 'footer3' ) ) { ?>
						<div class="col-sm-3">
							<?php dynamic_sidebar( 'footer3' ); ?>
						</div>	
					<?php } ?>
					<?php if ( is_active_sidebar( 'footer4' ) ) { ?>
						<div class="col-sm-3">
							<?php dynamic_sidebar( 'footer4' ); ?>
							<?php if( get_option('footer_fb') || get_option('footer_zalo') || get_option('footer_insta') ) { ?>
				<ul class="scfooter">
					<li><a href="<?php echo get_option('footer_fb');?>" target="_blank"><img src="<?php echo BASE_URL; ?>/images/icon_fb_right.png"></a></li>
					<li><a href="<?php echo get_option('footer_zalo');?>" target="_blank"><img src="<?php echo BASE_URL; ?>/images/icon_insta_right.png"></a></li>
					<li><a href="<?php echo get_option('footer_insta');?>" target="_blank"><img src="<?php echo BASE_URL; ?>/images/icon_zalo_right.png"></a></li>
				</ul>
				<?php }?>
						</div>	
					<?php } ?>
			</div>
		</div>
	</div>
	<div class="short_bg_ft"></div>
	<div class="order_now_fixed">
		<img src="<?php echo BASE_URL; ?>/images/icon_datmuangay.png">
	</div>
	<div class="popup popup_order ">
			<?php echo do_shortcode('[contact-form-7 id="449" title="Form liên hệ popup"]'); ?>
	</div>
	<div class="hotline_fixed">
		<a href="tel:<?php echo get_option('header_phone');?>"><img src="<?php echo BASE_URL; ?>/images/icon_hotline_mb.png"></a>
		<a href="tel:<?php echo get_option('header_phone');?>"><img src="<?php echo BASE_URL; ?>/images/hotline_desk.png"></a>
	</div>
</footer>
<?php wp_footer(); ?>
<!-- MESSENGER -->
<script>      
	window.fbAsyncInit = function() {
		FB.init({
			appId      : '1953938748210615',
			xfbml      : true,
			version    : 'v2.6'
		});
	};
	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));      
</script>
<!-- END  MESSENGER -->
<script src="<?php echo BASE_URL; ?>/js/wow.min.js"></script>
<script src="<?php echo BASE_URL; ?>/js/slick.js"></script>
<script src="<?php echo BASE_URL; ?>/js/pagination.js"></script>
	<script src="<?php echo BASE_URL; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo BASE_URL; ?>/js/custom.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d888fadc22bdd393bb74176/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>