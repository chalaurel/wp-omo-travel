<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="wrap">
			<button id="blog-posts-container" onclick="getD()">The Button</button>
			<div id="cnt"></div>
			<section class="site-content-contain">
				<header class="page-header">
					<h1 class="page-title">Lorem ipsum dolor sit amet.</h1>
				</header>
				<div class="page-content">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div><!-- .page-content -->
			</section><!-- .no-results -->
		</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
