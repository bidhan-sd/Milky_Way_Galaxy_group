<?php
/*
Template Name: gallery
*/
 include("header.php"); ?>	 			
			<div class="maincontent_images_page container">
				<div class="row">
					<div class="col-md-12">
						<div class="our_celebration_images">
							<p>Our Celebration Images</p>
						</div>
					</div> 
					<?php $galleryimageitem = new WP_Query(array(
						'post_type' => 'lokgallery',
						'posts_per_page' => -1,
					)); ?>
					<?php while($galleryimageitem->have_posts()) : $galleryimageitem->the_post();?>
						<div class="col-md-3">						
							<div class="program_image_list">
								<div class="single_images">
								<?php $post_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID() ),'full'); ?>
									<a rel="prettyPhoto[gallery]" href="<?php echo $post_thumb[0]; ?>"title="Joy baba loknath"> 
										<?php  the_post_thumbnail(); 
											
										?> 
									</a>
								</div> 
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>

<?php include("footer.php"); ?>