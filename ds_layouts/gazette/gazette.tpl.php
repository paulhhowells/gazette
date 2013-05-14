<?php
/**
 * @file
 * Display Suite example layout template.
 *
 * Available variables:
 *
 * Layout:
 * - $classes: String of classes that can be used to style this layout.
 * - $contextual_links: Renderable array of contextual links.
 * - $layout_wrapper: wrapper surrounding the layout - could be Article, Section or Div
 *
 * Regions:
 *
 * - $main: Rendered content for the "Main" Main Text region.
 * - $main_classes: String of classes that can be used to style the "Main" region.
 * - $main_wrapper: wrapper surrounding the main region.
 *
 * - $figure: Rendered content for the "Figure" Figure Image & Caption region.
 * - $figure_classes: String of classes that can be used to style the "Figure" region.
 * - $figure_wrapper: wrapper surrounding the figure region.
 *
 * <article class="gazette u-inner">
 * 	<div class="gazette-inner">
 *
 * 		<h2 class="gazette-title">Gazette Module</h2>
 *
 * 		<figure class="gazette-figure">
 * 			<img src="image.png" alt="image description" />
 * 			<figcaption class="gazette-figure-caption">Image Caption</figcaption>
 * 		</figure>
 *
 * 		<div class="gazette-main">
 * 			MARK-UP
 * 		</div>
 *
 * 	</div>
 * </article>
 *
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="gazette u-inner <?php print $classes;?>">
	<?php if (isset($title_suffix['contextual_links'])): // Needed to activate contextual admin links ?>
		<?php print render($title_suffix['contextual_links']); ?>
	<?php endif; ?>
	<div class="gazette-inner">
		<?php if (!empty($title)): ?>
			<<?php print $title_wrapper ?> class="gazette-title <?php print $title_classes; ?>"><?php print $title; ?></<?php print $title_wrapper ?>>
		<?php endif; ?>
		<<?php print $figure_wrapper ?> class="gazette-figure <?php print $figure_classes; ?>"><?php print $figure; ?></<?php print $figure_wrapper ?>>
		<<?php print $main_wrapper ?> class="gazette-main <?php print $main_classes; ?>"><?php print $main; ?></<?php print $main_wrapper ?>>
	</div>
</<?php print $layout_wrapper ?>>
<?php if (!empty($drupal_render_children)): // Needed to activate display suite support on forms ?>
	<?php print $drupal_render_children ?>
<?php endif; ?>