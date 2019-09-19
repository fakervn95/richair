<?php 
get_header(); 
?>	
<div id="wrap">
	<div class="g_content">
		<div class="container">
			<div class="content_archive">
				<div class="tab_new_most">
					<ul>
						<li class="current" data-tab="tab-1">Mới nhất</li>
						<li data-tab="tab-2">Xem nhiều</li>
					</ul>
				</div>
				<div class="list_post_new_archive tab-content-noflex current" id="tab-1">
					<?php 
						$list_post_arg_bigpost_new = array(
						'posts_per_page' => 1,
						'orderby' => 'publish_date',
						'order' => 'DESC',
						'post_type' => 'post',
						'post_status' => 'publish',
						'category__not_in' => array(7,6)
					);
					$list_post_q_bigpost_new = new WP_Query();
					$list_post_q_bigpost_new->query($list_post_arg_bigpost_new);
					?>
					<div class="big_post pw">
						<?php 
						while($list_post_q_bigpost_new->have_posts()): $list_post_q_bigpost_new->the_post();
						?>
						<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
						<div class="col-sm-6">
							<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');"><a href="<?php the_permalink(); ?>"><?php //the_post_thumbnail();?></a> </figure>
						</div>
						<div class="post_wrapper_content col-sm-6">
							<h2 class="post_title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php if(is_search() OR is_archive()){?>
								<div class="excerpt"><p><?php echo excerpt(150); ?></p></div>
								<a class="readmore" href="<?php echo the_permalink(); ?>">Xem thêm</a>
							<?php } 
							else {
								if($post->post_excerpt){ ?>
									<div class="excerpt"><p><?php echo excerpt(150); ?></p></div>
									<a class="readmore" href="<?php echo the_permalink(); ?>">Xem thêm></a>
								<?php } else{
									the_content();
								} 
							} endwhile; ?>
						</div>
					</div>
					<?php 
					$list_post_arg = array(
						'posts_per_page' => 20,
						'orderby' => 'publish_date',
						'order' => 'DESC',
						'post_type' => 'post',
						'post_status' => 'publish',
						'category__not_in' => array(7,6),
						'offset' => 1
					);
					$list_post_q = new WP_Query();
					$list_post_q->query($list_post_arg);
					?>
					<ul class="wrap_list_pagi">
						<?php 
						while($list_post_q->have_posts()): $list_post_q->the_post();
							get_template_part('includes/frontend/loop/loop_post');
						endwhile;
						?>
					</ul>
					<?php wp_reset_postdata();?>
				</div>
				<!-- list_post_new_archive -->

				<div class="list_post_most_archive tab-content-noflex" id="tab-2">
						<?php 
					$list_post_arg_bigpostmv = array(
						'posts_per_page' => 1,
						'meta_key' => 'wpb_post_views_count',
						'orderby' => 'meta_value_num',
						'order' => 'DESC',
						'post_type' => 'post',
						'category__not_in' => array(7,6),
						'post_status' => 'publish'
					);
					$list_post_q_bigpostmv = new WP_Query();
					$list_post_q_bigpostmv->query($list_post_arg_bigpostmv);
					?>
					<div class="big_post pw">
						<?php 
						while($list_post_q_bigpostmv->have_posts()): $list_post_q_bigpostmv->the_post();
						?>
						<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
						<div class="col-sm-6">
							<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');"><a href="<?php the_permalink(); ?>"><?php //the_post_thumbnail();?></a> </figure>
						</div>
						<div class="post_wrapper_content col-sm-6">
							<h2 class="post_title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php if(is_search() OR is_archive()){?>
								<div class="excerpt"><p><?php echo excerpt(150); ?></p></div>
								<a class="readmore" href="<?php echo the_permalink(); ?>">Xem thêm</a>
							<?php } 
							else {
								if($post->post_excerpt){ ?>
									<div class="excerpt"><p><?php echo excerpt(150); ?></p></div>
									<a class="readmore" href="<?php echo the_permalink(); ?>">Xem thêm></a>
								<?php } else{
									the_content();
								} 
							} endwhile; ?>
						</div>
					</div>
							<?php 
					$list_post_arg_mv = array(
						'posts_per_page' => 11,
						'meta_key' => 'wpb_post_views_count',
						'orderby' => 'meta_value_num',
						'order' => 'DESC',
						'post_type' => 'post',
						'category__not_in' => array(7,6),
						'post_status' => 'publish',
						'offset' => 1
					);
					$list_post_q_mv = new WP_Query();
					$list_post_q_mv->query($list_post_arg_mv);
					?>
					<ul>
						<?php 
						while($list_post_q_mv->have_posts()): $list_post_q_mv->the_post();
							get_template_part('includes/frontend/loop/loop_post');
						endwhile;
						?>
					</ul>
					<?php wp_reset_postdata();?>
				</div><!-- list_post_most_archive -->
			</div><!-- content_archive -->

		</div>


	</div>
</div>
</div>
<?php get_footer(); ?>
