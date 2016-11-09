<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package dazzling
 */

get_header(); ?>	

        <div class="col-md-12">
            <div class="section-title text-center">
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <span><hr></span>
                </div>
                <h2 class="col-md-4 col-sm-4 col-xs-4">Productos</h2>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <span><hr></span>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
            <?php //mksystem_categories_carousel_top(); ?>
            <?php // mksystem_categories_carousel_bottom(); ?>
            <?php get_woocommerce_product_list_toplast(); ?>
            <?php get_woocommerce_product_list_bottomlast(); ?>
        </div><!-- #primary -->
        

        <div class="col-md-12">
            <div class="section-title text-center">
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <span><hr></span>
                </div>
                <h2 class="col-md-4 col-sm-4 col-xs-4">Tiendas</h2>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <span><hr></span>
                </div>
            </div>
        </div>
       <!---->
        <div class="col-md-12" style="padding: 0;" >
            <?php // get_woocommerce_product_list(); ?>
            <?php // get_woocommerce_product_list2(); ?>
            <?php mksystem_categories_carousel_initlast(); ?>
            <?php mksystem_categories_carousel_endlast(); ?>
        </div>

<!--        <div class="col-md-12 mksystem-clearfix">
            <div class="clear">
                <br>
            </div>
        </div>-->
        
         <div class="col-md-12">
            <div class="section-title text-center">
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <span><hr></span>
                </div>
                <h2 class="col-md-4 col-sm-4 col-xs-4">Fachada</h2>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <span><hr></span>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-sm-5 col-xs-12">
            <?php //if( get_theme_mod('aboutus-page1',false) ) { ?>
            
           
            
            <?php 
                $aboutusquery1 = new wp_query('page_id=99');
                if( $aboutusquery1->have_posts() ) {   
                    while( $aboutusquery1->have_posts() ) { 
                        $aboutusquery1->the_post();
            ?>
            
      
            
            <?php
                        the_content();
                    }//end while
                }//end if
            ?>
            <?php //} ?>
        </div>
        <div class="col-md-7 col-sm-7 col-xs-12">
<!--             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d487.7248070129628!2d-77.02572674433324!3d-12.057383792513283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8bb99e2a257%3A0xb54d58529039b79f!2zSmlyw7NuIFBhcnVybywgTGltYSwgUGVyw7o!5e0!3m2!1ses!2ses!4v1472138471590" width="1900" height="500" frameborder="0" style="border:0" allowfullscreen></iframe> -->
            <?= get_theme_mod('google_frame'); ?>
        </div>
        
<?php //get_sidebar(); ?>
<?php get_footer(); ?>