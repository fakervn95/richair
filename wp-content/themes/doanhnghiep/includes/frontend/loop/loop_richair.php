<div class="list_post_item pw">
	<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
	
	<div class="post_wrapper_content">
		<?php if(is_search() OR is_archive()){?>
			<div class="excerpt"><p><?php echo excerpt(100); ?></p></div>
			<a class="readmore" href="<?php echo the_permalink(); ?>">Read more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
		<?php } 
		else {
			if($post->post_excerpt){ ?>
				<div class="excerpt"><p><?php echo excerpt(100); ?></p></div>
				<a class="readmore" href="<?php echo the_permalink(); ?>">Read more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
			<?php } else{
				the_content();
			} 
		} ?>
	
	</div>
	<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');"><a href="<?php the_permalink(); ?>"><?php //the_post_thumbnail();?></a> </figure>
</div>
