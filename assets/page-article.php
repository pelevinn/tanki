<?php

    // Template name: Article

    // Template Post Type: post, pages
    // $display_none = "style='display: none'";
    $display_none = get_field("titlesale") == NULL ? "style='display: none'" : "";
?>

<?php get_header();?>

<main id="primary" class="site-main">
		<div class="container">
			<div class="row">
                <div class="article">
                    
                    <div class="article-wrap">
                        <div class="article-wrap__img">
                            <img src="<?php the_field("main_image")?>" alt="image">
                        </div>
                        <div class="article-wrap__tag">
                            <span><?php the_field("teg")?></span>
                        </div>
                        <div class="article-wrap__title">
                            <h1><?php the_field("h1_title")?></h1>
                        </div>
                        <div class="article-wrap__date">
                            <?php the_field("date")?>
                        </div>
                    </div>
                    <div class="article-info">
                        <?php the_field("content")?>
                        <div class="article-sales">
                            
                        <div class="article-sales__title"><?php the_field("titlesale")?></div>
                            <div <?=$display_none?> class="article-coupon">
                                <div class="article-coupon__sale">-<?php the_field("sale")?>%</div>
                                <div class="article-coupon__info">
                                    <div class="article-coupon__text"><?php the_field("coupon-info")?></div>
                                    <div class="article-coupon__icons">
                                        <img src="<?php the_field("crystal")?>" alt="image">
                                        <img src="<?php the_field("star")?>" alt="image">
                                        <img src="<?php the_field("kits")?>" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </main>
<?php get_footer();?>