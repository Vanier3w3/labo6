<?php
/**
 * Template part l'affichage des blocs de cours dans front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */
global $tPropriete;
?>
  
<article class="slide__conteneur">
	<div class="slide">
		<?php get_the_post_thumbnail('page');?>
		<div class="slide__info">
			<p><?php echo $tPropriete['sigle'] . " - " . $tPropriete['typeCours'] . " - " . $tPropriete['nbHeure']; ?></p>
			<a href="<?php echo get_permalink(); ?>"><?php echo $tPropriete['titrePartiel']; ?></a>
			<p>Session : <?php echo $tPropriete['session']; ?></p>
		</div>
	</div>
</article>      
