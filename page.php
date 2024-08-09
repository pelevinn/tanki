<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tanki
 */

get_header();

?>
	<main id="primary" class="site-main">
		<div class="container">
			<div class="row">
                <div class="posts">

				<?php
				
				$my_posts = get_posts( array(
					'numberposts' => -1,
					'category'    => 'news',
					'orderby'     => 'date',
					'order'       => 'ASC',
					'include'     => array(),
					'exclude'     => array(),
					'meta_key'    => '',
					'meta_value'  =>'',
					'post_type'   => 'post',
					'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
				) );

				global $post;

				foreach( $my_posts as $post ){
					// echo getLink( get_the_category()[0]->name );
					setup_postdata( $post );?>
						<div class="post">
							<div class="post-image">
								<img src="<?php the_field("main_image")?>" alt="image">
							</div>
							<div class="post-info">
								<div class="post-date"><?php the_field("date")?></div>
								<div class="post-category"><?php echo get_the_category()[0]->name?></div>
							</div>
							<div class="post-name">
								<div class="post-title"><?php the_field("h1_title")?></div>
							</div>
							<div class="post-link">
								<a target="blanc" <?=getLink( get_the_category()[0]->name )?> href="<?php echo get_permalink();?>"></a>
							</div>
						</div>
					<?php
					// формат вывода the_title() ...
				}

				wp_reset_postdata();

				?>

				</div>
			</div>
		</div>
	</main>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <iframe id="videoPlayer" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
<?php
get_footer();
