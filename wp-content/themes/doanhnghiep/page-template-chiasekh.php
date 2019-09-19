<?php 
/*
Template Name: page-template-chiasekh
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
		<div class="wrap_list_post_cskh">
			<div class="container">
				<?php 
				$list_post_arg = array(
					'orderby' => 'post_date',
					'order' => 'DESC',
					'post_type' => 'post',
					'post_status' => 'publish',
					'cat' => 7
				);
				$list_post_q = new WP_Query();
				$list_post_q->query($list_post_arg);
				?>
				<ul class="row">
					<?php
					while($list_post_q->have_posts()): $list_post_q->the_post();
						?>
						<li class="list_post_item pw">
							<div class="col-sm-6">
								<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
								<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');"><a href="#"><?php //the_post_thumbnail();?></a> </figure>
							</div>
							<div class="col-sm-6">
								<div class="feedbacks">
									<h2 class="post_title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<div class="excerpt_cskh">
										<?php echo excerpt(300); ?>
									</div>
									<div class="read_more">
										<a href="<?php echo the_permalink(); ?>">Xem tiếp >> </a>
									</div>
								</div>
							</div>
							
						</li>
						<?php
					endwhile;
					?>
				</ul>

			</div>
		</div>
		<div class="related_post_dots">
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
