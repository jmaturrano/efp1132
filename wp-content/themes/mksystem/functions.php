<?php
/**
 * mksystem functions and definitions
 *
 * @package mksystem
 */



function get_template_directory_child(){
  $directory_template = get_template_directory_uri();
  $directory_child = str_replace('dazzling', '', $directory_template).'mksystem';
  return $directory_child;
}


/**
 * Add owl-carousel
 */
function mksystem_support_header() {
  echo '<!-->'. "\n";
  echo '<script src="' . esc_url( get_template_directory_child() . '/plugin/owl-carousel/assets/js/jquery-1.9.1.min.js' ) . '"></script>'. "\n";
  echo '<script src="' . esc_url( get_template_directory_child() . '/plugin/owl-carousel/owl-carousel/owl.carousel.js' ) . '"></script>'. "\n";
  echo '<!-->'. "\n";
}
add_action( 'wp_head', 'mksystem_support_header', 11 );



function mksystem_customizer_register( $wp_customize ) {

  /*
  *
  * Cambios de colores
  *
  */
  $wp_customize->add_setting('color_mksystem_theme',array(
    'default' => '#FFD800',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'color_mksystem_theme', array(
    'label'        => __( 'Color del tema <style>#customize-control-dazzling-top_nav_bg_color, #customize-control-dazzling-top_nav_link_color, #customize-control-dazzling-top_nav_dropdown_bg, #customize-control-dazzling-top_nav_dropdown_item, #accordion-section-dazzling_layout_options, #accordion-section-dazzling_action_options, #accordion-section-dazzling_typography_options, #accordion-section-dazzling_footer_options, #accordion-section-dazzling_social_options, #accordion-section-dazzling_other_options, #accordion-section-dazzling_important_links, #accordion-section-colors{display:none !important;}</style>', 'mksystem' ),
    'section'    => 'dazzling_header_options',
    'settings'   => 'color_mksystem_theme',
  )));


  $wp_customize->remove_section('background_image');
  $wp_customize->remove_panel('widgets');
  $wp_customize->remove_section('static_front_page');
  $wp_customize->remove_section('dazzling_other_options');
  $wp_customize->remove_section('dazzling_social_options');
  $wp_customize->remove_section('dazzling_footer_options');
  $wp_customize->remove_setting('dazzling_top_nav_bg_color');
  $wp_customize->remove_panel('dazzling_layout_options');
  $wp_customize->remove_panel('dazzling_action_options');
  




  /*
  *
  * Agregando opción: social links
  *
  */
  $wp_customize->add_section(
        'social_links',
        array(
            'title' => __('Social links', 'mksystem'),
            'priority' => 100
        )
    );
  $wp_customize->add_setting('social_facebook',array(
    'default' => __('http://facebook.com','mksystem')
  ));
  $wp_customize->add_control('social_facebook',array(
    'label' => __('Facebook','mksystem'),
    'section' => 'social_links',
    'setting' => 'social_facebook',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('social_twitter',array(
    'default' => __('http://twitter.com','mksystem')
  ));
  $wp_customize->add_control('social_twitter',array(
    'label' => __('Twitter','mksystem'),
    'section' => 'social_links',
    'setting' => 'social_twitter',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('social_instagram',array(
    'default' => __('http://instagram.com','mksystem')
  ));
  $wp_customize->add_control('social_instagram',array(
    'label' => __('Instagram','mksystem'),
    'section' => 'social_links',
    'setting' => 'social_instagram',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('social_linkedin',array(
    'default' => __('http://linkedin.com','mksystem')
  ));
  $wp_customize->add_control('social_linkedin',array(
    'label' => __('Linkedin','mksystem'),
    'section' => 'social_links',
    'setting' => 'social_linkedin',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('social_youtube',array(
    'default' => __('http://youtube.com','mksystem')
  ));
  $wp_customize->add_control('social_youtube',array(
    'label' => __('Youtube','mksystem'),
    'section' => 'social_links',
    'setting' => 'social_youtube',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('social_vimeo',array(
    'default' => __('http://vimeo.com','mksystem')
  ));
  $wp_customize->add_control('social_vimeo',array(
    'label' => __('Vimeo','mksystem'),
    'section' => 'social_links',
    'setting' => 'social_vimeo',
    'type'    => 'text'
  ));
  

  /*
  *
  * Agregando opción: google maps
  *
  */
  $wp_customize->add_section(
        'google_maps',
        array(
            'title' => __('Google maps', 'mksystem'),
            'priority' => 100
        )
    );
  $wp_customize->add_setting('google_frame',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('google_frame',array(
    'label' => __('iFrame','mksystem'),
    'section' => 'google_maps',
    'setting' => 'google_frame',
    'type'    => 'textarea'
  ));


}
add_action('customize_register','mksystem_customizer_register');












/**
 * Mk system header styles
 *
 */
function mksystem_header_styles() {

  //Owl-carousel
  wp_enqueue_style( 'owl-carousel-main', get_template_directory_child() . '/plugin/owl-carousel/owl-carousel/owl.carousel.css' );
  wp_enqueue_style( 'owl-carousel-theme', get_template_directory_child() . '/plugin/owl-carousel/owl-carousel/owl.theme.css' );
  //Google Fonts      
  wp_register_style('polmo-googleFontsLato','//fonts.googleapis.com/css?family=Lato:300,400,700,900');
  wp_enqueue_style( 'polmo-googleFontsLato');
?>
  <style type="text/css">
    .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus, .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus, .dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus{
      background-color: transparent !important;
    }
    .navbar-default #menu-menu-principal.navbar-nav > .active > a, 
    .navbar-default #menu-menu-principal.navbar-nav > .active > a:hover, 
    .navbar-default #menu-menu-principal.navbar-nav > .active > a:focus, 
    .navbar-default #menu-menu-principal.navbar-nav > li > a:hover, 
    .navbar-default #menu-menu-principal.navbar-nav > li > a:focus, 
    .navbar-default #menu-menu-principal.navbar-nav > .open > a, 
    .navbar-default #menu-menu-principal.navbar-nav > .open > a:hover, 
    .navbar-default #menu-menu-principal.navbar-nav > .open > a:focus{
      border-bottom: 2px solid #e33a35;
    }
    .navbar-mksystem{
      background: <?= get_theme_mod('color_mksystem_theme'); ?> !important;
      border-bottom: 6px solid #e33a35 !important;
      padding: 30px 0;
    }
    .section-title hr{
      border: 1px solid <?= get_theme_mod('color_mksystem_theme'); ?>; 
    }
    .site-footer{
      background-color: <?= get_theme_mod('color_mksystem_theme'); ?> !important;
    }
    .footer_subscription-wrapper #sm_submit{
      color: #000 !important;
      background-color: <?= get_theme_mod('color_mksystem_theme'); ?> !important;
      margin-top: 15px !important;
      margin-left: 0 !important;
      text-transform: uppercase;
      padding-top: 6px !important;
      padding-bottom: 6px !important;
      width: 100%;
    }
    .btn-default:hover, 
    .label-default[href]:hover, 
    .label-default[href]:focus, 
    .btn-default:hover, 
    .btn-default:focus, 
    .btn-default:active, 
    .btn-default.active{
      background: <?= get_theme_mod('color_mksystem_theme'); ?> !important;
    }
  </style>
<?php
}
add_action( 'wp_enqueue_scripts', 'mksystem_header_styles' );


/**
 * Mk system header scripts
 *
 */
function mksystem_header_scripts() {
?>
  <script>
    jQuery(document).ready(function() {
     if(jQuery(".owl-carousel-categories").length > 0){
        jQuery(".owl-carousel-categories").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items : 6,
            itemsDesktop : [1199,4],
            itemsDesktopSmall : [979,4],
            navigation : true,
            navigationText : ["<ul class='flex-direction-nav'><li class='flex-nav-prev'><a class='flex-prev' ></a></li></ul>", "<ul class='flex-direction-nav'><li class='flex-nav-next'><a class='flex-next' ></a></li></ul>"]
        });
     }//end if

     if(jQuery(".owl-carousel-productos").length > 0){
        jQuery(".owl-carousel-productos").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items : 1,
            slideSpeed: 4000,
            lazyEffect: true
        });
     }//end if


      var header = jQuery(".navbar-mksystem");
      jQuery(document).scroll(function(e) {
        /*
          if(jQuery(this).scrollTop() > 70) {
              header.css({"padding-bottom" : "15px", "position" : "fixed", "top" : "-60px", "width" : "100%", "z-index" : "1000"});
              jQuery("#logo").find('img').css({"margin-top" : "35px", "max-width" : "180px"});
          } else {
              header.css({"padding-bottom" : "30px", "position": "relative", "top" : "auto"});
              jQuery("#logo").find('img').removeAttr('style');
          }
        */
      });

    });
  </script>
<?php
}
add_action('wp_footer','mksystem_header_scripts', 100);


/**
 * Mk system custom header
 */
function mksystem_custom_header_setup() {
  add_theme_support( 'custom-header', apply_filters( 'mksystem_custom_header_args', array(
    'width'                  => 320,
    'height'                 => 90
  ) ) );
}
add_action( 'after_setup_theme', 'mksystem_custom_header_setup' );



/**
 * registrando menu secundario
 */
register_nav_menus(array(
  'secondary' => __('Menu del pie de página', 'mksystem')
));


/**
 * header menu (should you choose to use one)
 */
function mksystem_header_menu() {
  // display the WordPress Custom Menu if available
  wp_nav_menu(array(
    'menu'              => 'primary',
    'theme_location'    => 'primary',
    'depth'             => 2,
    'container'         => 'div',
    'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
    'menu_class'        => 'nav navbar-nav',
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'walker'            => new wp_bootstrap_navwalker()
  ));
} /* end header menu */



/**
 * secondary menu (should you choose to use one) - menu footer
 */
function mksystem_secondary_menu() {
  // display the WordPress Custom Menu if available
  wp_nav_menu(array(
    'menu'              => 'secondary',
    'theme_location'    => 'secondary',
    'menu_class'        => 'nav footer-nav clearfix',
    'depth'             => 2,
    'container'         => '',
    'container_class'   => ''
  ));
} /* end header menu */


/**
 * links - categories
 */
function mksystem_footer_links() {
  // display the WordPress Custom Menu if available
  wp_nav_menu(array(
    'menu'              => 'footer-links',
    'theme_location'    => 'footer-links',
    'depth'             => 2,
    'container'         => '',
    'container_class'   => '',
    'menu_class'        => 'nav footer-nav clearfix',
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'walker'            => new wp_bootstrap_navwalker()
  ));
} /* end header menu */



/**
 * custom links header
 */
function mksystem_custom_links(){
  $html = '';
  $html .= '<ul class="nav navbar-nav nav-header text-center">';
  $html .= '<li class="menu-item menu-item-title"><label>Encuéntranos: </label></li>';

  if(get_theme_mod('social_facebook') != ''){
    $html .= '<li class="menu-item"><a class="social-icon" target="_blank" href="'.get_theme_mod('social_facebook').'"><i aria-hidden="true" class="fa fa-facebook fa-lg"></i></a></li>';  
  }
  if(get_theme_mod('social_twitter') != ''){
    $html .= '<li class="menu-item"><a class="social-icon" target="_blank" href="'.get_theme_mod('social_facebook').'"><i aria-hidden="true" class="fa fa-twitter fa-lg"></i></a></li>';
  }
  if(get_theme_mod('social_instagram') != ''){
    $html .= '<li class="menu-item"><a class="social-icon" target="_blank" href="'.get_theme_mod('social_facebook').'"><i aria-hidden="true" class="fa fa-instagram fa-lg"></i></a></li>';
  }
  if(get_theme_mod('social_linkedin') != ''){
    $html .= '<li class="menu-item"><a class="social-icon" target="_blank" href="'.get_theme_mod('social_facebook').'"><i aria-hidden="true" class="fa fa-linkedin fa-lg"></i></a></li>';
  }
  if(get_theme_mod('social_youtube') != ''){
    $html .= '<li class="menu-item"><a class="social-icon" target="_blank" href="'.get_theme_mod('social_facebook').'"><i aria-hidden="true" class="fa fa-youtube fa-lg"></i></a></li>';
  }
  if(get_theme_mod('social_vimeo') != ''){
    $html .= '<li class="menu-item"><a class="social-icon" target="_blank" href="'.get_theme_mod('social_facebook').'"><i aria-hidden="true" class="fa fa-vimeo fa-lg"></i></a></li>';
  }
  $html .= '</ul>';

  echo $html;
}


/**
 * mksystem cart
 */
function mksystem_cart(){
  $html = '';
  $html .= '<ul class="nav navbar-nav nav-header text-center">';
  $html .= '<li class="menu-item"><a href="'.esc_url( home_url( '/shop' ) ).'">COMPRAR: <i class="fa fa-shopping-cart"></i></a></li>';
  $html .= '</ul>';

  echo $html;
}


/**
 * Get all categories
 */
function mksystem_product_categories($thumb = ''){

  $taxonomy     = 'product_cat';
  $orderby      = 'name';  
  $show_count   = 1;      // 1 for yes, 0 for no
  $pad_counts   = 1;      // 1 for yes, 0 for no
  $hierarchical = 1;      // 1 for yes, 0 for no  
  $title        = '';  
  $empty        = 0;

  $args = array(
         'taxonomy'     => $taxonomy,
         'child_of'     => 0,
         'orderby'      => $orderby,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
         'title_li'     => $title,
         'hide_empty'   => $empty
  );
  $all_categories = get_categories( $args );

  $category_products = array();
  $subcategory = array();

  foreach ($all_categories as $cat) {
    if($cat->category_parent == 0) {

      $cat_thumb_id = get_woocommerce_term_meta($cat->term_id, 'thumbnail_id', true);
      if($thumb === ''){
        $cat_thumb_url = wp_get_attachment_thumb_url($cat_thumb_id);
      }else{
        $cat_thumb_url_ = wp_get_attachment_image_src($cat_thumb_id, 'catalog');
        $cat_thumb_url = $cat_thumb_url_[0];
      }

      $term_link = get_term_link($cat, 'product_cat');

      $category_products[$cat->term_id]['id'] = $cat->term_id;
      $category_products[$cat->term_id]['name'] = $cat->name;
      $category_products[$cat->term_id]['slug'] = $cat->slug;
      $category_products[$cat->term_id]['taxonomy'] = $cat->taxonomy;
      $category_products[$cat->term_id]['count'] = $cat->count;
      $category_products[$cat->term_id]['description'] = $cat->description;

      $category_products[$cat->term_id]['thumb_url'] = $cat_thumb_url;
      $category_products[$cat->term_id]['term_link'] = $term_link;

      $category_products[$cat->term_id]['childs'] = array();

      $category_id = $cat->term_id;
      $args2 = array(
              'taxonomy'     => $taxonomy,
              'child_of'     => 0,
              'parent'       => $category_id,
              'orderby'      => $orderby,
              'show_count'   => $show_count,
              'pad_counts'   => $pad_counts,
              'hierarchical' => $hierarchical,
              'title_li'     => $title,
              'hide_empty'   => $empty
      );
      $subcategoryx = get_categories( $args2 );
      $subcategory = array_merge($subcategory, $subcategoryx);

    }//end if
  }//end foreach

  if(count($subcategory) > 0){
    $i = 0;
    foreach ($subcategory as $subcat) {

      $cat_thumb_id = get_woocommerce_term_meta($subcat->term_id, 'thumbnail_id', true);
      $cat_thumb_url = wp_get_attachment_thumb_url($cat_thumb_id);
      $term_link = get_term_link($subcat, 'product_cat');

      $category_products[$subcat->parent]['childs'][$i]['id'] = $subcat->term_id;
      $category_products[$subcat->parent]['childs'][$i]['name'] = $subcat->name;
      $category_products[$subcat->parent]['childs'][$i]['slug'] = $subcat->slug;
      $category_products[$subcat->parent]['childs'][$i]['taxonomy'] = $subcat->taxonomy;
      $category_products[$subcat->parent]['childs'][$i]['count'] = $subcat->count;
      $category_products[$subcat->parent]['childs'][$i]['description'] = $subcat->description;

      $category_products[$subcat->parent]['childs'][$i]['thumb_url'] = $cat_thumb_url;
      $category_products[$subcat->parent]['childs'][$i]['term_link'] = $term_link;

      $i++;
    }//end foreach
  }//end if
  
  return $category_products;
}

/**
 * Get all categories carousel top
 */
function mksystem_categories_carousel_top(){
  $categories_html = '';
  $category_products = mksystem_product_categories();
  if(count($category_products) > 0){
    $items = 0;
    $categories_html .= '<div id="owl-carousel-top" class="owl-carousel-categories text-center">';
    foreach ($category_products as $category) {
      $thumb_url = ($category['thumb_url'] == '') ? get_template_directory_child().'/inc/image/categorias/default_150x150.jpg' : $category['thumb_url'];
      if($items <= ((count($category_products)/2)-1)){//
        $categories_html .= '<div class="item"><a href="'.$category['term_link'].'" title="'.$category['name'].'"><img src="'.$thumb_url.'"></a></div>';
      }//end if
      $items++;
    }//end foreach
    $categories_html .= '</div>';
  }//end if

  echo $categories_html;
}

/**
 * Get all categories carousel top
 */
function mksystem_categories_carousel_bottom(){
  $categories_html = '';
  $category_products = mksystem_product_categories();
  if(count($category_products) > 0){
    $items = 0;
    $categories_html .= '<div id="owl-carousel-bottom" class="owl-carousel-categories text-center">';
    foreach ($category_products as $category) {
      $thumb_url = ($category['thumb_url'] == '') ? get_template_directory_child().'/inc/image/categorias/default_150x150.jpg' : $category['thumb_url'];
      if($items > ((count($category_products)/2)-1)){
        $categories_html .= '<div class="item"><a href="'.$category['term_link'].'" title="'.$category['name'].'"><img src="'.$thumb_url.'"></a></div>';
      }//end if
      $items++;
    }//end foreach
    $categories_html .= '</div>';
  }//end if

  echo $categories_html;
}


/**
 * Get all categories carousel top
 */
function mksystem_categories_page(){
  $categories_html = '';
  $category_products = mksystem_product_categories('catalog');
  if(count($category_products) > 0){
    $items = 0;
    $categories_html .= '<div class="categories-page text-center">';
    foreach ($category_products as $category) {
      $thumb_url = ($category['thumb_url'] == '') ? get_template_directory_child().'/inc/image/categorias/default_400x40s0.jpg' : $category['thumb_url'];
      // if($items > ((count($category_products)/2)-1)){
        $categories_html .= '<div class="col-md-3 col-sm-6 col-xs-12">';
        $categories_html .= '<a href="'.$category['term_link'].'" title="'.$category['name'].'">';
        $categories_html .= '<img src="'.$thumb_url.'">';
        $categories_html .= '</a>';
        $categories_html .= '<h5 class="text-center"><a href="'.$category['term_link'].'" >'.$category['name'].'</a></h5>';
        $categories_html .= '</div>';
      // }//end if

        $items++;
        if($items%4 == 0){
          $categories_html .= '<div class="clear"></div>';
        }
    }//end foreach
    $categories_html .= '</div>';
  }//end if

  echo $categories_html;
}


function mksystem_footer_info() {
?>
  <div class="copy-right">&copy; <?php echo bloginfo('name');?> <?php echo date_i18n('Y'); ?>
    <?php echo esc_html__(" - Desarrollado por","mksystem");?> 
    <a href="<?php echo esc_url("javascript:;","mksystem");?>" target="_blank"><?php echo esc_html__("MK System","mksystem");?></a> 
  </div>

<?php
}



// ********* Get all products and variations and sort alphbetically, return in array (title, sku, id)*******
function get_woocommerce_product_list() {
  $full_product_list = array();
  $loop = new WP_Query( array( 'post_type' => array('product', 'product_variation'), 'posts_per_page' => -1 ) );
  $i = 1;
  $html = '';
  if($loop->have_posts()){
    ?>
    <div class="owl-carousel-productos">
  <?php
  }
  while ( $loop->have_posts() ) : $loop->the_post();

    $theid = get_the_ID();
    $product = new WC_Product($theid);

    // echo "->".$product->get_id()."<br>";
    // echo "->".$product->get_permalink()."<br>";
    // echo "->".$product->get_title()."<br>";
    // echo $product->get_image('shop_thumbnail');
    // echo $product->get_image('shop_catalog');
    // echo $product->get_image('shop_single');

    if($i == 1){
    ?>
      <div class="products-frontpage item">
    <?php
    }//end if

    ?>
        <div class="col-md-3">
          <a title="<?= $product->get_title(); ?>" href="<?= $product->get_permalink(); ?>">
            <?= $product->get_image('shop_single'); ?>
          </a>
        </div>
    <?php

    if($i == 8){
    ?>
      </div>
    <?php
    }//end if

    if($i == 8){
      $i = 0;
    }//end if

    $i++;
  endwhile; wp_reset_query();

  if($i > 1 && $i < 8){
    ?>
    </div>
  <?php
  }

  if($loop->have_posts()){
    ?>
    </div>
  <?php
  }

}



// ********* Get all products and variations and sort alphbetically, return in array (title, sku, id)*******
function get_woocommerce_product_list2() {
  $full_product_list = array();
  $loop = new WP_Query( array( 'post_type' => array('product', 'product_variation'), 'posts_per_page' => -1 ) );
  $i = 1;
  $html = '';
  if($loop->have_posts()){
    ?>
    <div class="owl-carousel-productos-2">
  <?php
  }
  while ( $loop->have_posts() ) : $loop->the_post();

    $theid = get_the_ID();
    $product = new WC_Product($theid);

    // echo "->".$product->get_id()."<br>";
    // echo "->".$product->get_permalink()."<br>";
    // echo "->".$product->get_title()."<br>";
    // echo $product->get_image('shop_thumbnail');
    // echo $product->get_image('shop_catalog');
    // echo $product->get_image('shop_single');

    if($i == 1){
    ?>
      <!--<div class="products-frontpage item">-->
    <?php
    }//end if

    ?>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <a title="<?= $product->get_title(); ?>" href="<?= $product->get_permalink(); ?>">
            <?= $product->get_image('shop_single'); ?>
          </a>
        </div>
    <?php

    if($i == 8){
    ?>
      <!--</div>-->
    <?php
    }//end if

    if($i == 8){
      $i = 0;
    }//end if

    if($i%4 == 0){
      ?>
      <div class="clear"><br></div>
    <?php
    }

    $i++;
  endwhile; wp_reset_query();

  if($i > 1 && $i < 8){
    ?>
    </div>
  <?php
  }

  if($loop->have_posts()){
    ?>
    </div>
  <?php
  }

}



/**
 * Call for action button & text area
 */
function mksystem_call_for_action() {
  // if ( is_front_page() && of_get_option('w2f_cfa_text')!=''){
    echo '<div class="cfa">';
      echo '<div class="container">';
        echo '<div class="col-md-5">';
          echo '<span class="cfa-text"><i aria-hidden="true" class="fa fa-envelope"></i> &nbsp;&nbsp;Suscribase para novedades</span>';
          echo '</div>';
          echo '<div class="col-md-7">';
          echo do_shortcode('[ssm_form id="25"]');
          echo '</div>';
      echo '</div>';
    echo '</div>';
  // }
}



/*
*
* Removiendo el related products de su posición inicial
*
*/
function woocommerce_after_single_product__datatabs(){
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
}
add_action('woocommerce_after_single_product_summary', 'woocommerce_after_single_product__datatabs');



/*
*
* Agregando solo el related products
*
*/
function woocommerce_output_related_products() {
  $args = array(
    'posts_per_page'   => 4,
    'columns'       => 4,
    'orderby'       => 'rand'
  );
  woocommerce_related_products( apply_filters( 'woocommerce_output_related_products_args', $args ) );
}




// ********* Get all products and variations and sort alphbetically, return in array (title, sku, id)*******
function get_woocommerce_product_list_toplast() {
  $full_product_list = array();
  $loop = new WP_Query( array( 'post_type' => array('product', 'product_variation'), 'posts_per_page' => -1 ) );
  $i = 1;
  $html = '';
  if($loop->have_posts()){
    ?>
    <div id="owl-carousel-top" class="owl-carousel-categories text-center">
  <?php
  }

  $total = count($loop->posts);
  while ( $loop->have_posts() ) : $loop->the_post();

    if($i <= ($total/2)){
      $theid = get_the_ID();
      $product = new WC_Product($theid);

    // echo "->".$product->get_id()."<br>";
    // echo "->".$product->get_permalink()."<br>";
    // echo "->".$product->get_title()."<br>";
    // echo $product->get_image('shop_thumbnail');
    // echo $product->get_image('shop_catalog');
    // echo $product->get_image('shop_single');

    ?>

        <div class="item">
          <a title="<?= $product->get_title(); ?>" href="<?= $product->get_permalink(); ?>">
            <?= $product->get_image('shop_single'); ?>
          </a>
        </div>

    <?php
    }//end if
    $i++;
  endwhile; wp_reset_query();

  if($loop->have_posts()){
    ?>
    </div>
  <?php
  }

}
function get_woocommerce_product_list_bottomlast() {
  $full_product_list = array();
  $loop = new WP_Query( array( 'post_type' => array('product', 'product_variation'), 'posts_per_page' => -1 ) );
  $i = 1;
  $html = '';
  if($loop->have_posts()){
    ?>
    <div id="owl-carousel-bottom" class="owl-carousel-categories text-center">
  <?php
  }

  $total = count($loop->posts);
  while ( $loop->have_posts() ) : $loop->the_post();

    if($i > ($total/2)){
      $theid = get_the_ID();
      $product = new WC_Product($theid);

    // echo "->".$product->get_id()."<br>";
    // echo "->".$product->get_permalink()."<br>";
    // echo "->".$product->get_title()."<br>";
    // echo $product->get_image('shop_thumbnail');
    // echo $product->get_image('shop_catalog');
    // echo $product->get_image('shop_single');

    ?>

        <div class="item">
          <a title="<?= $product->get_title(); ?>" href="<?= $product->get_permalink(); ?>">
            <?= $product->get_image('shop_single'); ?>
          </a>
        </div>

    <?php
    }//end if
    $i++;
  endwhile; wp_reset_query();



  if($loop->have_posts()){
    ?>
    </div>
  <?php
  }

}


/**
 * Get all categories init
 */
function mksystem_categories_carousel_initlast(){
  $categories_html = '';
  $category_products = mksystem_product_categories('catalog');
  if(count($category_products) > 0){
    $items = 0;
    $i = 1;
    $categories_html .= '<div class="owl-carousel-productos">';
    foreach ($category_products as $category) {
      $thumb_url = ($category['thumb_url'] == '') ? get_template_directory_child().'/inc/image/categorias/default_400x400.jpg' : $category['thumb_url'];

      if($i == 1){
        $categories_html .= '<div class="products-frontpage item">';
      }//end if

      // $href_link = ($category['description'] !== '') ? $category['description'] : $category['term_link'];
      $href_link  = $category['term_link'];
      // $target_    = ($category['description'] !== '') ? 'target="_blank"' : '';
      $target_    = '';
      // if($items <= ((count($category_products)/2)-1)){//
      $categories_html .= '<div class="col-md-3"><a '.$target_.' href="'.$href_link.'" title="'.$category['name'].'"><img src="'.$thumb_url.'"></a></div>';
      // }//end if

      if($i == 8){
        $categories_html .= '</div>';
        $i = 0;
      }
      $i++;
      $items++;
    }//end foreach
    $categories_html .= '</div>';
  }//end if

  if($i > 1 && $i < 8){
    $categories_html .= '</div>';
  }
  echo $categories_html;
}

function mksystem_categories_carousel_endlast(){
  $categories_html = '';
  $category_products = mksystem_product_categories('catalog');
  if(count($category_products) > 0){
    $items = 0;
    $i = 1;
    $categories_html .= '<div class="owl-carousel-productos-2">';
    foreach ($category_products as $category) {
      $thumb_url = ($category['thumb_url'] == '') ? get_template_directory_child().'/inc/image/categorias/default_400x400.jpg' : $category['thumb_url'];

      if($i == 1){
        // $categories_html .= '<div class="products-frontpage item">';
      }//end if

      // $href_link = ($category['description'] !== '') ? $category['description'] : $category['term_link'];
      $href_link  = $category['term_link'];
      // $target_    = ($category['description'] !== '') ? 'target="_blank"' : '';
      $target_    = '';
      // if($items <= ((count($category_products)/2)-1)){//
      $categories_html .= '<div class="col-md-3 col-sm-4 col-xs-6"><a '.$target_.' href="'.$href_link.'" title="'.$category['name'].'"><img src="'.$thumb_url.'"></a></div>';
      // }//end if

      if($i == 8){
        // $categories_html .= '</div>';
        $i = 0;
      }
      if($i%4 == 0){
        //$categories_html .= '<div class="clear"><br></div>';
      }
      $i++;
      $items++;
    }//end foreach
    $categories_html .= '</div>';
  }//end if

  echo $categories_html;
}