<div class="container">
	<div class="row">
		<div class="col-md-12">
			<a href="<?php the_permalink(); ?>"><h2 class="post-title"><?php the_title(); ?></h2></a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<p>
				<a href="<?php the_author_link(); ?>"><strong><?php the_author() ?></strong><br/></a>
				<?php echo get_the_date("jS F, Y"); ?>
			</p>
			<?php the_tags("<ul class=\"list-unstyled\"><li>", "</li><li>", "</li></ul>") ?>
		</div>

		<div class="col-md-8">
			<p>
				<?php
				if(has_post_thumbnail()) {
					the_post_thumbnail("large", array("class" =>"img-fluid" ));
				}
				?>
			</p>
			<p>
				<?php
				the_content();
				?>
			</p>
		</div>
	</div>

</div>