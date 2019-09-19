<?php 
/*
Template Name: page-template-chuyengiatuvan
*/
get_header(); 
?>	
<div class="page-wrapper">
	<div class="g_content">
		<?php 
		$my_postid = 16;//This is page id or post id
		$content_post = get_post($my_postid);
		$content = $content_post->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
		echo $content;
		?>
		<div class="product_append">
			<div class="container">
				<?php echo do_shortcode('[product_append_page]'); ?>
			</div>
		</div>		

	</div>
</div>
<?php get_footer(); ?>
