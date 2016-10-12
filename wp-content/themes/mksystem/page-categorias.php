<?php
/**
 * Template Name: Categoría de productos
 *
 * Solo para mostrar el listado de categorías
 *
 * @package mksystem
 */

get_header(); ?>

    <div class="col-md-12">
        <div class="section-title text-center">
            <h2 class="">Categorías</h2>
        </div>
    </div>
	<div id="primary" class="content-area col-sm-12 col-md-12">
		<main id="main" class="site-main" role="main">

			<?php mksystem_categories_page(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
    <div class="col-md-12">
        <br><br><br>
    </div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
