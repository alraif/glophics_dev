<footer>
			<div class="wrapper">
				<div class="cont-info">
					<span class="info-title">Contact Information</span>
					<?php dynamic_sidebar('contact_info') ?>
				</div>
				<div class="footerlogo">
					<a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url');?>/images/logo.png" alt="Dummy Site"/></a>
				</div>
				<nav class="footer-nav">
					<?php wp_nav_menu( array( 'after' => '', 'container_class' => 'menu-header', 'footer_menu' => 'footer-nav')); ?>
					<!-- <span class="copy">&copy; Copyright 2018 &bull; Custom Web Design &bull; Dummy Site</span> -->
				</nav>
			</div>
		</footer>
	</div>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/calcheight.js"></script>
<script src="<?php bloginfo('template_url');?>/js/plugins.js"></script> -->
<?php wp_footer(); ?>
</body>
</html>