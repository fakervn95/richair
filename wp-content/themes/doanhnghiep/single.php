<?php 
get_header(); 
?>	
<div id="wrap">
	<?php 
		// Get the current category ID, e.g. if we're on a category archive page
	$postcat = get_the_category( $post->ID );
		//var_dump($postcat);
	?>
	<div class="g_content <?php if ( !empty( $postcat)  && $postcat[0]->term_id == 7  ) { echo 'cat_cskh'; } ?>">
		<?php 	if ( !empty( $postcat)  && $postcat[0]->term_id == 7  ) { 
			$my_postid = 18 ;
			$content_post = get_post($my_postid);
			$content = $content_post->post_content;
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]&gt;', $content);
			echo $content;

			?>
			<div class="container">
				<?php 
				wpb_set_post_views(get_the_ID());
				if(have_posts()) :
					while(have_posts()) : the_post(); ?>
						<div class="content_left">
							<article class="content_single_post">
								<div class="single_post_info">
									<h2><?php the_title(); ?></h2>
									<p><?php the_time('d/m/Y');?><span>  <?php the_time('g:i') ?></span> 
										| Luợt xem : <?php echo wpb_get_post_views(get_the_ID()); ?>
									</p>
								</div>

								<div class="text_content">
									<?php  the_content(); ?>
								</div>
							</article>

						</div> 
					<?php endwhile;
				else:
				endif;
				wp_reset_postdata();
				?>
				
					<?php echo do_shortcode('[product_append_page]'); ?>
				
			</div>
			<?php $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 2, 'post__not_in' => array($post->ID) ) ); ?>
			<?php if($related){ ?>
				<div class="related_posts">
					<div class="container">
						<ul class="row"> 
							<?php

							if( $related ) foreach( $related as $post ) {
								setup_postdata($post); ?>
								<li class="col-sm-6 col-xs-12">
									<div class="list_item_related pw">
										<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
										<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>"><a href="<?php the_permalink(); ?>"><?php //the_post_thumbnail(); ?></a></figure>

										<div class="textwidget">
											<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
											<div class="excerpt_cskh">
												<p><?php echo excerpt(100); ?></p>
											</div>
											<div class="read_more">
												<a href="<?php echo the_permalink(); ?>">Xem tiếp >> </a>
											</div>
										</div>
									</div>
								</li>
							<?php }
							wp_reset_postdata(); ?>
						</ul> 
					</div>
				</div>
			<?php } ?> 
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
			<?php }else {?>
				<div class="container">
					<div class="tg_wrap_single">
						<div id="breadcrumb" class="breadcrumb">
							<ul>
								<?php  echo the_breadcrumb(); ?>
							</ul>
						</div> 
						<div class="row">
							<?php 
							wpb_set_post_views(get_the_ID());
							if(have_posts()) :
								while(have_posts()) : the_post(); ?>
									<div class="col-sm-9  content_left">
										<article class="content_single_post">
											<div class="single_post_info">
												<h2><?php the_title(); ?></h2>
												<p><?php the_time('d/m/Y');?><span>  <?php the_time('g:i') ?></span> 
													| Luợt xem : <?php echo wpb_get_post_views(get_the_ID()); ?>
												</p>
											</div>
											<div class="post_avt">
												<div class="wrap_post_avt">
													<?php //the_post_thumbnail();?>
												</div>
											</div>
											<div class="text_content">
												<?php  the_content(); ?>
											</div>
										</article>

									</div>
									<div class=" col-sm-3 sidebar">
										<div class="sb_single_loop_news">
											<?php 
											$list_post_arg = array(
												'posts_per_page' => 3,
												'orderby' => 'publish_date',
												'order' => 'DESC',
												'post_type' => 'post',
												'post_status' => 'publish',
												'category__not_in' => array(7,6),
											);
											$list_post_q = new WP_Query();
											$list_post_q->query($list_post_arg);
											?>
											<h3 class="title_sb"><span>Mới nhất</span></h3>
											<ul>
												<?php 
												while($list_post_q->have_posts()): $list_post_q->the_post();
													?>
													<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
													<li class="pw">
														<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');"><a href="<?php the_permalink(); ?>"><?php //the_post_thumbnail();?></a> </figure>
														<h2 class="post_title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
													</li>
												<?php endwhile; ?>
											</ul>
											<div class="read_more">
												<a href="<?php echo get_category_link(3); ?>">Xem tất cả>></a>
											</div>
											<?php wp_reset_postdata();?>
										</div>

										<div class="sb_single_loop_most">
											<?php 
											$list_post_arg_sb_most = array(
												'posts_per_page' => 3,
												'meta_key' => 'wpb_post_views_count',
												'orderby' => 'meta_value_num',
												'order' => 'DESC',
												'post_type' => 'post',
												'category__not_in' => array(7,6),
												'post_status' => 'publish'
											);
											$list_post_q_sbmost = new WP_Query();
											$list_post_q_sbmost->query($list_post_arg_sb_most);
											?>
											<h3 class="title_sb"><span>Xem nhiều</span></h3>
											<ul>
												<?php 
												while($list_post_q_sbmost->have_posts()): $list_post_q_sbmost->the_post();
													?>
													<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
													<li class="pw">
														<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');"><a href="<?php the_permalink(); ?>"><?php //the_post_thumbnail();?></a> </figure>
														<h2 class="post_title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
													</li>
												<?php endwhile; ?>
											</ul>
											<div class="read_more">
												<a href="#">Xem tất cả>></a>
											</div>
											<?php wp_reset_postdata();?>
										</div>
									</div> 
								<?php endwhile;
							else:
							endif;
							wp_reset_postdata();
							?>
						</div>
					</div>
				</div>
			<?php }?>	
			<?php if (  $postcat[0]->term_id !== 7  ) {  ?>
				<div class="product_append_single">
						<div class="container">
							<?php echo do_shortcode('[product_append_page]'); ?>
						</div>
					</div>	
				<?php }?>	
		</div>
	</div>
	<?php get_footer(); ?>
