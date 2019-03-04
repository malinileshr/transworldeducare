<?php
/*
 * Template name: graduates template
 */
get_header();


global $volcanno_page_style;

// Sidebar placement
$volcanno_page_style = get_post_meta( get_the_ID(), 'pg_sidebar', true ) ? : Volcanno::return_theme_option( 'default_case_studies_sidebar_position' );
$content_grid = $volcanno_page_style == 'fullwidth' ? 'col-md-12' : 'col-md-8';

// Blog style
$blog_style = rwmb_meta( 'pg_case_studies_options_style' ) ? : Volcanno::return_theme_option( 'default_case_studies_style' );

// Page title template
get_template_part( 'template-parts/page', 'title' );
?>

<style type="text/css">
	.single_member {
		position: relative;
		margin-bottom: 15px;	
		transition:.5s;
	}
	.graduateName {
		color: #303030;
		font-size: 18px;
		text-transform: uppercase;
		font-weight: 500 !important;
		margin-bottom: 0 !important;
	}
	.location{
		color: #303030;
		font-size: 13px;
		font-weight: 500 !important;	
	}
	.gradimg{
		border-radius: 5px;
		max-height: 262px;
		overflow: hidden;		
	    margin-bottom: 10px;
	}
	.gradimg img{
		-webkit-filter: grayscale(100%);
		filter: grayscale(100%);
		width:100%;
		border-radius: 6px;
		transition:.5s;		
	}
	.single_member:hover .gradimg img{
		-webkit-filter: grayscale(0%);
		filter: grayscale(0%);		
			transition:.5s;		
	}
	.passyr {
		color: #fff;
		font-size: 13px;
		font-weight: 500 !important;
		position: absolute;
		right: 10px;
		top: 10px;
		background-color: #ae8b78;
		z-index: 1;
		margin-bottom: 0 !important;
		padding-bottom: 0 !important;
		padding: 0 15px;
		border-radius: 3px;
	}	
	.single_member:hover .passyr {
		background-color: #014944;
	}
</style>


<!-- .page-content start -->
<div class="page-content all-graduates">
	<div class="container">
		<div class="row">
			<?php
			global $post;
			$args = array( 'post_type' => 'graduates', 'posts_per_page' => -1 ); 
			$attachments = get_posts( $args );
			if ( $attachments ) {
				foreach ( $attachments as $post ) {
					echo '<div class="col-md-3 col-sm-3 col-xs-12"><div class="single_member">';	
					
					$passingYear = get_post_meta( get_the_ID(), 'passing_year',true );
					echo '<p class="passyr">'.$passingYear;					
					$thumbnail = get_the_post_thumbnail_url(get_the_ID(),'full');

					if ( $thumbnail ) {
						echo '<div class="gradimg"><img src="'.$thumbnail.'"></div>';
					} else {
						$thumbnail = get_stylesheet_directory_uri().'/images/avatar-student.png';
						echo '<div class="gradimg"><img src="'.$thumbnail.'"></div>';
					}


					echo '<h3 class="graduateName">'.get_the_title().'</h3>';

					$location = get_post_meta( get_the_ID(), 'branch_location',true );
					echo '<p class="location">'.$location;
					echo '</div></div>';
				}
				wp_reset_postdata();
			}
			?>
		</div>
    </div><!-- .container end -->
</div><!-- .page-content end -->

<?php get_footer(); ?>	