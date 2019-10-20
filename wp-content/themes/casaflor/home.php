<?php
/* home.php
* @package WordPress
* @subpackage casaflor
* @since casaflor 1.0
* Template Name: Home
*/
get_header();?>
<?php
// WP_Query arguments
$args = array (
	'pagename' => 'home',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
?>

<?php if(wpmd_is_phone()) { ?>
	<!-- Un lindo y bonito slideshow para deleitar -->
	<div id="slideshow" class="cycle-slideshow slideshow wrapper"
		data-cycle-next=".next"
		data-cycle-prev=".back"
		data-cycle-timeout="6000"
		data-cycle-speed="1000"
		>
<?php } else { ?>
	<div id="slideshow" class="cycle-slideshow slideshow wrapper"
		data-cycle-caption="#alt-caption"
		data-cycle-caption-template="{{alt}}"
		data-cycle-next=".next"
		data-cycle-prev=".back"
		data-cycle-pause-on-hover="true"
		data-cycle-timeout="4500"
		data-cycle-speed="500"
		data-cycle-manual-speed="5000"
		>
<?php };?>
		<?php //Móviles
				if( wpmd_is_phone() )
				{
					$attachID = ( get_post_meta( $post->ID, 'custom_imagenrepetible', true) );
					if ($attachID !== '')
					{
						foreach ($attachID as $item)
						{
							$imagen = wp_get_attachment_image_src($item,'custom-thumb-300-120');
							$alt = get_post_meta($item, '_wp_attachment_image_alt', true);
							$descripcion = get_post_field('post_content', $item);
							echo '<img class="item" src="' . $imagen[0] . '"';
							// if (count($alt))
							// {
								echo ' alt="' . $alt . '"';
							// }
							echo ' />';
						};
					};
				};
			
				//Desktop.
				if(wpmd_is_notphone())
				{
					$attachID = (get_post_meta( $post->ID, 'custom_imagenrepetible',true));
					if ($attachID !== '')
					{
						foreach ($attachID as $item)
						{
							$imagen = wp_get_attachment_image_src($item,'custom-thumb-1200-300');
							$alt = get_post_meta($item, '_wp_attachment_image_alt', true);
							$descripcion = get_post_field('post_content', $item);
							echo '<img src="' . $imagen[0] . '"';
							// if (count($alt))
							// {
							echo ' alt="' . $alt . '"';
							// }
							echo ' />';
						};
					};
				};?>

		<div class="wrapper">
			<div id="alt-caption"></div>
			<div class="navegacion">
				<a title="←" class="back" href="#">‹</a>
				<a title="→" class="next" href="#">›</a>
			</div>
		</div>
	</div><!-- #slideshow -->
</header>

<div class="wrapper plateado">
	<section class="seccion_gris">
		<div class="home_text space-bot">
			<article class="fjord italica text-left">
				<h2 class="oculto"><?php the_title();?></h2>
				<figure id="logodelahome" class="figure">
					<?php
						if( has_post_thumbnail() ) {
							the_post_thumbnail('custom-thumb-600-334');
						} else {
							echo '<img src="'.get_stylesheet_directory_uri().'/img/big-1.jpg" alt="'.__('Sin imagen', 'casaflor').'" />';
						};
					?>
				</figure>
				<?php the_content();?>
			</article>
		</div>

<?php }
} else {
	// no posts found
}
// Restore original Post Data
wp_reset_query();
wp_reset_postdata();?>

		<div id="home_col" class="wrapper space-top display_flex">
			
		<?php // WP_Query arguments
			$args = array (
				'post_parent'            => '2',
				'post_type'				=> 'page',
			);

			// The Query
			$query = new WP_Query( $args );

			// The Loop
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post(); ?>
		
		<!-- Un listado de columnas que solo se muestra en la home -->
			<article class="columnas-4 gradient">
				<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
				<figure class="figure">
					<a href="<?php the_permalink();?>">
						<?php
							if( has_post_thumbnail() ) {
								the_post_thumbnail('custom-thumb-600-334');
							} else {
								echo '<img src="'.get_stylesheet_directory_uri().'/img/2.jpg" alt="'.__('Sin imagen', 'casaflor').'" />';
							};
						?>
					</a>
					<!-- <figcaption>
						<?php //$my_data = get_post_meta( $post->ID, '_my_meta_value_key', true ); echo $my_data;?>
					</figcaption> -->
				</figure>
				<?php the_excerpt();?>
				<!-- <a class="ver_mas boton small" href="<?php the_permalink();?>">Ver más</a> -->
			</article>
		<?php }
			} else {
				// no posts found
			}

			// Restore original Post Data
			wp_reset_query();
			wp_reset_postdata(); ?>

		</div>
	</section>
<?php get_sidebar(); get_footer();?>