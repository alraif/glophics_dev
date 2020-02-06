<header>
    <div class="wrapper">
        <div class="comlogo">
            <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url');?>/images/logo.png" alt="Dummy Site"/></a>
        </div>
        <nav class="main-nav">
            <div class="menu-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <?php wp_nav_menu( array( 'container_class' => 'nav-menu', 'theme_location' => 'primary', 'after' => '<span><i class="fa fa-2x">&nbsp;&nbsp;&nbsp;&nbsp;</i></span>') ); ?>
        </nav>
    </div>
</header>