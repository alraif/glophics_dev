<?php
@session_start();
get_includes('head');
get_includes('header');
get_includes('banner');
?>
<main>
	<div class="wrapper">
		<?php get_template_part( 'loop', 'home' ); ?>
	</div>
</main>
<?php get_includes('footer');?>
