<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
	
	<article>
		<header class="page-header">
		<h1><span>Subject: <?php single_tag_title(); ?></span></h1>
		</header>
	</article>
	
	<div class="rule mag-bottom-20"></div>
	
	<?php if ( have_posts() ): ?>	
	
	<section id="news-posts-list" class="post-list">
	
	<div class="pagination">
		<?php wp_pagenavi(); ?>
	</div>
	
	<?php while ( have_posts() ) : the_post(); ?>		
			
		<?php include (STYLESHEETPATH . '/_/inc/posts/post-list-item.php'); ?> 	
		
	<?php endwhile; ?>
	
	<div class="pagination">
		<?php wp_pagenavi(); ?>
	</div>
	
	</section>
	
	<?php else: ?>
	<div class="well no-posts-message">
		<h2>Sorry</h2>
		<p>There are no posts in the "<?php single_cat_title(); ?>" category at the moment.</p>
	</div>
	<?php endif; ?>
	
	</div>
	
	<div class="ccol-xs-12 col-sm-12 col-md-8 col-lg-9">
	
	<?php get_sidebar(); ?>
		
	</div>

</div>

</section>
<!-- MAIN CONTENT END -->

<?php get_footer(); ?>
