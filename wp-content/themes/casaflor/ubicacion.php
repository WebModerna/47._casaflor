<?php
/* ubicacion.php
* @package WordPress
* @subpackage casaflor
* @since casaflor 1.0
* Template Name: Ubicación
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
				
				<div class="texto">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2691.7884353941254!2d-65.02568600000002!3d-31.700300999999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzHCsDQyJzAxLjEiUyA2NcKwMDEnMzIuNSJX!5e1!3m2!1ses!2sar!4v1414965804549" width="100%" height="350" frameborder="0" style="border:0"></iframe>
				</div>
				<div class="texto mitad">
					<?php the_content();?>
				</div>
				<div class="texto mitad">
					<?php if(wpmd_is_phone()) { //es teléfono ?>
	
						<?php
							$attachID = (get_post_meta( $post->ID, 'custom_imagenrepetible',true));
							if ($attachID !== '')
							{
								foreach ($attachID as $item)
								{
									$imagen = wp_get_attachment_image_src($item,'custom-thumb-600-x');
									$imagen_big = wp_get_attachment_image_src($item,'full');
									$alt = get_post_meta($item, '_wp_attachment_image_alt', true);
									$descripcion = get_post_field('post_content', $item);
									echo '<figure class="figure"><img src="' . $imagen[0] . '"';
									if (count($alt))
									{
										echo ' alt="' . $alt . '"';
									};
									echo ' /><a title="Zoom" href="'.$imagen_big[0].'"><figcaption class="boton magenta">
										<i class="icon-zoomin"> </i>
									</figcaption></a>
								</figure>';
								};
							};
						?>

					<?php } else { //NO es teléfono ?>
						
						<?php
							$attachID = (get_post_meta( $post->ID, 'custom_imagenrepetible',true));
							if ($attachID !== '')
							{
								foreach ($attachID as $item)
								{
									$imagen = wp_get_attachment_image_src($item,'custom-thumb-600-x');
									$imagen_big = wp_get_attachment_image_src($item,'full');
									$alt = get_post_meta($item, '_wp_attachment_image_alt', true);
									$descripcion = get_post_field('post_content', $item);
									echo '<figure class="figure"><img src="' . $imagen[0] . '"';
									if (count($alt))
									{
										echo ' alt="' . $alt . '"';
									};
									echo ' /><a class="fancybox" data-fancybox-group="button" title="Zoom" href="'.$imagen_big[0].'">
									<figcaption class="boton magenta">
										<i class="icon-zoomin"> </i>
									</figcaption></a>
								</figure>';
								};
							};?>
					<?php };?>
				</div>
			</article>
		</div>
	<?php endwhile; endif;?>
	</section>
	
<?php get_sidebar(); get_footer();?>