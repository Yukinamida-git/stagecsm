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
			

			<div class="mobile-nav-container">
				<a class="mobile-nav open" id="nav-open" href="javascript:void(0)" onclick="openNav()">
					<svg viewBox="0 0 72 72">
					<line class="nav-line" stroke-width="8" x1="6" y1="5.3" x2="66" y2="5.3"/>
					<line class="nav-line" stroke-width="8" x1="6" y1="36" x2="66" y2="36"/>
					<line class="nav-line" stroke-width="8" x1="6" y1="66.7" x2="66" y2="66.7"/>
					</svg>
					<span class="nav-label"><?php esc_html_e( 'Open Menu', 'frugix' ); ?></span>
				</a>

				<a class="mobile-nav close" id="nav-close" href="javascript:void(0)" onclick="closeNav()">
					<svg viewBox="0 0 72 72">
					<line class="nav-line" stroke-width="8" x1="5.8" y1="66.2" x2="66.2" y2="5.8"/>
					<line class="nav-line" stroke-width="8" x1="5.8" y1="5.8" x2="66.2" y2="66.2"/>
					</svg>
					<span class="nav-label"><?php esc_html_e( 'Close Menu', 'frugix' ); ?></span>
				</a>
			</div>
			
	<nav id="Menulat">			
    
	<?php if ( has_custom_logo() ) : ?>
				<div class="logo"><?php the_custom_logo(); ?></div>
			<?php else : ?>
				<h1 class="mobile-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php endif; ?>
	<ul>
        <li><a href="#"><img class="partnerimg" src="http://localhost/Wordpress/wp-content/uploads/2020/06/Logo-ICS.png" alt=""></a></li>
        <li><a href="#"><img class="partnerimg" src="http://localhost/Wordpress/wp-content/uploads/2020/06/Logo-IFA.png" alt=""></a></li>
        <li><a href="#"><img class="partnerimg" src="http://localhost/Wordpress/wp-content/uploads/2020/06/Logo-IFPS.png" alt=""></a></li>
        <li><a href="#"><img class="partnerimg" src="http://localhost/Wordpress/wp-content/uploads/2020/06/Logo-INB.png" alt=""></a></li>
        <li><a href="#">CCI</a></li>
	</ul>
			</nav>
	</header>
