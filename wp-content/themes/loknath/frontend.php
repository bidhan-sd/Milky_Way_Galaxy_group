<?php 

include("header.php"); 
?>	
			
			<div class="slider container"> <!--Start Slider section-->	
				<div class="row">				 
					<div id="wowslider-container1">
						<div class="ws_images">
							<ul>
							<?php $slideritem = new WP_Query(array(
								'post_type' => 'lokslider',
								'posts_per_page' => 5,
							)); ?>
							<?php while($slideritem->have_posts()) : $slideritem->the_post(); ?>
								<li><?php the_post_thumbnail(); ?></li> 
							<?php endwhile; ?>
							</ul>    
						</div> 
						<div class="ws_shadow"></div>
					</div>					 
				</div>
			</div>	<!--End slider section-->	
			
			<div class="promotion container fix"> <!--Start promotion section-->
				<div class="row"> 
					<div class="promotion_list"> 
					<?php $servicesitem = new WP_Query(array(
							'post_type' => 'lokservices',
							'posts_per_page' => 3,
							'post' => ID,
						));
					?>
					<?php while($servicesitem->have_posts()) : $servicesitem->the_post(); ?>
						<div class="col-md-4">
							<div class="single_promo fix">
								<?php the_post_thumbnail(); ?>
								<h2><?php the_title(); ?></h2>
								<p><?php read_more(30); ?></p>
								<a  target="_blank" href="<?php echo the_permalink(); ?>" class="btn btn-warning btn-sm active" role="button">Read more</a>
							</div>	
						</div>  
					<?php endwhile; ?>
					</div>	
				</div>
			</div><!--End promotion section-->
			
			<div class="maincontant container fix"><!--Start maincontent section-->
				<div class="row">			
					<div class="col-md-8"><!--Start content left section-->
						<div class="contant_left fix"> 
							<div class="content-top fix"> 
								<h2>
									<?php
										global $Lokenath; 
										echo $loknath['fontpage_content_header']
									?>
								</h2> 
							</div>
							<div class="content-middle fix">
								<p>
									<?php echo $loknath['fontpage_content'];?>
								</p>		 
							</div> 
						</div>
					</div><!--End content left section-->
					<div class="col-md-4"><!--Start sitebar section-->
						<div class="sitebar fix">
							<h1>News and Event</h1>
							<div class="single_sidbar fix">
								<h3>LATEST NEWS</h3>
								<p>If you want to see our latest news click to read more button<a href="#" class="btn btn-danger btn-sm active" role="button">Read more</a></p>		
							</div>
							<div class="single_sidbar fix">
								<h3><?php echo $loknath['fontpage_sidebar_header']; ?></h3> 
								<ul>
									<?php if($loknath['fontpage_sidebar_link']['1']) : ?>
										<li><a target="_blank" href="<?php echo $loknath['fontpage_sidebar_link']['1']; ?>">Religion book</a></li>
									<?php endif; ?>

									<?php if($loknath['fontpage_sidebar_link']['2']) : ?>
									<li><a target="_blank" href="<?php echo $loknath['fontpage_sidebar_link']['2']; ?>">Religion mp3 songs</a></li>
									<?php endif; ?>

									<?php if($loknath['fontpage_sidebar_link']['3']) : ?>
									<li><a target="_blank" href="<?php echo $loknath['fontpage_sidebar_link']['3']; ?>">Religion video songs</a></li>
									<?php endif; ?>

									<?php if($loknath['fontpage_sidebar_link']['4']) : ?>
									<li><a target="_blank" href="<?php echo $loknath['fontpage_sidebar_link']['4']; ?>">Religion movies</a></li>
									<?php endif; ?>

									<?php if($loknath['fontpage_sidebar_link']['5']) : ?>
									<li><a target="_blank" href="<?php echo $loknath['fontpage_sidebar_link']['5']; ?>">108 Names of Baba Lokenath</a></li>
									<?php endif; ?>
								</ul>
							</div>
						</div>
					</div>	<!--End sitebar section-->
				</div>
			</div><!--End maincontent section-->
			
<?php include("footer.php"); ?>