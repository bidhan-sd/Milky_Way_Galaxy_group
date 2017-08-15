<?php get_header(); ?>			
			<div class="maincontent_blog_page container">
				<div class="row">

				<?php global $loknath; if($loknath['website-layout'] == 1) : ?>
					<div class="col-md-8"> 
						<div class="page_header">
							<h1>This is our opinion section</h1>			
						</div>
						<div class="blog_list">
						<?php $postitem = new WP_Query(array(
								'post_type' => 'post',
								'order' => 'DESC'
						)); ?>
						<?php while(have_posts()) : the_post();?>
							<div class="single_blog">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h2>
								<em>by <?php the_author(); ?> </em>
								<p><span class="glyphicon glyphicon-time"></span> Posted on <?php the_time('F d,Y'); ?> at <?php the_time('g:i a'); ?></p>
								<?php the_post_thumbnail(); ?>
								<div class="pragraph">
									<?php read_more(60); ?>  				
								</div>
								<div class="comments">
									<p>
									<?php comments_popup_link('No comment','One comment','% comments','bidhan','comment off'); ?> &ensp;<span>|</span>&ensp;<a href="<?php the_permalink(); ?>">Continue Reading &rarr;</a>
									</p>	
								</div>
							</div>
						<?php endwhile; ?>

							<!--
							<div class="single_blog">
								<h2><a href="#">Blog post title</a></h2>
								<em>by <a href="index.html">Bidhan sutradhar</a></em>
								<p><span class="glyphicon glyphicon-time"></span>Posted on April 29, 2015 at 10:00 PM</p>
								<img class="img-responsive"src="<?php echo esc_url(get_template_directory_uri());?>/img/baba1.jpg"alt=""/>
								<div class="pragraph">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>					
								</div>
								<div class="comments">
									<p>Comments&ensp;&ndash;&ensp;<a href="#">17</a>&ensp;<span>|</span>&ensp;<a href="single-blog.php">Continue Reading&rarr;</a></p>	
								</div>
							</div>-->
						</div>
						<!-- Pager -->
						<ul id="pagi">

							<?php
								the_posts_pagination(array(
									'show_all' => true,
									'prev_text' => __('prev','Loknath'),
									'next_text' => __('next','Loknath'),
									'screen_reader_text' => ' ',
									'before_page_number' => '<b>',				
									'after_page_number' => '</b>',					
								));						
							?>


							<!--<li class="previous">
								<a href="#">&larr; Older</a>
							</li>
							<li class="next">
								<a href="#">Newer &rarr;</a>
							</li>-->
						</ul>

					</div>

					<?php get_sidebar(); ?>
				<?php endif; ?>

				<?php global $loknath; if($loknath['website-layout'] == 2) : ?>
				
					<?php get_sidebar(); ?>

					<div class="col-md-8"> 
						<div class="page_header">
							<h1>This is our opinion section</h1>					
						</div>
						<div class="blog_list">
						<?php while(have_posts()) : the_post();?>
							<div class="single_blog">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h2>
								<em>by <?php the_author(); ?> </em>
								<p><span class="glyphicon glyphicon-time"></span>Posted on <?php the_time('F d,Y'); ?> at 10:00 PM</p>
								<?php the_post_thumbnail(); ?>
								<div class="pragraph">
									<?php read_more(60); ?>  				
								</div>
								<div class="comments">
									<p>
									<?php comments_popup_link('No comment','One comment','% comments','bidhan','comment off'); ?> &ensp;<span>|</span>&ensp;<a href="<?php the_permalink(); ?>">Continue Reading &rarr;</a>
									</p>	
								</div>
							</div>
						<?php endwhile; ?>

							<!--
							<div class="single_blog">
								<h2><a href="#">Blog post title</a></h2>
								<em>by <a href="index.html">Bidhan sutradhar</a></em>
								<p><span class="glyphicon glyphicon-time"></span>Posted on April 29, 2015 at 10:00 PM</p>
								<img class="img-responsive"src="<?php echo esc_url(get_template_directory_uri());?>/img/baba1.jpg"alt=""/>
								<div class="pragraph">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>					
								</div>
								<div class="comments">
									<p>Comments&ensp;&ndash;&ensp;<a href="#">17</a>&ensp;<span>|</span>&ensp;<a href="single-blog.php">Continue Reading&rarr;</a></p>	
								</div>
							</div>-->
						</div>
						<!-- Pager -->
						<ul id="pagi">

							<?php
								the_posts_pagination(array(
									'show_all' => true,
									'prev_text' => __('prev','Loknath'),
									'next_text' => __('next','Loknath'),
									'screen_reader_text' => ' ',
									'before_page_number' => '<b>',				
									'after_page_number' => '</b>',					
								));						
							?>


							<!--<li class="previous">
								<a href="#">&larr; Older</a>
							</li>
							<li class="next">
								<a href="#">Newer &rarr;</a>
							</li>-->
						</ul>

					</div>
					
				<?php endif; ?>
				</div>
			</div>

<?php get_footer(); ?>