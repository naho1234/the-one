</main>
<?php
$theme_path = get_stylesheet_directory_uri();

$home = esc_url(home_url('/'));
$about = esc_url(home_url('/about/'));
?>

<footer class="footer">
	<div class="footer__logo">
		<a href="<?php echo $home; ?>">
			<img loading=" lazy" src="<?php echo $theme_path; ?>/assets/images/common/logo.svg" alt="the oneポートフォリオ">
		</a>
	</div>

</footer>
<?php wp_footer(); ?>
</body>

</html>