<?php get_header(); ?>

<main>
	<?php
$theme_path = get_stylesheet_directory_uri();

$home = esc_url(home_url('/'));
?>
	<div class="top-wrap">
		<!-- fv -->
		<section class="top-fv">
			<div class="top-fv__inner inner">
				<div class="top-fv__top">
					<h2 class="top-fv__title-box">
						<p class="top-fv__title">
							あなたとつくる<br>
							ものがたりのはじまり
						</p>
						<p class="top-fv__sub-title">
							〜ひとつひとつの想いを、丁寧にかたちへ〜
						</p>
					</h2>
					<div class="top-fv__img-box">
						<figure class="top-fv__img">
							<img loading="lazy" src="<?php echo $theme_path; ?>/assets/images/mv-pen.webp" alt="ペンギン">
						</figure>
						<p class="top-fv__img-text">
							気になるものがたりを<br>
							のぞいてみませんか？
						</p>
					</div>
				</div>
				<ul class="top-fv__lists">
					<li class="top-fv__list">
						<a href="/" class="top-fv__list-link">
							<figure class="top-fv__list-img">
								<img loading="lazy" src="<?php echo $theme_path; ?>/assets/images/mv-book.webp"
									alt="コーポレートサイト">
							</figure>
							<div class="top-fv__list-text">
								コーポレートサイト
							</div>
						</a>
					</li>
					<li class="top-fv__list">
						<a href="<?php echo $home; ?>" class="top-fv__list-link">
							<figure class="top-fv__list-img">
								<img loading="lazy" src="<?php echo $theme_path; ?>/assets/images/mv-book.webp"
									alt="コーポレートサイト">
							</figure>
							<div class="top-fv__list-text">
								コーポレートサイト
							</div>
						</a>
					</li>
					<li class="top-fv__list">
						<a href="/" class="top-fv__list-link">
							<figure class="top-fv__list-img">
								<img loading="lazy" src="<?php echo $theme_path; ?>/assets/images/mv-book.webp"
									alt="コーポレートサイト">
							</figure>
							<div class="top-fv__list-text">
								コーポレートサイト
							</div>
						</a>
					</li>
					<li class="top-fv__list">
						<a href="/" class="top-fv__list-link">
							<figure class="top-fv__list-img">
								<img loading="lazy" src="<?php echo $theme_path; ?>/assets/images/mv-book.webp"
									alt="コーポレートサイト">
							</figure>
							<div class="top-fv__list-text">
								コーポレートサイト
							</div>
						</a>
					</li>
					<li class="top-fv__list">
						<a href="/" class="top-fv__list-link">
							<figure class="top-fv__list-img">
								<img loading="lazy" src="<?php echo $theme_path; ?>/assets/images/mv-book.webp"
									alt="コーポレートサイト">
							</figure>
							<div class="top-fv__list-text">
								コーポレートサイト
							</div>
						</a>
					</li>
				</ul>
			</div>
		</section>
		<!-- about -->
		<section class="top-about">
			<div class="top-about__inner inner">
				<h2 class="top-about__title section-title">
					<p class="section-title__en">
						me
					</p>
					<p class="section-title__jp">
						わたしの想い
					</p>
				</h2>
				<p class="top-about__text">
					わたしにとって、ものづくりは“誰かを想うこと”から始まります。<br>
					伝えたい想いが正しく、心地よく届くように・・・<br>
					情報設計からデザイン・コーディングまで、一貫して丁に対応します。<br>
					ひとつひとつの出会いを大切に、信頼できるかたちをつくっていきます。
				</p>
				<div class="top-about__btn section-btn">
					<a href="<?php echo $home; ?>" class="section-btn__link">
						<span class="section-btn__link-text">
							もっと見る
						</span>
						<div class="section-btn__link-arrow">
							<img loading="lazy" src="<?php echo $theme_path; ?>/assets/images/common/arrow.svg"
								alt="矢印">
						</div>
					</a>
				</div>
			</div>
		</section>
		<div class="top-wrap__under"></div>
		<div class="top-wrap__split"></div>
	</div>

	<!-- work -->
	<section class="top-work">
		<div class="top-work__inner inner">
			<h2 class="top-work__title section-title">
				<p class="section-title__en">
					work
				</p>
				<p class="section-title__jp">
					つくってきたもの
				</p>
			</h2>
			<ul class="top-work__lists">
				<li class="top-work__list">
					<a href="" class="top-work__link">
						<figure class="top-work__img">
							<img loading="lazy" src="<?php echo $theme_path; ?>/assets/images/top-work1.webp"
								alt="サイト紹介1">
						</figure>
						<div class="top-work__body">
							<p class="top-work__category">クライアントワーク</p>
							<h3 class="top-work__head">
								採用サイト
							</h3>
							<p class="top-work__text">
								担当範囲<br>
								デザイン/コーディング/WordPress（オリジナルテーマ）
							</p>
							<div href="<?php echo $home; ?>" class="top-work__btn-link section-btn__link">
								<span class="section-btn__link-text">
									実績を見る
								</span>
								<div class="section-btn__link-arrow">
									<img loading="lazy" src="<?php echo $theme_path; ?>/assets/images/common/arrow.svg"
										alt="矢印">
								</div>
							</div>
						</div>
					</a>
				</li>
				<li class="top-work__list">
					<a href="" class="top-work__link">
						<figure class="top-work__img">
							<img loading="lazy" src="<?php echo $theme_path; ?>/assets/images/top-work2.webp"
								alt="サイト紹介1">
						</figure>
						<div class="top-work__body">
							<p class="top-work__category">スクール課題</p>
							<h3 class="top-work__head">
								スマッシュケーキLP
							</h3>
							<p class="top-work__text">
								担当範囲<br>
								情報設計（上流設計含む）/デザイン/Studio
							</p>
							<div href="<?php echo $home; ?>" class="top-work__btn-link section-btn__link">
								<span class="section-btn__link-text">
									実績を見る
								</span>
								<div class="section-btn__link-arrow">
									<img loading="lazy" src="<?php echo $theme_path; ?>/assets/images/common/arrow.svg"
										alt="矢印">
								</div>
							</div>
						</div>
					</a>
				</li>
			</ul>
			<div class="top-work__btn section-btn">
				<a href="<?php echo $home; ?>" class="section-btn__link">
					<span class="section-btn__link-text">
						すべて見る
					</span>
					<div class="section-btn__link-arrow">
						<img loading="lazy" src="<?php echo $theme_path; ?>/assets/images/common/arrow.svg" alt="矢印">
					</div>
				</a>
			</div>
		</div>
	</section>
	<?php get_footer(); ?>