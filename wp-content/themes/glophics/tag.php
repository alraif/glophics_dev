<?php
@session_start();
get_includes('head');
get_includes('header');
get_includes('banner');
?>
<main>
	<div class="wrapper">

        <h1 class="page-title"><?php
            printf( __( 'Tag Archives: %s', 'twentyten' ), '<span>' . single_tag_title( '', false ) . '</span>' );
        ?></h1>

        <?php
            $args = array(
                'post_type' => 'post',
                'tag_id' => $tag_id
            );

            $post_query = new WP_Query($args);
            if($post_query->have_posts() ) {
                while($post_query->have_posts() ) {
                    $post_query->the_post(); ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_content(); ?></p>
                    <?php
                }
            }
        ?>

    </div>
</main>
<?php get_includes('footer');?>
