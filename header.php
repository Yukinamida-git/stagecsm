<!doctype html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="theme-color" content="#fff" />
<link rel="profile" href="https://gmpg.org/xfn/11" />

<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );
}
?>
	<a class="skip-link button" href="#main"><?php esc_html_e( 'Skip to Content', 'frugix' ); ?></a>

	<header id="header">
			<div class="container-social">
			<a href="https://positionnement.campussuddesmetiers.com/?page_id=188">Contactez-nous</a><br>
			Suivez-nous
			<ul id="SocialM">
			<li><a href="#"><img src="https://img.icons8.com/windows/32/000000/facebook-new.png"/></a></li>
			<li><a href="#"><img src="https://img.icons8.com/windows/32/000000/twitter.png"/></a></li>
			<li><a href="#"><img src="https://img.icons8.com/windows/32/000000/instagram-new.png"/></a></li>
			<li><a href="#"><img src="https://img.icons8.com/windows/32/000000/youtube-play.png"/></a></li>
			</ul>
			</div>
			<nav id="Menulat">
				<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home"><?php the_custom_logo(); ?></a></div>
			<?php
					wp_nav_menu( array(
						'theme_location' => 'main-menu',
					
					) );
					?>
			<a href="https://positionnement.campussuddesmetiers.com/?page_id=186"><img id="CCI" src="https://positionnement.campussuddesmetiers.com/wp-content/uploads/2020/06/logocci.jpg" alt="Logo-CCI"></a>	
			</nav>
	</header>

	

