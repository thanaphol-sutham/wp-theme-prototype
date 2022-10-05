<footer class="footer">
	<div class="sitemap">
		<div class="container">
			<div class="row">
				<div class="col-3">
					<h4>About Starbugs</h4>
					<!-- <ul class="sitemap-link">
							<li><a href="">Our Heritage</a></li>
							<li><a href="">Our Company</a></li>
							<li><a href="">Responsibility</a></li>
							<li><a href="">Career Center</a></li>
						</ul> -->
					<?php wp_nav_menu(array(
						'theme_location' => 'about',
						'menu_class' => 'sitemap-link',
						'container' => false
					)); ?>
				</div>
				<div class="col-3">
					<h4>About Starbugs</h4>
					<!-- <ul class="sitemap-link">
						<li><a href="">Our Heritage</a></li>
						<li><a href="">Our Company</a></li>
						<li><a href="">Responsibility</a></li>
						<li><a href="">Career Center</a></li>
					</ul> -->
					<?php wp_nav_menu(array(
						'theme_location' => 'story',
						'menu_class' => 'sitemap-link',
						'container' => false
					)); ?>
				</div>
				<div class="col-3">
					<!-- <ul class="sitemap-link">
						<li><a href="">Our Heritage</a></li>
						<li><a href="">Our Company</a></li>
						<li><a href="">Responsibility</a></li>
						<li><a href="">Career Center</a></li>
					</ul> -->
					<?php wp_nav_menu(array(
						'theme_location' => 'site_map',
						'menu_class' => 'sitemap-link',
						'container' => false
					)); ?>
				</div>
				<div class="col-3">
					<ul class="footer-social-links">
						<li>
							<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icon-facebook.png" alt=""></a>
						</li>
						<li>
							<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icon-line.png" alt=""></a>
						</li>
						<li>
							<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icon-twitter.png" alt=""></a>
						</li>
					</ul>
					<p>This is a demo website that built for WordPress theme development, Zero to Pro course.</p>
				</div>
			</div>
		</div>

	</div>
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<!-- <ul class="copyright-link">
						<li><a href="">Homepage</a></li>
						<li><a href="">Menus</a></li>
						<li><a href="">Promotions</a></li>
						<li><a href="">Contact us</a></li>
					</ul> -->
					<?php wp_nav_menu(array(
						'theme_location' => 'footer',
						'menu_class' => 'copyright-link',
						'container' => false
					)); ?>
				</div>
				<div class="col-6">
					<p class="copyright-text">Starbugs.com | WordPress Theme for Zero to Pro Course.</p>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>