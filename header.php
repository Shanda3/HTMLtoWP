<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta charset="utf-8">
	<title><?php  wp_title( '|', true, 'right' );  ?>
</title>
	<!--META-->
	<meta name="viewport" content="width=device-width initial-scale=1.0">

	<!--FONT-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,300italic,500,700,600,800" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

	<!--CSS-->
</head>
<body>
	<header id="home"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<div class="container">			
			<div class="row">				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">					
					<div class="logo">
						<a href="<?php bloginfo('template_directory');  ?>/#home" data-scroll><img src="<?php bloginfo('template_directory');  ?>/img/logo.png" alt=""></a>					
					</div>									
					<nav class="nav-collapse"> 

						<?php 
						 
						 wp_nav_menu(

							array(
								'theme_location' => 'top-menu',
								 
							
								)
							);
						
						?>
						<!--<ul>     
							<li class="menu-item active"><a href="#banner" data-scroll>HOME</a></li>    
							<li class="menu-item"><a href="#about" data-scroll>ABOUT US</a></li>
							<li class="menu-item"><a href="#slidenew" data-scroll>CATEGORIES</a></li>
							<li class="menu-item"><a href="#gallery" data-scroll>GALLERY</a></li>
							<li class="menu-item"><a href="#event" data-scroll>EVENTS</a></li>
							<li class="menu-item"><a href="#contact" data-scroll>BLOG</a></li>
							<li class="menu-item"><a href="#contact" data-scroll>CONTACT US</a></li>
						</ul>-->
					</nav> 
				</div>
			</div>			
		</div>
	</header>
