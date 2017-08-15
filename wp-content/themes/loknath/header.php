<!doctype html>
<html class="no-js"<?php language_attributes(); ?> >
    <head>
		<meta charset="<?php bloginfo('charset');?>"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="description" content="bidhan"/>
		<meta name="description" content="<?phpbloginfo('description'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1"/> 
		<link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri());?>/img/fv1.png" type="images/x-icon"/>
		


		<style type="text/css">
			/*.header{ background:url(<?php echo esc_url(get_template_directory_uri());?>/img/head1.png);}*/

			.header{
				background-color:<?php global $loknath; echo $loknath['header-background']['background-color'];?>!important;

				background-image:url(<?php echo $loknath['header-background']['background-image'];?>)!important; 
			} 
			
		</style>

		<?php wp_head(); ?>        
    </head>
    <body <?php body_class(); ?> style="background:url(<?php echo esc_url(get_template_directory_uri());?>/img/background.png) fixed;">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		
			<div class="container fix"><!-- Start header section-->
				<div class="row"> 
				
					<div class="header col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<div class="logo fix floatleft ">
						<?php if($loknath['logo-visible'] == 1): ?>
							<a href="<?php bloginfo('home'); ?>"><img class="img-responsive" src="<?php global $loknath; echo $loknath['upload-logo']['url']; ?>" alt=""/></a>
						<?php endif; ?>
						</div>
					</div> 

				</div>
			</div><!-- End header section-->
			
			<div class="menu container"><!--Start menu section-->
				<div class="row">
					<nav id="sticker" class="mainmenu">
						<ul id="menu2">

							<?php
								if(function_exists('wp_nav_menu')){
									wp_nav_menu(array(
										'theme_location' => 'main-menu',
									)); 
								}					
							?> 
						</ul>
					</nav>	
				</div>
			</div>  <!--End menu section-->	