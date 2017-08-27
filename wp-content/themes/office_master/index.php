<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
	<title><?php bloginfo('name');?></title>
</head>
<body>
	<header> 
		<h1><a href="<?php echo site_url(); ?>"><?php bloginfo('name');?></a></h1>
	</header>
	<section>
		<div class="post_area">
			<?php
				if(have_posts()){
					while(have_posts()){
						the_post();
					?>
						<div class="single_post">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php the_content(); ?></p>
							<hr/>
						</div>
						
				<?php } }else{
					echo "No Post here";
				}
			?>
		</div>
	</section>
</body>
</html>