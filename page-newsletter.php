<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	
	<?php 
	$images = get_field("images");
	$content = get_field("content");
	?>
	
			<article class="page">
							
				<header class="page-header">
				<h1><span><?php the_title(); ?></span></h1>
				</header>
				
				<div class="rule-sml mag-bottom-20"></div>
				
				<?php if ($content) : ?>
	
				<?php foreach( $content as $content_item ): ?>
		
				<?php if ($content_item['acf_fc_layout'] == "cn_intro") : ?>
				
				<div class="intro center lrg">
					<p><?php echo $content_item['intro_txt']; ?></p>
				</div>
				
				<?php endif;  ?>
				
				<?php endforeach; ?>
					
				<div class="rule-sml"></div>
				
				<?php endif; ?>
				
				<?php the_content(); ?>
				
				<div class="rule"></div>
				
			</article>
			
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Newsletter Content') ) : ?>
	
			<?php endif; ?>
	
		<?php endwhile; ?>
	
	<?php endif; ?>
	
	</div>
	
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
	
	<?php get_sidebar('pages'); ?>
		
	</div>

</div>

</section>
<!-- MAIN CONTENT END -->

<?php get_footer(); ?>
