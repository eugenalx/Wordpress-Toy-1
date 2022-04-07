<?php if ( get_theme_mod('woodworking_carpenter_our_category_section_enable', true) == true ) : ?>
<div id="our_category" class="py-5">
	<div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4">
        <?php if ( get_theme_mod('woodworking_carpenter_our_category_title') ) : ?>
          <h3><?php echo esc_html( get_theme_mod('woodworking_carpenter_our_category_title' ) ); ?></h3>
          <hr>
        <?php endif; ?>
        <?php if ( get_theme_mod('woodworking_carpenter_our_category_text') ) : ?>
          <p><?php echo esc_html( get_theme_mod('woodworking_carpenter_our_category_text' ) ); ?></p>
        <?php endif; ?>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="owl-carousel">
          <?php 
            $category_image = get_theme_mod('woodworking_carpenter_our_category_counter','');
            for ( $i = 1; $i <= $category_image; $i++ ){ ?>
              <div class="category-box text-center">
                <figure class="projects-img">
                  <?php if ( get_theme_mod('woodworking_carpenter_our_category_image'.$i) ) : ?>
                    <img src="<?php echo esc_url(get_theme_mod('woodworking_carpenter_our_category_image'.$i)); ?>"/>
                  <?php endif; ?>
                  <figcaption>
                    <div class="projects-content">
                      <?php if ( get_theme_mod('woodworking_carpenter_our_category_button_url'.$i) || get_theme_mod('woodworking_carpenter_our_category_text_hover'.$i) ) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('woodworking_carpenter_our_category_button_url'.$i));?>"><?php echo esc_html(get_theme_mod('woodworking_carpenter_our_category_text_hover'.$i));?></a>
                      <?php endif; ?>
                    </div>
                  </figcaption>
                </figure>
                <?php if ( get_theme_mod('woodworking_carpenter_our_category_box_title'.$i) ) : ?>
                  <h5 class="my-3"><?php echo esc_html(get_theme_mod('woodworking_carpenter_our_category_box_title'.$i));?></h5>
                <?php endif; ?>
              </div>
          <?php }?>
        </div>
      </div>
	  </div>
	</div>
</div>
<?php endif; ?>