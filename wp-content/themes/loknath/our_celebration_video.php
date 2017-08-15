<?php 
/*
Template Name:video
*/

include("header.php"); 
global $loknath;
?>
			<div class="maincontent_video_page container">
				<div class="row">
					<div class="col-md-12">
						<div class="our_celebration_video">
							<p><?php echo $loknath['lok_video_title']; ?></p>
						</div>
					</div> 

					<?php 
					if(is_array($loknath['lokvideoitem'])){					
						foreach ($loknath['lokvideoitem'] as $key => $value) {
							?>
								<div class="col-md-6">
									<div class="program_video_iframe">
										<div class="single_video">
											<h2><?php echo $value['title']; ?></h2>
											<?php echo $value['url']; ?>
										</div> 
									</div>
								</div>
							<?php
						}
					}
				?> 

				</div>
			</div>			
<?php include("footer.php"); ?>