<?php
/**
 * Liquid_TagBlog class for blog posts page and blog archives
 */

class Liquid_TagBlog extends LD_Blog {

	/**
	 * [__construct description]
	 * @method __construct
	 */
	public function __construct() {
		
		$style = liquid_helper()->get_option( 'tag-blog-style' );
 		if( empty( $style ) ) {
	 		$style = 'style01';
 		}
		
		$this->atts = array(
			'style' => $style,
			'enable_parallax' => liquid_helper()->get_option( 'tag-blog-enable-parallax' ),
			'show_meta' => liquid_helper()->get_option( 'tag-blog-show-meta' ),
			'meta_type' => liquid_helper()->get_option( 'tag-blog-meta-type' ),
			'one_category' => liquid_helper()->get_option( 'tag-blog-one-category' ),
			'post_excerpt_length' => liquid_helper()->get_option( 'tag-blog-excerpt-length' ),
			'grid_columns' => liquid_helper()->get_option( 'blog-tag-columns' ),
			'pagination'      => 'pagination',
		);

		$this->render( $this->atts );

	}

	/**
	 * [render description]
	 * @method render
	 * @return [type] [description]
	 */
	public function render( $atts, $content = '' ) {

		extract($atts);

		// check
		$located = locate_template( "templates/blog/tmpl-$style.php" );
		if ( ! file_exists( $located ) ) {
			return;
		}
		$i = 0;

		$before = $after = $filter_id = '';

		if ( class_exists( 'Liquid_Elementor_Addons' ) ) {
			echo '<div class="lqd-lp-grid">';
			$items_height = 'items_height';
		} else {
			echo '<div class="lqd-lp-grid ' . $this->get_id() . '">';
			$fiter_id = $atts['filter_id'];
		}

			
			if( 'style05' === $style || 'style07' === $style ) {
				echo '<div class="lqd-lp-row row d-flex flex-wrap" data-liquid-masonry="true" data-masonry-options=\'{ "filtersID": "#' . $filter_id . '","itemSelector": ".lqd-lp-column" }\'>';
				$before = '<div class="lqd-lp-column col-md-12 ' . $this->entry_term_classes() . '">';
				$after  = '</div>';
			}
			elseif( 'style14' === $style ) {
				echo '<div class="lqd-lp-row row d-flex flex-wrap" data-liquid-masonry="true" data-masonry-options=\'{ "itemSelector": ".lqd-lp-column" }\'>';
				$before = '<div class="lqd-lp-column col-xs-12 col-md-4 ' . $this->entry_term_classes() . '">';
				$after  = '</div>';
			}
			else {
				echo '<div class="lqd-lp-row row d-flex flex-wrap">';
				$before = '<div class="lqd-lp-column ' . $this->get_grid_class() . ' ' . $this->entry_term_classes() . '">';
				$after  = '</div>';
			}

			while( have_posts() ): the_post();

				$post_classes = array( 'lqd-lp' );
				if( 'style01' === $style ) {
					$post_classes[] = 'lqd-lp-style-1 pos-rel';
				}
				elseif( 'style02' === $style ) {
					$post_classes[] = 'lqd-lp-style-2 d-flex flex-column justify-content-between pos-rel round overflow-hidden p-5';
				}
				elseif( 'style02-alt' === $style ) {
					$post_classes[] = 'lqd-lp-style-2 lqd-lp-style-2-alt d-flex flex-column justify-content-between pos-rel round overflow-hidden p-5';
				}
				elseif( 'style03' === $style ) {
					$post_classes[] = 'lqd-lp-style-3 pos-rel';
				}
				elseif( 'style04' === $style ) {
					$post_classes[] = 'lqd-lp-style-4 lqd-lp-title-15 pos-rel d-flex flex-wrap align-items-center';
				}
				elseif( 'style05' === $style ) {
					$post_classes[] = 'lqd-lp-style-5 lqd-lp-title-34 pos-rel d-flex flex-wrap align-items-center';
					$before = '<div class="lqd-lp-column col-md-12 ' . $this->entry_term_classes() . '">';
				}
				elseif( 'style06' === $style ) {
					$post_classes[] = 'lqd-lp-style-6 lqd-lp-hover-img-zoom pos-rel round overflow-hidden';
				}
				elseif( 'style07' === $style ) {
					$post_classes[] = 'lqd-lp-style-7 lqd-lp-title-34 pos-rel lqd-lp-hover-img-zoom';
				}
				elseif( 'style08' === $style ) {
					$post_classes[] = 'lqd-lp-style-8 p-5 pos-rel round overflow-hidden';
				}
				elseif( 'style09' === $style ) {
					$post_classes[] = 'lqd-lp-style-9 pos-rel d-flex flex-wrap';
				}
				elseif( 'style10' === $style  ) {
					$post_classes[] = 'lqd-lp-style-10 lqd-lp-img-cover pos-rel d-flex flex-wrap round overflow-hidden h-pt-80 lqd-lp-hover-img-zoom';
				}
				elseif( 'style11' === $style  ) {
					$post_classes[] = 'lqd-lp-style-11 lqd-lp-img-cover lqd-lp-title-27 pos-rel d-flex flex-wrap round overflow-hidden h-pt-95';
				}
				elseif( 'style12' === $style  ) {
					$post_classes[] = 'lqd-lp-style-12 pos-rel overflow-hidden border-radius-7 p-4 px-md-5';
				}
				elseif( 'style13' === $style  ) {
					$post_classes[] = 'lqd-lp lqd-lp-style-13 pos-rel';
				}
				elseif( 'style14' === $style  ) {
					$i++;
					if( 1 === $i ) {
						$post_classes[] = 'lqd-lp lqd-lp-style-14 lqd-lp-img-cover lqd-lp-hover-img-zoom lqd-lp-title-36 pos-rel d-flex flex-wrap round overflow-hidden h-pt-60';
						$before = '<div class="lqd-lp-column col-xs-12 col-md-8">';
					}
					else {
						$post_classes[] = 'lqd-lp lqd-lp-style-14 lqd-lp-img-cover lqd-lp-hover-img-zoom lqd-lp-title-20 pos-rel d-flex flex-wrap round overflow-hidden h-pt-60';
						$before = '<div class="lqd-lp-column col-xs-12 col-md-4">';
					}
				}
				elseif( 'style16' === $style  ) {
					$post_classes[] = 'lqd-lp lqd-lp-style-16 pos-rel';
				}
				elseif( 'style17' === $style  ) {
					$post_classes[] = 'lqd-lp lqd-lp-style-17 lqd-lp-img-cover lqd-lp-title-40 pos-rel d-flex flex-wrap round overflow-hidden ' . $items_height . '';
				}
				elseif( 'style18' === $style  ) {
					$post_classes[] = 'lqd-lp lqd-lp-style-18 d-md-block';
				}
				elseif( 'style19' === $style  ) {
					$post_classes[] = 'lqd-lp lqd-lp-style-19 pos-rel';
				}
				elseif( 'style20' === $style  ) {
					$post_classes[] = 'lqd-lp lqd-lp-style-20 lqd-lp-hover-img-zoom pos-rel';
				}
				elseif( 'style21' === $style  ) {
					$post_classes[] = 'lqd-lp lqd-lp-style-21 pos-rel d-flex flex-wrap';
				}
				elseif ( 'style22' === $style ){
					$post_classes[] = 'lqd-lp lqd-lp-style-22 lqd-lp-title-34 pos-rel lqd-lp-hover-img-zoom';
				}
				elseif ( 'style23' === $style ){
					$post_classes[] = 'lqd-lp lqd-lp-style-23 lqd-lp-title-22 lqd-lp-hover-img-zoom lqd-lp-hover-img-zoom-out pos-rel';
				}
			
				$post_classes = join( ' ', get_post_class( $post_classes, get_the_ID() ) );
			
				$attributes = array(
					'id'    => 'post-' . get_the_ID(),
					'class' => $post_classes
				);

				printf( '%s <article%s>', $before, ld_helper()->html_attributes( $attributes ) );

					if( 'quote' === get_post_format() ) {
						$quote_located = locate_template( 'templates/blog/format-quote.php' );
						include $quote_located;
					}
					else {
						include $located;
					}

				echo '</article>' . $after;

				// Adjust the timestamp settings for next loop
				if( 'timeline' === $style ) {
					$prev_post_timestamp = $post_timestamp;
					$prev_post_month = $post_month;
					$prev_post_year = $post_year;
					$post_count++;
				}

			endwhile;

			echo '</div>';
			
			// Pagination
			if( 'pagination' === $atts['pagination'] ) {
				
				$max = $GLOBALS['wp_query']->max_num_pages;
		
				// Set up paginated links.
		        $links = paginate_links( array(
					'type' => 'array',
					'prev_next' => true,
					'prev_text' => '<span aria-hidden="true">' . wp_kses_post( __( '<i class="lqd-icn-ess icon-ion-ios-arrow-back"></i>', 'hub' ) ) . '</span>',
					'next_text' => '<span aria-hidden="true">' . wp_kses_post( __( '<i class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>', 'hub' ) ) . '</span>'
				) );
		
				if( !empty( $links ) ) {
					printf( '<div class="page-nav"><nav aria-label="'. esc_attr__( 'Page navigation', 'hub' ) .'"><ul class="pagination"><li>%s</li></ul></nav></div>', join( "</li>\n\t<li>", $links ) );
				}
			}
		echo '</div>';
	}
}
new Liquid_TagBlog;