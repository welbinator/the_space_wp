<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Space_Coworking
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>





    <nav class="navbar navbar-dark navbar-expand-lg fixed-top">
        <div class="container-fluid">
		<?php
			the_custom_logo();
			
				?>
				
			<button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'container_class' => 'collapse navbar-collapse',
					'container_id' => 'navcol-1',
					'menu_class'   => 'navbar-nav ml-auto',
					'menu_id'        => 'nav navbar-nav',
					'add_link_class' => 'nav-link',
				)
			);
			?>
        </div>
    </nav>