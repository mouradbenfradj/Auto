<?php 
if ( ! function_exists( 'azwa_home_blogs' ) ) :
	function azwa_home_blogs() {
	$hide_show_blog 		= get_theme_mod('hide_show_blog','1');
	$blog_title 			= get_theme_mod('blog_title');
	$blog_description 		= get_theme_mod('blog_description');
	$blog_display_num 		= get_theme_mod('blog_display_num','3');	
	if($hide_show_blog == '1') { 
?>
<section id="latest-news" class="section-padding position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 col-12">
                <div class="section-title">
					<?php if($blog_title) { ?>
						<h2><?php echo esc_html($blog_title); ?> <span></span></h2>
					<?php } ?>
					<?php if($blog_description) { ?>
						<p><?php echo esc_html($blog_description); ?></p>
					<?php } ?>
                </div>                    
            </div>                
        </div>
        <div class="row">
			<?php 	
				$conceptly_blog_args = array( 'post_type' => 'post','posts_per_page' => $blog_display_num,'post__not_in'=>get_option("sticky_posts")) ; 	
					$conceptly_wp_query = new WP_Query($conceptly_blog_args);
					if($conceptly_wp_query)
					{	
					while($conceptly_wp_query->have_posts()):$conceptly_wp_query->the_post(); ?>
						<div class="col-lg-4 col-md-6 col-sm-12 mb-4 mb-lg-0 news">
							<article id="post-<?php the_ID(); ?>" <?php post_class('unique-blog-post special-blog'); ?>>                        
		                        <div class="unique-post-content">
		                        	<figure class="image">
			                            <?php 
											if ( has_post_thumbnail() ) {
											 the_post_thumbnail(); 
											} 
										?>							
			                        </figure>
			                        <span class="post_date"><span><?php echo esc_html(get_the_date('j')); ?></span><?php echo esc_html(get_the_date('M')); ?></span>
			                        <span class="post_meta-categories"><span><a href="<?php esc_url(the_permalink()); ?>"><i class="fa fa-folder-open"></i> <?php the_category(', '); ?></a></span></span>
		                            <?php     
										if ( is_single() ) :
										
										the_title('<h3 class="unique-post-title">', '</h3>' );
										
										else:
										
										the_title( sprintf( '<h3 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );

										endif;

										the_content( 
											sprintf( 
												__( 'Read More', 'azwa' ), 
												'<span class="screen-reader-text">  '.esc_html(get_the_title()).'</span>' 
											) 
										);
									?>
		                        </div>
		                    </article>
						</div>
				<?php 
					endwhile; 
					}
					wp_reset_postdata();
				?>
        </div>
    </div>
    <div class="shape18"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/shape/shape18.png" alt="image"></div>
</section>
<?php } 
	}
endif;
if ( function_exists( 'azwa_home_blogs' ) ) {
$azwa_section_priority = apply_filters( 'azwa_section_priority', 30, 'azwa_home_blogs' );
add_action( 'conceptly_sections', 'azwa_home_blogs', absint( $azwa_section_priority ) );
}