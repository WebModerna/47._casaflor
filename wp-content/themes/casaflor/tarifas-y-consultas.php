<?php
/* page.php
* @package WordPress
* @subpackage casaflor
* @since casaflor 1.0
* Template Name: Formulario de Contacto
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
		<div class="home_text space-bot custom-post-type gradient">
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
				<h3><i class="icon-quotes-left"> </i><?php $my_data = get_post_meta( $post->ID, '_my_meta_value_key', true ); echo $my_data;?></h3>
			<?php } else { ?>
				<h2><i class="icon-quotes-left"> </i><?php the_title();?></h2>
				<h3><?php $my_data = get_post_meta( $post->ID, '_my_meta_value_key', true ); echo $my_data;?></h3>
			<?php };?>
				
				<div class="texto mitad">
					<?php the_content();?>
				</div>
				<div class="texto mitad contacto hform">
					<?php echo do_shortcode('[contact-form-7 id="123" title="Formulario de contacto"]');?>
				</div>
			</article>
		<?php endwhile; else: ?>
			<article class="contenido text-left">
				<blockquote><?php _e('No hay nada.', 'casaflor');?></blockquote>
			</article>
		<?php endif;?>
		</div>
	</section>
<?php get_sidebar(); get_footer();?>