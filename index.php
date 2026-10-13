<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
    </header>
    <div class="container">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                echo '<h2>' . get_the_title() . '</h2>';
                the_content();
            endwhile;
        else :
            echo '<p>Bienvenido a mi sitio web profesional creado con WordPress.</p>';
        endif;
        ?>
    </div>
    <?php wp_footer(); ?>
</body>
</html>
