<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="firstNav">
            <!-- Logo -->
            <?php if( get_field('logo_witryny', 'options') ): ?>
                <img src="<?php the_field('logo_witryny', 'options'); ?>" />
            <?php endif; ?>

            <!-- Nagłówek -->
            <?php 
                if ( get_header_image() ) {
            ?>
                <img src="<?php header_image(); ?>" alt="tekst alt" width="<?php echo absint(get_custom_header()->width) ?>" height="<?php echo absint(get_custom_header()->height) ?>">
            <?php
                }
            ?>
            <!-- Menu -->
            <?php 
                wp_nav_menu([
                    'menu' => 'main-menu',
                    'theme_location' => 'main-menu',
                    'fallback_cb' => false,
                    'menu_class' => 'moje-menu',
                    'container' => 'nav',
                    'container_calss' => 'menu-wrapper',
                    'container_id' => 'manu-glowne-wrapper',
                    'container_aria_label' => 'opis aria',
                    'echo' => true,
                    'depth' => 0,
                    'items_wrap' => "<ul id='%s' class='%s' data-collapse='wdwd'>%s</ul>"
                ]);
            ?>
        </div>
        <!-- Druga czesc menu -->
        <div class="secondNav">
            <button class="secondNav__button">Menu button</button>
            <div class="mainHomePage">
            <div class="searchWrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="Search">
      <button type="submit" class="searchButton">
      <span class="dashicons dashicons-search"></span>
     </button>
   </div>
</div>
            </div>
        </div>
    </header>
</body>
</html>

