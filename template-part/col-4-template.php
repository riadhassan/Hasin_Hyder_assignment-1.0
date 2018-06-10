<div class="col-md-4">
	<?php
	if(has_post_thumbnail()) {
		the_post_thumbnail("large", array("class" =>"img-fluid" ));
	}
	?>

	<a href="<?php the_permalink(); ?>"><h2 class="post-title"><?php the_title(); ?></h2></a>

	<p>
		<a href="<?php the_author_link(); ?>"><strong><?php the_author() ?></strong><br/></a>
		<?php echo get_the_date("jS F, Y"); ?>
	</p>

	<p>
		<?php
		the_content();
		?>
	</p>
</div>