<?php include("header.php"); ?> 			
			<div class="maincontent_blog_page container">
				<div class="row">

					<div class="col-md-8">
						<div class="page_header">
							<h1>This is our opinion section</h1>					
						</div>
						<div class="blog_list">

						<?php $servicesitem = new WP_Query(array(
								'post_type' => 'lokservices',
							));
						?>		
						<?php while(have_posts()) : the_post(); ?>

							<div class="single_blog">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<em>by <?php the_author(); ?></em>
								<p><span class="glyphicon glyphicon-time"></span>Posted on <?php the_time('F d,Y'); ?> at 10:00 PM</p>
							<!--<img class="img-responsive"src="img/baba1.jpg"alt=""/>-->
							<?php the_post_thumbnail(); ?>
								<div class="pragraph">
									<?php the_content(); ?>					
								</div>
								<?php comments_template(); ?> 
								<!--<div class="comment_area">
									<div class="add_comments">
										<h3>Add your comment</h3>
										
									</div>
									<h3>User comments</h3>
									<div class="all_comments">
										<div class="single_comment">
											<div class="avatar">
												<img src="img/comment.gif" alt="" /><br/>
												<span> User name</span><br />
												<span>May 02th</span>						
											</div>									
											<h6>veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</h6>
										</div>
										<div class="single_comment">
											<div class="avatar">
												<img src="img/comment.gif" alt="" /><br/>
												<span> User name</span><br />
												<span>May 02th</span>						
											</div>									
											<h6>veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</h6>
										</div>	
									</div>-->
								</div>
							</div>
						<?php endwhile; ?>

						</div>
						<?php get_sidebar(); ?>
					</div>
					
				</div>
			</div>

<?php include("footer.php"); ?>