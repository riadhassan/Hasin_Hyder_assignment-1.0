<?php get_header(); ?>'
<body <?php body_class(); ?>>
<?php get_template_part("template-part/hero"); ?>

<div class="posts">
    <?php
        $total_post_counter=0;
        $col_4_counter=0;
        while(have_posts()){
	        the_post();
            if($total_post_counter%4==0) {
	            get_template_part("template-part/col-12-template");
	            $col_4_counter=0;
            }else {
                if ( $col_4_counter == 1 ) {
	?>
                    <div class="container">
                         <div class="row">
	                        <?php
	                }
	                get_template_part("template-part/col-4-template");
	                if ($col_4_counter==3) {
	                    ?>
                    </div>
                        </div>
	            <?php
	                }
            }
	     $col_4_counter++;
	     $total_post_counter++;
        }
?>

    </div>

<?php
get_footer();
?>