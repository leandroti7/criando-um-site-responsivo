<section class="portifolio">
	<div class="container">
					
		<? query_posts('post_type=post');?>
				<ul>
					
					<?while(have_posts()): the_post(); ?>
						<li>
							<figure class="imghvr-blur">
								<img src="<? the_post_thumbnail_url('portifolio-thumb');?>" alt="Thumb">
									<figcaption>
										<a href="<? the_post_thumbnail_url();?>" data-lightbox="roadtrip" data-title="<? the_content();?>">
											<h3><? the_title();?></h3>
											<p><? the_content();?></p>
										</a>
										<div class="overlay"></div>
									</figcaption>	
							</figure>
						</li>			
					<?endwhile;?>

				</ul>
		<? wp_reset_query(); ?>

	</div>
</section>	