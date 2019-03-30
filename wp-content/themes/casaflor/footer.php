<?php 
// Variables a utilizar
$telefono_celular		=	of_get_option( 'telefono_celular', '' );
$telefono_fijo			=	of_get_option( 'telefono_fijo', '');
$facebook_contact		=	of_get_option( 'facebook_contact', '' );
$google_plus_contact	=	of_get_option( 'google_plus_contact', '' );
$add_this_script		=	of_get_option( 'add_this_script', '');
$google_analitycs		=	of_get_option( 'google_analitycs', '');
$direccion_web			=	of_get_option( 'direccion_web', '');
$email_contact			=	of_get_option( 'email_contact', '');
$instagram_contact		=	of_get_option( 'instagram_contact', '');
$twitter_contact		=	of_get_option( 'twitter_contact', '');
?>


	<footer>
		<div>
			<?php if( $direccion_web )
			{
				echo '<p>' . $direccion_web . '</p>';
			}
			if( $telefono_fijo && $telefono_celular )
			{
				echo '<p><i class="icon-phone"></i> ' . $telefono_fijo;
				echo ' | ';
				echo '<i class="icon-mobile"></i> ' . $telefono_celular . '</p>';

			}
			?>
		</div>
		<div>
			<p class="redes-sociales">
			<?php
				// Correo electrónico
				if ( $email_contact )
				{
					echo '<a target="_blank" href="mailto:' . $email_contact . '" title="' . $email_contact . '"><i class="icon-mail"> </i></a>';
				};

				// FACEBOOK
				if ( $facebook_contact )
				{
					echo '<a target="_blank" href="//' . $facebook_contact . '" title="Facebook"><i class="icon-facebook"> </i></a>';
				};

				// WhatsApp
				if ( $telefono_celular )
				{
					if ( wpmd_is_device() )
					{
						echo '<a target="_blank" href="whatsapp://send?phone=' . $telefono_celular . '&text=Hola ' . get_bloginfo("name") . '.  " title="WhatsApp" rel="nofollow"><img alt="WhatsApp" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAAAnCAMAAAC7faEHAAAAA3NCSVQICAjb4U/gAAAC9FBMVEX////1fPfzcPXxY/TwXvTvV/LrSfDkN+zgMOrcLOjOIuHNIeC5F9ayGNKrEs2bDcEpJRtoA4n2gvj0d/fzcPXxY/TwXvTuUvLrSfDiM+vgMOrcLOjFHd2yGNKrEs35o/r2gvj1fPfzcPXxY/TvV/LuUvLOIuHNIeD7uPz6qfv5o/r4lPn1fPfkN+z8w/z/zP/8xv38w/z8vvz5nfr4lPn2gvjzcPXxY/T52fr90v39z/38xv38vvz6svv6qfv90v3/zP/6qfv52fr6qfv+7v/75vv64/r52fr9z/3+7v/97P375vv90v38xv3/9///9P/+7v/97P375vv52fr90v3/9///9P/+7v/97P375vv64/r52fr90v3/+///9///9P/+7v/75vv/////+///9///9P/+7v/87vz97P376fv75vv64/r44/f53Pn33Pf52fr32ff01fT1z/b1yffzxvTvu/Dlvubmu+jiu+TvsvHfsuPpqezjqefnpuvco+LKqdPjneninejKo9TUmt7dl+XJmtS8ncW/msnOlNq8l8e2mr7Tjt6ul7XBh9Goka6lkaewib20h8OijqXIfNm+fNGbjJm4f8mfh6GnfLebgpuffKeSgpCmd7erdcG0cMqOf4uLfIaKeoOtaceYc6KTdZmNdYuGdYGgabKIc4aEc36Fc4GUaZ+CcHyaY62AcHaAa3l9aXmOXpuEYYl5ZnJ1Zml5Y3R1YW2RUKx1XHB9V4OIUJl2V3lwWW5sXGJtWWl5Un6KSaFqV2VpV2KFSZt8S4hsUG1mUmB1S3xpUGVlUl54Q4ZlS2BhTldpSWlkS152QIhhSVtvQXlgR1dyPoFdR1ZdQ1ljPGtWQ0lYQFBlOXJhOWlYO1dWPE5dOGNTO0lRO0dUN1RNN0BNNUdPNUVTMVdTMVZNMkxJNEBJMkFFMTxMLlBGL0FCMjZBLjs9LzA+LTc6LDA9Kjk6KzQ6KTY2KiwzKSgyJygwKCItJiYsJSIsJiIpJRvMjHOJAAAA/HRSTlMAEREREREREREREREREREREREiIiIiIiIiIiIiIiIiMzMzMzMzMzMzREREREREVWZmZmZmZmZmZnd3d3d3d3eIiIiZmaqqqqqqu7u7u7vMzMzMzMzM3d3d3d3d3d3u7u7u7v////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////+yzXGNAAAACXBIWXMAAAsSAAALEgHS3X78AAAAHHRFWHRTb2Z0d2FyZQBBZG9iZSBGaXJld29ya3MgQ1M26LyyjAAAA0tJREFUOI2dlGlcTFEUwJ9dtuxL9n3fs2+FkKJsTUnFeVPTPDGSCiNLlhTJUooSoYgskT0xlmRLlohGUUkZUylL9MW5773qvSlf/D/M794z/99595577qWo/6F+22EmllIAqcRkaMuG/7JqDDKjoRKzYc2r1QaZspaMcXFhZKxpObhJFUvfxA7/YVZv27krIGDXzm1rXXBKT22poxlIMCz3CT18hOdwqC+DIauuIq2VBS7eMyI6SkD02bW4EEkbgVZ7Jq5ra9w5HeJ2Y0qJQaU3CbU9Ny9V4fLBpbjvCm0A5g+5E58Qr1IlxCcIUYXgzseWe7iH7UlI8oXT1xKTRKRspsGqBacNB1h5Lfnx41f+ACvu40BA8qtlQI/hPAug/dWpqWmxcgCnQzgSoj4BYMoeTBcAxYMMtTpjBzkDr3S1mI8KkPYl3mgA5desrKx0JfGYe1liPgcCjCOeKUjDCzQazQcv9lCva3R4DTBNj6IazwanR0VarbZoH9E25hZqxeTKwbouRbW2AqdP34uLi3/cxX0o3v4o1kHjDg61KKrzApB9K/1J2AjgfOXPTx2+KcGhDueV/C5FynKcAdxy2LGAEi/WI9/9wuUru40LdC/hxmUV+dbA4poU1cQCnF7yi/pFtuKWg6OiNe7PtPz6GLDBfJQZSI9+L2TRFm4inX/0vYbUXHldQ4LvAKZjXSgjGpQFeTwftpDiuHGlhOf5eXn54QDjSZ27YTWeZ2dwZKcHCu7cawx/VYBjP7YPrIEOzEzjUaffWlWuuWE08wzAHK6xDDFyS9AiabHuMilN06uekokC6HF8n9oA+CcJmi7lzY3969aHpWArvthOg6Q77xkDrBf3+52HT54kqhJUiWHY9xPK+34u0CFXqyP+GN4j86a81h7b/fj5arh4ELMt0S9PZwTgGRNzMvJAZIyIU96458W9Kq6lFTh6B/t6yGG5T3BEdARLVNQBH1fUbHpWaP0BHF0ZrmIuHhv8AoKC9vpt8FhB3qEZPSofg8l8VZ1tya9UJmcYuUxKxraGDSo1PQsScpw1qpP+yEWCZxIWjmwkfKr62NP280c04ya9jec72NnZ2dvPmzKQEjPEfGIHUaCTQbuOVFXqVROryl9zW6jbwjvsTgAAAABJRU5ErkJggg==" /></a>';
					}
				}

				// Instagram
				if ( $instagram_contact )
				{
					echo '<li id="instagram"><a target="_blank" title="Instagram" href="//instagram.com/' .  $instagram_contact . '"></a></li>';
				}
				


				/*
				<a title="contacto@complejocasaflor.com.ar" href="mailto:contacto@complejocasaflor.com.ar" target="_blank">
					<i class="icon-mail"> </i>
				</a>
				<a title="Facebook" href="https://www.facebook.com/casaflor.complejoturistico" target="_blank">
					<i class="icon-facebook"> </i>
				</a>
				<a title="Feed" href="<?php // bloginfo('rss2_url');?>" target="_blank">
					<i class="icon-feed"></i>
				</a>
				*/
			?>	
			</p>
		</div>
		<div class="copyright">
			<p><small>
				&copy; <?php echo date("Y ");?> Complejo CasaFlor - Todos los Derechos Reservados | Desarrollado por <a href="http://www.webmoderna.com.ar" target="_blank">WebModerna</a>
			</small></p>
		</div>
	<?php //if(wpmd_is_notphone()) { ?>
		<a id="ir_arriba" href="#">^</a>
	<?php //} else { ?>
		<!-- <a id="ir_arriba_phone" href="#">^</a> -->
	<?php //};?>
	</footer>
</div><!-- .wrapper -->

<?php if(is_page( 'tarifas-consultas' )) { //Solo se cargará en la página del formulario ?>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/datepicker-completo.js" ></script>
<?php } else { ?>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/scripts.js" ></script>
<?php };
	
	if( $google_analitycs )
	{
		echo '<script type="text/javascript">' . $google_analitycs . '</script>';
	}

wp_footer();?>
</body>
</html>