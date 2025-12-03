<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta name="format-detection" content="telephone=no" />
	<!-- font読み込み -->
	<script>
	(function(d) {
		var config = {
				kitId: 'rxp1dnt',
				scriptTimeout: 3000,
				async: true
			},
			h = d.documentElement,
			t = setTimeout(function() {
				h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
			}, config.scriptTimeout),
			tk = d.createElement("script"),
			f = false,
			s = d.getElementsByTagName("script")[0],
			a;
		h.className += " wf-loading";
		tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
		tk.async = true;
		tk.onload = tk.onreadystatechange = function() {
			a = this.readyState;
			if (f || a && a != "complete" && a != "loaded") return;
			f = true;
			clearTimeout(t);
			try {
				Typekit.load(config)
			} catch (e) {}
		};
		s.parentNode.insertBefore(tk, s)
	})(document);
	</script>

	<?php wp_head(); ?>
</head>

<?php
$theme_path = get_stylesheet_directory_uri();

$home = esc_url(home_url('/'));
$me = esc_url(home_url('/me/'));
$work = esc_url(home_url('/work/'));
$message = esc_url(home_url('/#message/'));
?>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="header js-header">
		<div class="header__inner">
			<?php if (is_front_page()) : ?>
			<h1 class="header__logo">
				<?php else : ?>
				<div class="header__logo">
					<?php endif; ?>
					<a href="<?php echo $home; ?>">
						<img loading=" lazy" src="<?php echo $theme_path; ?>/assets/images/common/logo.svg"
							alt="the oneポートフォリオ">
					</a>
					<?php if (is_front_page()) : ?>
			</h1>
			<?php else : ?>
		</div>
		<?php endif; ?>
		<nav class="header__nav">
			<ul class="header__nav-list">
				<li class="header__nav-item">
					<a href="<?php echo $me; ?>">me</a>
				</li>
				<li class="header__nav-item">
					<a href="<?php echo $work; ?>">work</a>
				</li>
				<li class="header__nav-item">
					<a href="<?php echo $message; ?>">message</a>
				</li>
			</ul>
		</nav>
		<button class="header__hamburger js-hamburger">
			<span></span>
			<span></span>
			<span></span>
		</button>
		<div class="header__drawer js-drawer">
			<nav class="header__drawer-nav">
				<ul class="header__drawer-list">
					<li class="header__drawer-item">
						<a href="<?php echo $me; ?>">me</a>
					</li>
					<li class="header__drawer-item">
						<a href="<?php echo $work; ?>">work</a>
					</li>
					<li class="header__drawer-item">
						<a href="<?php echo $message; ?>">message</a>
					</li>
				</ul>
			</nav>
		</div>
		</div>
	</header>