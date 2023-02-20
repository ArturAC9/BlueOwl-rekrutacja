<footer>    
    <div class="footerInfo">
        <div class="footerInfo__firstColumn">
        <!-- Logo w stopce -->
        <?php if( get_field('logo_witryny', 'options') ): ?>
            <img src="<?php the_field('logo_witryny', 'options'); ?>" />
        <?php endif; ?>
        <div class="footerInfo__firstColumn--text">
            <?php the_field('stopka_tekst', 'options'); ?>
        </div>
    </div>

    <div class="footerInfo__secondColumn">
        <?php the_field('tytul_nad_menu_w_stopce', 'options'); ?>
            <!-- menu w stopce -->
            <?php 
                wp_nav_menu([
                    'menu' => 'footer-menu',
                    'theme_location' => 'footer-menu'
                ]);
            ?>
    </div>

    <div class="footerInfo__thirdColumn">
        <?php the_field('tytul_nad_adresem_w_stopce', 'options'); ?><br><br>
        <?php the_field('adres_stopka', 'options'); ?><br><br>
            <div class="footerInfo__thirdColumn--buttons">
        <?php 
        $link = get_field('przycisk_1_w_stopce', 'options');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <button class="secondNav__button">
                <img src="http://localhost/blue_owl_rekrutacja/wp-content/uploads/2023/02/Icon-Wrapper.png" alt="ikonka">
                <a  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                <?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?></button>
    
        <?php 
            $link = get_field('przycisk_2_w_stopce', 'options');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
            <button class="secondNav__button">
                <img src="http://localhost/blue_owl_rekrutacja/wp-content/uploads/2023/02/Icon-Wrapper-1.png" alt="ikonka"> <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"> 
                <?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?></button>
        </div>
        </div>
    </div>

    <!-- dolna sekcja stopki -->
    <div class="footerBottom">
        <div class="footerBottom__socialMedia">
        <?php the_field('ikonki_social_media', 'options'); ?>
        </div>
        <div class="footerBottom__copyright">
       &copy; 2023 Blue Owl. All rights reserved
        </div>
    </div>
</footer>

        <?php 
            wp_footer();
        ?>

    </body>
</html>