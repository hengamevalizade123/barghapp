<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'starter-theme'); ?></a>
	<header id="masthead" class="site-header">
		<div class="c-main-header">
			<div class="o-section__wrapper">
				<div class="c-main-header__content u-flex items-center space-between">
					<a class="header-logo" href="/">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/barghapp-logo.svg"
							 alt="برقآپ">
					</a>
					<nav id="site-navigation" class="main-navigation u-flex items-center">
						<div class="c-header__wrap js-navs">
							<ul class="c-menu u-flex gap-md font-sm p-0">
								<li>
									<a class="<?php if (is_front_page()) echo 'active'; ?> u-flex flex-column" href="/">
									برقآپ
									</a>
								</li>
								<li>
									<a href="/about" class="parent-sub-menu items-center u-flex gap-sm u-flex flex-column <?php if (is_page('about')) echo 'active'; ?>">
										خدمات ما
										<span class="has-sub-menu"></span>
									</a>
									<ul class="u-flex u-flex--column">
										<li class="has-second-sub-menu">
											<a class="sub-menu second-sub-menu" href="#">درباره ما</a>
											<ul class="u-flex u-flex--column">
												<li class="u-flex">
													<a class="sub-menu" href="#">کارخانه و کارگاه</a>
												</li>
												<li class="u-flex"><a class="sub-menu" href="#">هلدینگ تجاری</a></li>
												<li class="u-flex"><a class="sub-menu" href="#">شرکت خصوصی</a></li>
											</ul>
										</li>
										<li class="has-second-sub-menu"><a class="sub-menu second-sub-menu" href="#">مالیــات</a>
											<ul class="u-flex u-flex--column">
												<li class="u-flex">
													<a class="sub-menu" href="#">کارخانه و کارگاه</a>
												</li>
												<li class="u-flex"><a class="sub-menu" href="#">هلدینگ تجاری</a></li>
												<li class="u-flex"><a class="sub-menu" href="#">شرکت خصوصی</a></li>
											</ul>
										</li>
										<li><a class="sub-menu second-sub-menu" href="#">حسابرســی</a></li>
										<li><a class="sub-menu second-sub-menu" href="#">اظهــارنامــه</a></li>
									</ul>
								</li>
								<li>
									<a class="u-flex flex-column <?php if (is_page('about')) echo 'active'; ?>" href="#">
									شهر برقآپ
									</a>
								</li>
								<li>
									<a class="u-flex flex-column <?php if (is_page('about')) echo 'active'; ?>" href="#">
										چشم انداز ما
									</a>
								</li>
								<li>
									<a class="u-flex flex-column <?php if (is_page('about')) echo 'active'; ?>" href="#">
										مشتریان ما
									</a>
								</li>
								<li>
									<a class="u-flex flex-column <?php if (is_page('about')) echo 'active'; ?>" href="#">
									گواهینامه ها
									</a>
								</li>
								<li>
									<a class="u-flex flex-column <?php if (is_page('about')) echo 'active'; ?>" href="#">
									سوالات متداول
									</a>
								</li>
								<li>
									<a class="u-flex flex-column <?php if (is_page('about')) echo 'active'; ?>" href="#">
										مقالات
									</a>
								</li>
							</ul>
						</div>
						<div class="c-hamburger">
							<input class="c-hamburger__checkbox js-hamburger" type="checkbox" aria-label="Menu">
							<span class="c-hamburger__icon"></span>
							<span class="c-hamburger__icon"></span>
							<span class="c-hamburger__icon"></span>
						</div>
					</nav>
					<div class="c-main-header__cta u-flex items-center">
						<a class="c-main-header__panel u-flex items-center border-radius gap-sm secondary-btn" href="#">
								دانلود کاتالوگ
							<svg width="24" height="24" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M24.5 4.08333V16.3333L28.5833 12.25" stroke="white" stroke-width="3.0625" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M24.5 16.3333L20.4167 12.25" stroke="white" stroke-width="3.0625" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M14.2917 24.5C6.125 24.5 6.125 28.1546 6.125 32.6667V34.7083C6.125 40.3433 6.125 44.9167 16.3333 44.9167H32.6667C40.8333 44.9167 42.875 40.3433 42.875 34.7083V32.6667C42.875 28.1546 42.875 24.5 34.7083 24.5C32.6667 24.5 32.095 24.9288 31.0333 25.725L28.9508 27.93C26.5417 30.5025 22.4583 30.5025 20.0288 27.93L17.9667 25.725C16.905 24.9288 16.3333 24.5 14.2917 24.5Z" stroke="white" stroke-width="3.0625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M10.2083 24.5V16.3333C10.2083 12.2296 10.2083 8.8404 16.3333 8.24832" stroke="white" stroke-width="3.0625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M38.7917 24.5V16.3333C38.7917 12.2296 38.7917 8.8404 32.6667 8.24832" stroke="white" stroke-width="3.0625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>

						</a>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
