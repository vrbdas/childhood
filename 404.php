<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Underscores
 */

get_header();
?>

<div class="container toys">
	<div class="container">
		<div class="forty-four">
			<h2 class="subtitle">
				Такой страницы не существует!
			</h2>
			<h3>
			<a class="forty-four__link" href="<?php echo get_home_url(); ?>">Вернуться на главную</a>
			</h3>
		</div>
	</div>
</div>

<?php
get_footer();
