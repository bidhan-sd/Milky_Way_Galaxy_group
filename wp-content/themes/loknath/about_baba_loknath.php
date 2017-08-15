<?php
/*
Template Name:about loknath baba
*/


 include("header.php"); ?>	 			
			<div class="maincontent_about_baba container">
				<div class="row">
					<?php $aboutbaba = new WP_Query(array(
						'post_type' => 'aboutbaba',
					)); ?>
					<?php while($aboutbaba->have_posts()) : $aboutbaba->the_post(); ?>
					<div class="col-md-12">
						<h2><?php the_title(); ?></h2>
						<div class="baba_img">
							<?php the_post_thumbnail(); ?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="Lokanatha_message_about_page">
							 <?php the_excerpt(); ?> 
						</div>
					</div>					
					<div class="col-md-12">
						<div class="loknath_bio">
							<?php the_content(); ?>
							 
						</div>
					</div>
				<?php endwhile; ?>
				</div>	 
			</h2>
				<?php
				$prefix = "_loknath_";
					$entries = get_post_meta(get_the_ID(),$prefix.'first-section',true);
					print_r($entries);
				?>
			</h2>
			</div>	
<?php include("footer.php"); ?>