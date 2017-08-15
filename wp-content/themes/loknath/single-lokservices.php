<?php include("header.php"); ?> 			
			<div class="maincontent_about_baba container">
				<div class="row">
				<?php $servicesitem = new WP_Query(array(
						'post_type' => 'lokservices', 
					));
				?> 
				<?php while($servicesitem->have_posts()) : $servicesitem->the_post(); ; ?>
					<?php echo get_post_meta(get_the_ID(),'lokservices',true); ?>
					<div class="col-md-12">
						<h2><?php the_title(); ?></h2>
						<div class="baba_img">
							<?php the_post_thumbnail(); ?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="Lokanatha_message_about_page">
							<p><?php the_excerpt(); ?></p>
						</div>
					</div>					
					<div class="col-md-12">
						<div class="loknath_bio">
							<p><?php the_content(); ?></p>
						</div>



						<!--
						<div class="comment_area">
							<div class="add_comments">
								<h3>Add your comment</h3>
								<div class="avatar">
									<img src="img/comment.gif" alt="" /><br/>
									<span>User name</span><br />
									<span>May 02th</span>						
								</div>
								<div class="form">
									<form action="#">
										<input type="text" name="Email" placeholder="Email" /><br />
										<input type="text" name="website" placeholder="Enter website (optional)"/><br/>
										<textarea name="speak" id="" cols="40" rows="5" placeholder="Enter your opinion.........."></textarea><br />
										<input type="submit" name="submit" value="Add comments"/>
									</form>
								</div>
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
							</div>
						</div>-->				
					</div>
					<?php endwhile; ?> 
				</div>
			</div>

<?php include("footer.php"); ?>