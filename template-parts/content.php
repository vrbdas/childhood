<div class="sp">
	<div class="container">
		<div class="sp__subtitle"><?php the_title();?></div>
		<div class="row">
			<div class="col-lg-6 offset-3">
				<div class="sp__content-wrapper">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="entry-content">
							<?php
							the_content(
								sprintf(
									wp_kses(
										/* translators: %s: Name of current post. Only visible to screen readers */
										__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'underscores' ),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									wp_kses_post( get_the_title() )
								)
							);

							wp_link_pages(
								array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'underscores' ),
									'after'  => '</div>',
								)
							);
							?>
						</div><!-- .entry-content -->

					</article><!-- #post-<?php the_ID(); ?> -->
				</div>
			</div>
		</div>
	</div>
</div>