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
 * <article class="gazette">
 *
 * 	 <h2 class="gazette-title">Gazette Module</h2>
 *
 * 	 <figure class="gazette-figure">
 * 	  <img src="image.png" alt="image description" />
 * 		<figcaption class="gazette-figure-caption">Image Caption</figcaption>
 * 	 </figure>
 *
 * 	 <div class="gazette-main">
 * 			MARK-UP
 *   </div>
 *
 * </article>
 *
 */
?>
<?php	
	/*
		it would be better to replace this regex with ds.api hooks that manipulate the fields before they are turned into strings
	
		if $title string contains a class
			then get contents of class string
			if it doesnt contain new class then prepend it
			
		else add class="" after first <h something
		
		if class is inside title then don't add it to wrapper
	*/
	$title_class_insert = "gazette-title";
	$title_class_insert_pattern = '/\s*' . $title_class_insert . '\s*/';
	$title_wrapper_class_insert = 'gazette-title-wrapper';
	$title_wrapper_class_insert_pattern = '/\s*' . $title_wrapper_class_insert . '\s*/';
	
	if (!empty($title)) {
	
	
		// test if $title has a class attribute
		$matches = array();
		$title_has_class_attr_pattern = '/class\s*=\s*[\'|"]([-_a-z0-9\s]*)[\'|"]/i';
		$title_has_class_attr_result = preg_match($title_has_class_attr_pattern, $title, $matches);
		if ($title_has_class_attr_result) {
			// $title has a class attribute	
					
			$pattern = '/class\s*=\s*[\'|"]([-_a-z0-9\s]*)[\'|"]/i';
			
			// test if class attribute contains any classes
			if (strlen($matches[1]) > 0) {
				// $title has classes						
							
				// test if classes does not already contains class to be inserted			
				if (!preg_match($title_class_insert_pattern, $matches[1])) {
		
					$replacement = 'class="' . $title_class_insert . ' ${1}"';
					$title = preg_replace($pattern, $replacement, $title);
				}			
								
			} else {
				// $title has class attribute but no classes
				
				$replacement = 'class="' . $title_class_insert . '"';
				$title = preg_replace($pattern, $replacement, $title);
			}
			// $title = preg_replace($pattern, $replacement, $title);

		} else {
			// $title does not have a class attribute
			// so add a class attribute with $title_class_insert to $title if it contains a header tag
			
			$pattern = '/(<h[1-6])/i';
			$replacement = '${1} class="' . $title_class_insert . '"';
			$title = preg_replace($pattern, $replacement, $title);
		}
		//$title = preg_replace($pattern, $replacement, $title);
	
		/*
		// if neither $title nor $title_classes contain $title_class_insert then add it to the wrapper instead
		// remember that $title_classes is added to the title wrapper, not the title itself
		if (!(preg_match($title_class_insert_pattern, $title) || preg_match($title_class_insert_pattern, $title_classes))) {
			$title_classes = empty($title_classes) ? $title_class_insert : $title_class_insert . ' ' . $title_classes;
		}
		*/
		
		
		// don't add the class to the wrapper if it has already been added
		if (!preg_match($title_wrapper_class_insert_pattern, $title_classes)) {
			$title_classes = empty($title_classes) ? $title_wrapper_class_insert : $title_wrapper_class_insert . ' ' . $title_classes;
		}
	}
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="gazette <?php print $classes;?>">
	<?php if (isset($title_suffix['contextual_links'])): // Needed to activate contextual admin links ?>
		<?php print render($title_suffix['contextual_links']); ?>
	<?php endif; ?>

	<?php if (!empty($title)): ?>
		<?php if (!empty($title_classes)): // only print the wrapper if it's adding a class ?>
		<<?php 
			print $title_wrapper;
			if (!empty($title_classes)) { // don't print an empty class attribute
				print ' class="' . $title_classes . '"';
			} ?>>
		<?php endif; ?>	
			<?php print $title; ?>
		<?php if (!empty($title_classes)): // only print the wrapper if it's adding a class ?>
		</<?php print $title_wrapper ?>>
		<?php endif; ?>	
	<?php endif; ?>

	<<?php print $figure_wrapper ?> class="gazette-figure <?php print $figure_classes; ?>"><?php print $figure; ?></<?php print $figure_wrapper ?>>
	<<?php print $main_wrapper ?> class="gazette-main <?php print $main_classes; ?>"><?php print $main; ?></<?php print $main_wrapper ?>>
	
</<?php print $layout_wrapper ?>>
<?php if (!empty($drupal_render_children)): // Needed to activate display suite support on forms ?>
	<?php print $drupal_render_children ?>
<?php endif; ?>