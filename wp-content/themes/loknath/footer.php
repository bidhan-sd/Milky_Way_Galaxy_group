			<div class="footer_top container fix"><!--Start footer top section-->		
				<div class="row"> 
					<div class="col-md-3">
						<div class="single_widget">
							<h4>Our slogan</h4> 
							<div class="widget_content">  
								<h5>
									<?php 
									global $loknath; 
									echo $loknath['footer_widget_slogan']; ?>
								</h5>	
							</div> 
						</div>
					</div>

					<div class="col-md-3">
						<div class="single_widget">
							<h4>Our latest blog</h4>
							<?php $blogitem = new WP_Query(array(
								'post_type' => 'post',
								'posts_per_page' => 2,
								'order' => 'DESC',
							)); ?>
							<?php while($blogitem->have_posts()) : $blogitem->the_post(); ?>
								<div class="widget_content">
									<?php the_post_thumbnail(); ?>
									<h3><a target="_blank" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<p><span class="glyphicon glyphicon-time"></span>&ensp;Date <?php the_time('F d,Y'); ?></p>	
								</div>
							<?php endwhile; ?> 	 
						</div>
					</div>

					<div class="col-md-3">
						<div class="single_widget">
							<h4>Our gallery</h4>
							<div class="widget_content">
								<div class="image_item">
									<?php $imageitem = new WP_Query(array(
										'post_type' => 'lokgallery',
										'posts_per_page' => 4,
										'order' => 'DESC',
									)); ?>
									<?php while($imageitem->have_posts()) : $imageitem->the_post(); ?>
										<?php the_post_thumbnail(); ?> 
									<?php endwhile; ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="single_widget">
							<h4>Contact us</h4>
							<div class="widget_content">
								<label>Virtualy you connect with us</label>
								<ul>
									<?php if($loknath['lok_social_link']['1']) :?>
										<li><a target="_blank" href="<?php echo $loknath['lok_social_link']['1']; ?>" class="fa fa-facebook-square"></a></li>
									<?php endif; ?>
									<?php if($loknath['lok_social_link']['2']) :?>
										<li><a target="_blank" href="<?php echo $loknath['lok_social_link']['2']; ?>" class="fa fa-twitter-square"></a></li>
									<?php endif; ?>
									<?php if($loknath['lok_social_link']['3']) :?>
										<li><a target="_blank" href="<?php echo $loknath['lok_social_link']['3']; ?>" class="fa fa-google-plus-square"></a></li>
									<?php endif; ?>
									<?php if($loknath['lok_social_link']['4']) :?>
										<li><a target="_blank" href="<?php echo $loknath['lok_social_link']['4']; ?>" class="fa fa-pinterest-square"></a></li>
									<?php endif; ?>
									<?php if($loknath['lok_social_link']['5']) :?>
										<li><a target="_blank" href="<?php echo $loknath['lok_social_link']['5']; ?>" class="fa fa-youtube-square"></a></li>
									<?php endif; ?>
									<?php if($loknath['lok_social_link']['6']) :?>
										<li><a target="_blank" href="<?php echo $loknath['lok_social_link']['6']; ?>" class="fa fa-envelope-square"></a></li>
									<?php endif; ?> 
								</ul>
							</div>
						</div>
					</div> 

				</div>
			</div><!--End footer top section-->
			
			<div class="footer container fix"><!--Start footer section-->
				<div class="row">			
					<div class=" col-xl-12 col-md-12 col-md-12 col-lg-12">
				<?php global $loknath; if($loknath['footer-section'] == 1): ?>
						<div class="copyright fix"> 
							<p><?php global $loknath; echo $loknath['footer-text']; ?></p>
						</div> 
				<?php endif; ?>
					</div>
				</div>
			</div><!--End footer section-->
			<div id="gotoup"></div> 
    <?php wp_footer(); ?>
    </body>
</html>

