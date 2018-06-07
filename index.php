<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php wp_head(); ?>
</head>

<body>
<div class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="tagline"><?php bloginfo("description"); ?></h3>
				<h1 class="align-self-center display-1 text-center heading"><?php bloginfo("name"); ?></h1>
			</div>
		</div>
	</div>
</div>
<div class="posts">
    <?php
    $is_12_col=true;
    $col_4_counter=0;
    while(have_posts()){
?>

	    <div class="post">
            <div class="container">
                <div class="row">

					    <?php
					    if(!$is_12_col) {
						    while($col_4_counter<3) {
							    the_post();
							    ?>

                    <div class="col-md-4">
								    <?php
								    if(has_post_thumbnail()) {
									    ?>
                                        <img class="img-fluid" <?php the_post_thumbnail() ?>

									    <?php
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
							    <?php
							    $col_4_counter ++;
							    if ( $col_4_counter == 3 ) {
								    $is_12_col     = true;
							    }
						    }
					    }
					    ?>

                    </div>
            </div>

		    <?php
		    if($is_12_col){
                the_post();
		    ?>
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
	                        ?>
                            <?php the_post_thumbnail() ?>
                            <?php
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
		    <?php
		    $is_12_col=false;
			    $col_4_counter = 0;
		    }
		    ?>


                </div>



    <?php
    }
    ?>

</div>


<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				&copy; LWHH - All Rights Reserved
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>