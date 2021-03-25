<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */

get_header();
?>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<section class="cours">
			<?php
			/* Start the Loop */
            $precedent = "XXXXXX";
			while ( have_posts() ) :
				the_post();
				convertirTableau($tPropriete);

				if ($tPropriete['typeCours'] != $tPropriete['precedent']): 
					if ("XXXXXX" != $tPropriete['precedent']): ?>
						</section>
					<?php endif;?>
					<section>
					<h2><?php echo $tPropriete['typeCours']; ?></h2>
				<?php endif; ?>
				<?php get_template_part( 'template-parts/content', 'cours-article');
				$tPropriete['precedent'] = $tPropriete['typeCours'];
			endwhile; ?>
			</section>	<!-- fin section cours -->
			<?php rewind_posts(); ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<h3>-<?php echo get_the_title(); ?></h3>
			<?php endwhile; ?>
		<?php endif;?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();


function convertirTableau(&$tPropriete)
{
/* 
	$titre = get_the_title();
	//	582-1W1 Mise en page Web (75h)
	$sigle = substr($titre, 0, 7);
	$nbHeure = substr($titre, -4, 3);
	$titrePartiel = substr($titre, 8, -6);
	$session = substr($titre, 4,1);
	$typeCours = get_field('type_de_cours');
*/

	$tPropriete['titre'] = get_the_title();
	$tPropriete['sigle'] = substr($tPropriete['titre'], 0, 7);
	$tPropriete['nbHeure'] = substr($tPropriete['titre'], -4, 3);
	$tPropriete['titrePartiel'] = substr($tPropriete['titre'], 8, -6);
	$tPropriete['session'] = substr($tPropriete['titre'], 4,1);
	$tPropriete['typeCours'] = get_field('type_de_cours');
}
