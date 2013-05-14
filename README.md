gazette
=======

The Gazette [1] CSS module [2] that presents a main image with a ‘halfpennyworth’ of text to it’s side.  Less &amp; CSS files to use anywhere, and a Drupal Display Suite template that implements it.

When featuring a large image with a small chunk of related text, there is a commonly used layout which places the text as a diminuitive narrow column of text to one side of the image (which takes up most of the width of the page).  This module of CSS provides that layout at larger screens sizes.

Taking a 'content first' approach has lead to three layouts, targetted at a chunk of content defined as: 'a large main image, with a smaller halfpennyworth of text'.  You are likely to want to change the breakpoints according to the font-sizes and image proportions that you use.

	1. At the narrowest width lines of text would be harder to read if they must shortened by sharing the page width with the image. Each item of content thus has full width and is stacked in a single vertical column.
	2. Once a readable line of text is able to share the page width with an image (that is similarly not too narrow) then the text wraps to the left and under the image.
	3. When the text flowing under the image becomes too wide to comfortably read then it is confined to the fixed width left hand column. The image scales to fill the remaining horizontal space.



[1]: gazette |gəˈzet|
1. noun, a journal or newspaper.
ORIGIN early 17th cent.: via French from Italian gazzetta, originally Venetian gazeta de la novità ‘a halfpennyworth of news’ (because the news-sheet sold for a gazeta, a Venetian coin of small value).

[2]: I’m using this term as defined in SMACSS (www.smacss.com).