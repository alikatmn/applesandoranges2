<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name')?></title>
	<script src="http://use.edgefonts.net/droid-serif.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
</head>
	<body>
		<header>
			<h1><?php bloginfo('name')?></h1>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/appleorange.jpg" />

			<nav>
				<ul>
					<a href="#"><li>Themes</li></a>
					<a href="#"><li>Process</li></a>
					<a href="#"><li>Clients</li></a>
					<a href="#"><li>Contact Us</li></a>
				</ul>
			</nav>

		</header>
		
		<section>
	
			<section>
				<p>Apples and Oranges is a full-service WordPress shop. We create custom themes and CMSes for our clients.</p>
				<h2>Not just good. Uncomparable.</h2>

			</section> 

		</section>

		<article>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<a href="<?php the_permalink(); ?>"><h2><?php the_title_attribute(); ?></h2></a>
			<?php the_content(); ?>

			<!--<p>Pickled labore ad, Thundercats church-key kogi selvage mustache tempor tousled lo-fi hella direct trade bespoke stumptown. High Life in locavore, pariatur American Apparel sunt fixie odio. Exercitation beard incididunt post-ironic chillwave tattooed, enim Shoreditch Blue Bottle artisan cornhole dreamcatcher aliqua craft beer photo booth. Butcher cred pug Etsy nulla, XOXO Bushwick forage farm-to-table Godard tousled fingerstache in deep v. Blog labore hella sartorial aesthetic, chia leggings authentic. Marfa adipisicing voluptate iPhone anim mlkshk biodiesel in. Truffaut authentic sapiente aliquip lomo cray, id veniam Marfa accusamus tousled artisan Terry Richardson eiusmod.</p>-->


			</article>

		<?php endwhile; else : ?>
		<p><?php_e('Sorry, no content'); ?></p>
	<?php endif; ?>

			<!--<article class="col1">
			
			<p>Flannel vero id stumptown. Neutra messenger bag deserunt aliqua twee eu. Keffiyeh skateboard shabby chic, salvia chambray nisi beard sint Banksy bicycle rights id Vice bespoke. Odio Terry Richardson sint occaecat commodo. Thundercats cardigan velit, Echo Park irony tote bag viral reprehenderit enim magna. Enim bespoke asymmetrical commodo, consectetur in banh mi. Messenger bag slow-carb Schlitz, culpa duis banh mi sartorial craft beer bespoke bitters.</p>


			</article>-->

		<footer>
			<p>Apples and Oranges | 2525 Orange Way, Apple Orchard, CA 91104 | Phone: (800) 424-3232</p>
		</footer>
	</body>
</html>