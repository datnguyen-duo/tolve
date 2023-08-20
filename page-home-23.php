<?php /* Template Name: Tolve Home 23 */ ?>

<?php include("header-home-23.php" ); ?>




<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 * @link       https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    Arke
 * @copyright  Copyright (c) 2018, Danny Cooper
 * @license    https://opensource.org/licenses/gpl-2.0.php GNU Public License
 */



				if ( have_posts() ) :

					while ( have_posts() ) :

						the_post();

						get_template_part( 'content' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile;

				else :

					get_template_part( 'content', 'none' );

				endif;
				?>

				</div><!-- .content-area -->
		</div><!-- .site-content -->





		<?php if ( get_page_by_path( 'archives' ) ) : ?>
			


		<?php else : ?>
			<?php arke_the_posts_navigation(); ?>
		<?php endif; ?>
		<?php wp_footer(); ?>


<?php include("footer.php"); ?>


</div> <!-- end of #wrap -->

 
