gazette
=======

Gazette[1] is a CSS module[2] that features a main image with a ‘halfpennyworth’ of text to it’s side.  

This github project provides:

* Less & CSS files for use in any project,
* An Example folder with mark-up demonstrating the module in use, and 
* a Drupal Display Suite template that packages Gazette as a ready to use layout.

When featuring a large image with a small chunk of related text, there is a commonly used layout which places the text as a diminuitive narrow column of text to one side of the image (which takes up most of the width of the page).  This module of CSS provides that layout at larger screens sizes.

Taking a 'content first' approach has lead to three layouts, each designed for a chunk of content defined as: 'a large main image, with a smaller halfpennyworth of text'.  You are likely to want to change the breakpoints according to the font-sizes and image proportions that you use.

1. At the narrowest width lines of text would be harder to read if they were shortened by sharing the page width with the image. Each item of content thus has full width and is stacked in a single vertical column.
2. Once a readable line of text is able to share the page width with an image (that is similarly not too narrow) then the text wraps to the left and under the image.
3. When the text flowing under the image becomes too wide to comfortably read then it is confined to the fixed width left hand column. The image scales to fill the remaining horizontal space.

You may wish to change the text column width to match any grid system you are using. (Gazette is designed to play well with the Unit grid system).
  
## mark-up
Because Gazette module comprises classes you are free to replace the tags in the example below with whatever HTML or HTML5 you desire. It may be appropriate to mark-up the Gazette as an Article or Section.  It’s anticipated that the Image may wrapped in a Figure and be supplied with a Figcaption.  If Gazette is given a title it will fit within the left hand text column for scenarios 2 &amp; 3, and precede the Image in scenario 1. If the title is desired to remain full width then the .gazette-title-wrapper--wide class may be appended to the title wrapper.
### classes
* .gazette-title-wrapper
* .gazette-title-wrapper--wide may be optionally used alongside gazette-title-wrapper
* .gazette-title
* .gazette-figure
* .gazette-figure-caption

		<article class="gazette">

			<div class="gazette-title-wrapper">
				<h2 class="gazette-title">Gazette Module</h2>
			</div>
			<figure class="gazette-figure">
				<img src="image.png" alt="image description" />
				<figcaption class="gazette-figure-caption">Caption for image</figcaption>
			</figure>
			
			<div class="gazette-main">		
				MARK-UP HERE
			</div>
				
		</article>

## illustration of wide width layout
![Image](readme_example_800x600.png?raw=true)

## to do
[] more cross browser testing

## build notes
I want the Display Suite layout to work once without further requiring configuration through the Admin interface.  To this end I have used regex to append a class to the title tag.  Using regex is not the 'drupal way' so ideally this would in future be achieved using a hook from the ds.api. (At the point of preprocessing the node the Title field is already a string).

It would also be nice to make .gazette-title-wrapper--wide available in the Admin interface as a result of simply placing the gazette folder into ds_layouts.  Attaching a Read Me with instructions to add .gazette-title-wrapper--wide via the Admin interface seems kludgy to me.

.gazette-title is wrapped in .gazette-title-wrapper so that it may use a background graphic that runs the width of the text, and not into left or right padding.


## footnotes
[1]: gazette |gəˈzet| : noun, a journal or newspaper.  
ORIGIN early 17th cent.: via French from Italian gazzetta, originally Venetian gazeta de la novità ‘a halfpennyworth of news’ (because the news-sheet sold for a gazeta, a Venetian coin of small value).

[2]: Using the term 'module' as defined by SMACSS (www.smacss.com).
