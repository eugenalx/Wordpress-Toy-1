<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'woodworking-carpenter' ); ?></a>

<div class="main-header-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 align-self-center">
	    		<div class="logo text-center">
		    		<div class="logo-image">
		    			<?php echo esc_url( the_custom_logo() ); ?>
			    	</div>
			    	<div class="logo-content">
				    	<?php
				    		if ( get_theme_mod('woodworking_carpenter_display_header_title', true) == true ) :
					      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
					      			echo esc_attr(get_bloginfo('name'));
					      		echo '</a>';
					      	endif;

					      	if ( get_theme_mod('woodworking_carpenter_display_header_text', true) == true ) :
				      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
				      		endif;
			    		?>
					</div>
				</div>
		   	</div>
		   	<div class="col-lg-9 col-md-9 col-sm-9 align-self-center">
		   		<div class="row upper-box py-2">
		   			<div class="col-lg-5 col-md-5 col-sm-5 align-self-center">
						<?php $woodworking_carpenter_settings = get_theme_mod( 'woodworking_carpenter_social_links_settings' ); ?>
						<div class="social-links text-center text-md-left py-2 py-md-0">
							<?php if ( is_array($woodworking_carpenter_settings) || is_object($woodworking_carpenter_settings) ){ ?>
						    	<?php foreach( $woodworking_carpenter_settings as $woodworking_carpenter_setting ) { ?>
							        <a href="<?php echo esc_url( $woodworking_carpenter_setting['link_url'] ); ?>">
							            <i class="<?php echo esc_attr( $woodworking_carpenter_setting['link_text'] ); ?> mr-2"></i>
							        </a>
						    	<?php } ?>
							<?php } ?>
						</div>
					</div>
					<div class="col-lg-5 col-md-5 col-sm-5 align-self-center">
						<?php if(class_exists('woocommerce')){ ?>
				          	<form method="get" class="woocommerce-product-search" action="<?php echo esc_url(home_url('/')); ?>">
					            <label class="screen-reader-text" for="woocommerce-product-search-field"><?php esc_html_e('Search for:', 'woodworking-carpenter'); ?></label>
					            <input type="search" id="woocommerce-product-search-field" class="search-field " placeholder="<?php echo esc_html('Search Hear','woodworking-carpenter'); ?>" value="<?php echo get_search_query(); ?>" name="s"/>
					            <button type="submit" value="" class="search-button"><i class="fas fa-search"></i></button>
					            <input type="hidden" name="post_type" value="product"/>
				          	</form>
				        <?php }?>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 align-self-center text-center text-md-right">
						<?php if ( get_theme_mod('woodworking_carpenter_myaccount_link') ) : ?>
							<a href="<?php echo esc_url( get_theme_mod('woodworking_carpenter_myaccount_link' ) ); ?>" class="myacunt-url"><i class="far fa-user mr-3"></i></a>
						<?php endif; ?>
						<?php if ( get_theme_mod('woodworking_carpenter_cart_box_enable', true) == true ) : ?>
							<?php if ( class_exists( 'woocommerce' ) ) {?>
								<a class="cart-customlocation" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','woodworking-carpenter' ); ?>"><i class="fas fa-shopping-cart"></i><span class="cart-item-box"><?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?></span></a>
							<?php }?>
						<?php endif; ?>
					</div>
		   		</div>
	   			<header id="site-navigation" class="header text-center text-md-left">
					<div class="row">
						<div class="col-lg-9 col-md-12 col-sm-12 align-self-center">
							<?php if(has_nav_menu('main-menu')){ ?>
								<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
									<span aria-hidden="true"><?php esc_html_e( 'Menu', 'woodworking-carpenter' ); ?></span>
								</button>
								<nav id="main-menu" class="close-panal">
									<?php
										wp_nav_menu( array(
											'theme_location' => 'main-menu',
											'container' => 'false'
										));
									?>
									<button class="close-menu my-2 p-2" type="button">
										<span aria-hidden="true"><i class="fa fa-times"></i></span>
									</button>
								</nav>
							<?php }?>
						</div>
				       	<div class="col-lg-3 col-md-12 col-sm-12 align-self-center pl-md-0">
					        <?php if(class_exists('woocommerce')){ ?>
					          	<button class="product-btn"><?php esc_html_e('CATEGORIES','woodworking-carpenter'); ?></button>
					          	<div class="product-cat">
									<?php
										$args = array(
											'orderby'    => 'title',
											'order'      => 'ASC',
											'hide_empty' => 0,
											'parent'  => 0
										);
										$product_categories = get_terms( 'product_cat', $args );
										$count = count($product_categories);
										if ( $count > 0 ){
											foreach ( $product_categories as $product_category ) {
											$product_cat_id   = $product_category->term_id;
											$cat_link = get_category_link( $product_cat_id );
											if ($product_category->category_parent == 0) { ?>
											<li class="drp_dwn_menu"><a href="<?php echo esc_url(get_term_link( $product_category ) ); ?>">
											<?php
										}
										echo esc_html( $product_category->name ); ?></a><i class="fas fa-chevron-right ml-3"></i></li>
									<?php } } ?>
					          	</div>
					        <?php }?>
					    </div>
				   	</div>
				</header>
		   	</div>
		</div>
	</div>
</div>