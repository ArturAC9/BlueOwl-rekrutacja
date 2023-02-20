
    <?php get_header(); ?>


    <div class="header__gallery">
       <a href="#"><div class="header__gallery--image1"><p class="header__gallery--text">Lorem Ipsum</p><img src="http://localhost/blue_owl_rekrutacja/wp-content/uploads/2023/02/Image.png" alt="obrazek">  </div></a>
       <a href="#"><div class="header__gallery--image2"><p class="header__gallery--text">Lorem Ipsum</p><img src="http://localhost/blue_owl_rekrutacja/wp-content/uploads/2023/02/Image6.png" alt="obrazek">  </div></a>
       <a href="#"><div class="header__gallery--image3"><p class="header__gallery--text">Lorem Ipsum</p><img src="http://localhost/blue_owl_rekrutacja/wp-content/uploads/2023/02/Image5.png" alt="obrazek">  </div></a>
       <a href="#"><div class="header__gallery--image4"><p class="header__gallery--text">Lorem Ipsum</p><img src="http://localhost/blue_owl_rekrutacja/wp-content/uploads/2023/02/Image4.png" alt="obrazek">  </div></a>
       <a href="#"><div class="header__gallery--image5"><p class="header__gallery--text">Lorem Ipsum</p><img src="http://localhost/blue_owl_rekrutacja/wp-content/uploads/2023/02/Image3.png" alt="obrazek">  </div></a>
       <a href="#"><div class="header__gallery--image6"><p class="header__gallery--text">Lorem Ipsum</p><img src="http://localhost/blue_owl_rekrutacja/wp-content/uploads/2023/02/Image2.png" alt="obrazek">  </div></a>
    </div>

    <div id="image" class="splide">
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide"><p class="header__slider--text">Lorem Ipsum</p><img src="http://localhost/blue_owl_rekrutacja/wp-content/uploads/2023/02/Image.png" alt="obrazek"></li>
          <li class="splide__slide"><p class="header__slider--text">Lorem Ipsum</p><img src="http://localhost/blue_owl_rekrutacja/wp-content/uploads/2023/02/Image6.png" alt="obrazek"></li>
          <li class="splide__slide"><p class="header__slider--text">Lorem Ipsum</p><img src="http://localhost/blue_owl_rekrutacja/wp-content/uploads/2023/02/Image5.png" alt="obrazek"></li>
          <li class="splide__slide"><p class="header__slider--text">Lorem Ipsum</p><img src="http://localhost/blue_owl_rekrutacja/wp-content/uploads/2023/02/Image4.png" alt="obrazek"></li>
          <li class="splide__slide"><p class="header__slider--text">Lorem Ipsum</p><img src="http://localhost/blue_owl_rekrutacja/wp-content/uploads/2023/02/Image3.png" alt="obrazek"></li>
          <li class="splide__slide"><p class="header__slider--text">Lorem Ipsum</p><img src="http://localhost/blue_owl_rekrutacja/wp-content/uploads/2023/02/Image2.png" alt="obrazek"></li>
        </ul>
      </div>

      <!-- progress bar - slider -->
      <div class="my-slider-progress-bar"></div>
    </div> 
    
    <!-- zmiana koloru, dodanie tresci, obrazka oraz przyciskow -->
    <aside class="cta" style="background-color:<?php the_field('kolor_sekcji_cta', 'options'); ?>">
      <?php the_field('tresc_cta', 'options'); ?>
        <div class="cta__buttons">
          <?php 
            $link = get_field('przycisk_1_cta', 'options');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            ?>

            <button class="unfilled">
              <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
              <?php echo esc_html( $link_title ); ?></a><?php endif; ?>
            </button>

            <?php 
              $link = get_field('przycisk_2_cta', 'options');
              if( $link ): 
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
                  <button class="filled">
                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                    <?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                  </button>
      </div>
    </aside>

   
<!-- sekcja opinie -->
  <aside class="opinion">
    <h2 class="opinion__title"><?php the_field('tytul_sekcji', 'options'); ?></h2>
    <div class="opinion__container">
      <div class="opinion__container--slider">
        <div id="opinion" class="splide">
          <div class="splide__track">
              <ul class="splide__list">

                  <li class="splide__slide">
                    <span class="splide__slide--text">
                        <?php the_field('tresc_opini_1', 'options'); ?>
                    </span>
                    <p class="splide__slide--name"><?php the_field('imie_1', 'options'); ?></p>
                    <p class="splide__slide--company"><?php the_field('firma_1', 'options'); ?></p>
                  </li>

                  <li class="splide__slide">
                    <span class="splide__slide--text">
                    <?php the_field('tresc_opini_2', 'options'); ?>
                    </span>
                    <p class="splide__slide--name"><?php the_field('imie_2', 'options'); ?></p>
                    <p class="splide__slide--company"><?php the_field('firma_2', 'options'); ?></p>
                  </li>

                  <li class="splide__slide">
                    <span class="splide__slide--text">
                    <?php the_field('tresc_opini_3', 'options'); ?>
                    </span>
                    <p class="splide__slide--name"><?php the_field('imie_3', 'options'); ?></p>
                    <p class="splide__slide--company"><?php the_field('firma_3', 'options'); ?></p>
                  </li>

              </ul>
              <div class="splide" data-splide='{"type":"loop","perPage":3}'></div>
          </div>
          <!-- progress bar -->
        <div class="my-slider-progress-bar"></div>
      </div>
      </div>

      <!-- prawa strona skecji opinii -->
      <div class="opinion__container--info" style="background-color:<?php the_field('kolor_prawej_sekcji_opinii', 'options'); ?>">
        <?php the_field('tresc_prawej_strony_sekcji_opinii', 'options'); ?>
      <div class="cta__buttons">
        <?php 
          $link = get_field('przycisk_1_sekcji_prawej_strony_opinii', 'options');
          if( $link ): 
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <button class="unfilled">
              <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
              <?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?></button>
    

        <?php 
          $link = get_field('przycisk_2_sekcji_prawej_strony_opinii', 'options');
          if( $link ): 
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
        ?>

        <button class="filled"><a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
          <?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?></button>
      </div>
      </div>
    </div>
  </aside>

<?php get_footer(); ?>