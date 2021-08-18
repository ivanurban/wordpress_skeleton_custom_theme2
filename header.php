<!DOCTYPE html>
<html>

<head>

	<?php wp_head();?> 


	<title></title>


</head>



<body <?php body_class();?> >


<div id="page-container"> <!--  stick footer -->

			<nav>
				<?php wp_nav_menu (


							array(

								'theme_location' => 'top-menu',
								'menu_class' => 'navigation'

							)


						);?>
			</nav>
			 


