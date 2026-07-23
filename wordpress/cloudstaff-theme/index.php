<?php
/**
 * Generic fallback template.
 *
 * @package Cloudstaff
 */

get_header();
?>
<main class="lander" id="main-content">
	<section class="lander-hero">
		<div class="lander-content">
			<h1><?php the_title(); ?></h1>
		</div>
	</section>
	<section class="lander-section">
		<div class="lander-content">
			<?php
			while ( have_posts() ) {
				the_post();
				the_content();
			}
			?>
		</div>
	</section>
</main>
<?php
get_footer();
