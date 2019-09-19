<?php 
/*
Template Name: page-template-phunubamuoi
*/
get_header(); 
?>	
<div class="page-wrapper">
	<div class="g_content">
		<?php 
		$content_post = get_post($my_postid);
		$content = $content_post->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
		echo $content;
		?>
		<div class="related_post_dots tg_target5">
			<div class="container">
				<h3>Bài viết liên quan</h3>
				<?php 
				$the_query = new WP_Query( array ( 
					'orderby' => 'publish_date', 
					'posts_per_page' => '5',
					'cat'=> 10
				));
				// output the random post
				$categories_list_post_r = get_categories();
				?><ul>
					<?php
					while ( $the_query->have_posts() ) : $the_query->the_post();
						global $post;
						$categories = get_the_category($post->ID);
							//var_dump($categories);
						?>
						<li>

							<a href="<?php echo the_permalink() ?>"><?php echo the_title(); ?></a>
						</li>
						<?php 
					endwhile;	
					?></ul>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>
