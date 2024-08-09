<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tanki
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanki online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
</head>
<body>
    
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <a href="/">
                        <img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/tank_logo.svg" alt="лого">
                    </a>
                </div>
                <div class="col-6 col-lg-4"><a class="page-mainlink" href="/">Главная</a></div>
                <div class="col-6 col-lg-4" style="padding:0;display: flex;"><?php get_search_form(); ?></div>
            </div>
        </div>
    </header>