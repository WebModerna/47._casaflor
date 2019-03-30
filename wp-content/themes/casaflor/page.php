<?php
/* page.php
* @package WordPress
* @subpackage casaflor
* @since casaflor 1.0
* Template Name: Productos de Alojamiento
*/
get_header();
//El loop de WordPress
	if (have_posts()) : while (have_posts()) : the_post(); get_page($page_id); $page_data = get_page($page_id);?>
<!-- Un lindo y bonito slideshow para deleitar -->
	<div id="slideshow" class="cycle-slideshow slideshow wrapper" 
		data-cycle-caption="#alt-caption"
	    data-cycle-caption-template="{{alt}}">

	<?php if(wpmd_is_notphone()) { ?>
		<?php
			if( has_post_thumbnail() ) {
				the_post_thumbnail('custom-thumb-1200-300');
			} else {
				echo '<img src="'.get_stylesheet_directory_uri().'/img/2.jpg" alt="'.__('Sin imagen', 'casaflor').'" />';
			};
		?>
	<?php } else { ?>
		<?php
			if( has_post_thumbnail() ) {
				the_post_thumbnail('custom-thumb-930-250');
			} else {
				echo '<img src="'.get_stylesheet_directory_uri().'/img/2.jpg" alt="'.__('Sin imagen', 'casaflor').'" />';
			};
		?>
	<?php };?>

		<div id="alt-caption"></div>			
	</div><!-- #slideshow -->
</header>

<div class="wrapper plateado">
	<section class="seccion_gris">
		<div class="home_text space-bot custom-post-type">
			<div class="second_nav">
				<h2><?php the_title();?></h2>

				<?php $default = array(
				'container'			=>			false,
				'depth'				=>				1,
				'menu'				=>	 'footer_nav',
				'theme_location'	=>	 'footer_nav',
				'items_wrap'		=>	 '<ul>%3$s</ul>'
			);		
			wp_nav_menu($default);?>
				
			</div>

			<article class="contenido text-left">
			<?php if(wpmd_is_notphone()) { ?>
				<h3><?php $my_data = get_post_meta( $post->ID, '_my_meta_value_key', true ); echo $my_data;?></h3>
			<?php } else { ?>
				<h2><?php the_title();?></h2>
				<h3><?php $my_data = get_post_meta( $post->ID, '_my_meta_value_key', true ); echo $my_data;?></h3>
			<?php };?>
				<div class="galeria">

					<?php if(wpmd_is_notphone()) { ?>
						<?php 
						//Listado de imágenes
							$attachID = (get_post_meta( $post->ID, 'custom_imagenrepetible', true));
							$contador = 0;
							foreach ($attachID as $item) {
								$imagen = wp_get_attachment_image_src($item,'custom-thumb-300-300');
								$imagen_big = wp_get_attachment_image_src($item, 'custom-thumb-930-x');
								$alt = get_post_meta($item, '_wp_attachment_image_alt', true);
								$descripcion = get_post_field('post_content', $item);
								if ($imagen[0]!='') {
									echo '<a class="figure fancybox" data-fancybox-group="button" title="'.$alt.'" href="'.$imagen_big[0].'"><img src="'.$imagen[0].'" alt="'.$alt.'" /></a>';
									if (count($alt)) {};
								
							};};?>
					<?php } else { ?>
						<?php 
							//Listado de imágenes
							$attachID = (get_post_meta( $post->ID, 'custom_imagenrepetible', true));
							$contador = 0;
							foreach ($attachID as $item) {
								$imagen = wp_get_attachment_image_src($item,'custom-thumb-600-x');
							
								$alt = get_post_meta($item, '_wp_attachment_image_alt', true);
								$descripcion = get_post_field('post_content', $item);
								if ($imagen[0]!='') {
									echo '<figure class="figure mobile"><img src="'.$imagen[0].'" alt="'.$alt.'" /></figure>';
									if (count($alt)) {};
								};
							};?>
					<?php };?>

				</div>
				<div class="texto columnas-2">
					<?php the_content();?>
				</div>
			</article>
		</div>
	<?php endwhile; endif;?>
	</section>
	
<?php get_sidebar(); get_footer();?>