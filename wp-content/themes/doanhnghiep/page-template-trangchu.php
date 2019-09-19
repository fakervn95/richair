<?php 
/*
Template Name: page-template-trangchu
*/
get_header(); 
?>	
<div class="page-wrapper">
	<div id="content">
		<div class="g_content">
			<div class="content_left">
				<div class="ric_hair">
					<div class="container">
						<div class="slide_richair">
							<h3 class="title_dots"><span>Sâm tố nữ Puecolazen</span></h3>
							<div class="row">
								<div class="col-sm-6">
									<?php 
									$content_post = get_post($my_postid);
									$content = $content_post->post_content;
									$content = apply_filters('the_content', $content);
									$content = str_replace(']]>', ']]&gt;', $content);
									echo $content;
									?>	
									<div class="read_more">
										<a href="<?php echo get_page_link(390); ?>">Xem thêm</a>
									</div>
								</div>
								<div class="col-sm-6">
									<ul>
										<?php
										$args = array(  
											'post_type' => 'adv',
											'post_status' => 'publish',
											'posts_per_page' => 20, 
											'orderby' => 'title', 
											'order' => 'ASC'
										);

										$loop_adv = new WP_Query( $args ); 

										while ( $loop_adv->have_posts() ) : $loop_adv->the_post(); 
											?> <li class="pw col-sm-6"> <figure class="thumbnail"> <a href="<?php echo get_the_excerpt(); ?>" target="_blank"><?php the_post_thumbnail();?></a> </figure> </li> <?php
										endwhile;
										wp_reset_postdata(); 
										?>
									</ul>
							
								</div>
							</div>
						</div>
					</div>
				</div>	
				<div class="doctos_suggest">
					<div class="container">
						<div class="wrap_doctos_suggest">
							<h3 class="title_dots"><span><?php echo get_cat_name(6); ?></span></h3>
							<div class="excerpt_cat">
								<?php echo category_description(6) ?>
							</div>
							<?php 
							$list_post_arg = array(
								'posts_per_page' => 3,
								'orderby' => 'post_date',
								'order' => 'DESC',
								'post_type' => 'post',
								'post_status' => 'publish',
								'cat' => 6
							);
							$list_post_q = new WP_Query();
							$list_post_q->query($list_post_arg);
							?>
							<div class="row">
								<?php
								while($list_post_q->have_posts()): $list_post_q->the_post();
									?>
									<div class="list_post_item pw">
										<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
										<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');"><a href="<?php echo get_page_link(14); ?>"><?php //the_post_thumbnail();?></a> </figure>
										<h2 class="post_title"><a href="<?php echo get_page_link(14); ?>"><?php the_title(); ?></a></h2>
									</div>

									<?php
								endwhile;
								?>
							</div>

						</div>
					</div>
				</div>
				<div class="customer_share">
					<div class="container">
						<h3 class="title_dots"><span><?php echo get_cat_name(7); ?></span></h3>
					</div>
					<div class="wrap_customer_share">
						<?php 
						$list_post_arg = array(
							'posts_per_page' => 10,
							'orderby' => 'post_date',
							'order' => 'DESC',
							'post_type' => 'post',
							'post_status' => 'publish',
							'cat' => 7
						);
						$list_post_q = new WP_Query();
						$list_post_q->query($list_post_arg);
						?>
						<div class="container">
							<div class="row">
								<ul>
									<?php
									while($list_post_q->have_posts()): $list_post_q->the_post();
										?>
										<li class="list_post_item  pw">
											<div class="bg_wrap_share">
												<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
												<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');"><a href="<?php the_permalink(); ?>"><?php //the_post_thumbnail();?></a> </figure>
												<div class="textwidget">
													<h2 class="post_title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
													<div class="excerpt_share">
														<p><?php echo excerpt(30); ?></p>
													</div>
													<div class="read_more">
														<a href="<?php the_permalink(); ?>">Xem thêm >></a>
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
					</div>
				</div>
				<div class="video_post">
					<div class="container">
						<div class="row">
							<div class="col-sm-6">
								<?php dynamic_sidebar('video_home_id'); ?> 
							</div>
							<div class="col-sm-6">
								<h3 class="title_dots"><span>Tin tức</span></h3>
								<ul class="list_post_home">
									<?php 
									$list_post_arg = array(
										'posts_per_page' => 10,
										'orderby' => 'post_date',
										'order' => 'DESC',
										'post_type' => 'post',
										'post_status' => 'publish',
										'cat' => 3
									);
									$list_post_q = new WP_Query();
									$list_post_q->query($list_post_arg);
									?>
									<?php
									while($list_post_q->have_posts()): $list_post_q->the_post();
										?>
										<li class="list_post_item  pw">

											<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
											<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');"><a href="<?php the_permalink(); ?>"><?php //the_post_thumbnail();?></a> </figure>
											<div class="textwidget">
												<h2 class="post_title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
												<div class="excerpt_share">
													<?php echo excerpt(20); ?>
												</div>
												<div class="read_more">
													<a href="<?php the_permalink(); ?>">Xem thêm >></a>
												</div>
											</div>
											

										</li>
										<?php
									endwhile;
									?>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div><!-- content_left -->
		</div>
	</div>
</div>
<?php get_footer(); ?>
