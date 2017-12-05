<?php get_header(); ?>
<div class="navbar-side">
	Hello
</div>
<div id="main">

	<?php
		if (have_posts()) :
			while (have_posts()) : the_post(); ?>
				<div class="row row-color">
					<div class="col-md-offset-1 col-md-10">
						<h2>
							<a href="<?php the_permalink();?>">
								<?php the_title(); ?>
							</a>
							<span class="time"><?php the_time(); ?></span>
						</h2>
						<p><?php the_content(); ?></p>
						<p>Publicher: <?php the_author(); ?></p>
						<hr>
					</div>
				</div>
			<?php
			endwhile;
		else :
			echo "<p>No content found</p>";
		endif;
	?>
</div>

<?php get_footer(); ?>
