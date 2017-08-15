<?php
/*
Template Name: contact
*/
 include("header.php"); 
 ?> 			
			<div class="maincontent_contect_us container">
				<div class="row">
					<div class="col-md-12">
						<div class="Lokanatha_message">
							<p>&ldquo;&emsp;<?php echo $loknath['contactlok-statement']; ?>&emsp;&rdquo;<span>&ensp;&larr;&ensp;Baba Lokenath</span></p>
						</div>
					</div>
					<div class="col-md-7">
						<div class="content_left_side">
							<h2>Feedback</h2>
						<?php global $loknath;  //echo $loknath['loknath-gallery'];?>
						<?php while(have_posts()) : the_post();?>
							 <?php the_content(); ?>
						<?php endwhile; ?>




							<!--<form action="" method="post">
								<table> 
									<label>Name</label>
									<input class="form-control" type="text" name="yourname" placeholder="Type your name"/>
									<label>Website</label>
									<input class="form-control" type="text" name="telephone" placeholder="Type your website (optional)"/>
									<label>Email</label>
									<input class="form-control" type="text" name="email" placeholder="Type your email"/>
									<label>Message</label>
									<textarea class="textarea_style form-control" name="" id="" cols="40" rows="5" placeholder="Type your opinion"></textarea>
									<div class="submit_reset">
										<input type="submit" value="Submit" name="form_login"/><input type="reset" value="Reset" name="form_login"/> 
									</div>
								</table>
							</form>-->
						</div>
					</div>

					<div class=" col-md-5">
						<div class="content_right_side">
						<?php dynamic_sidebar('contact-map');?>
							<!--<div class="single_widgets">
								<h2>Virtual Contact</h2> 
								<div class="map-responsive">
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3650.0735638130955!2d90.366241!3d23.815983000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c128b15cc4df%3A0x37adf8155b1773d0!2sMirpur+11!5e0!3m2!1sbn!2sbd!4v1430190702788"frameborder="0" style="border:0" width="600" height="450"></iframe>
								</div>
							</div>
							<div class="single_widgets">
								<h2>Offical Contact</h2>
								<div class="direct_contect">
									<h4>Our head office</h4>
									<p>Gupti,foridgonj,chandpur,Bangladesh</p>
									<p><label>Phone:</label>01829600496</p>
									<p><label>Email:</label>Bidhan_Mix@yahoo.com</p>
									<p><label>Website:</label>www.loknath-lysa.com</p>
								</div>
							</div>-->
						</div>						
					</div>


				</div>
			</div>

<?php include("footer.php"); ?>