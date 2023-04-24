<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
    <title>minimal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="/js/script.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600;800&display=swap" rel="stylesheet">
<?php wp_head() ?>
</head>
<body>

    <div class="wrapper">
        <header class="header">
                <div class="header__row">
                    <div class="header__left">
                        <div class="header__img"><a href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a> <img src="img/Icon.png" alt=""></div>
                        <div class="header__header">Minimal</div>
                    </div>
                    <div class="menu-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    
                    <div class="header__right">
                    <?php wp_nav_menu(array(
                        'container'=> null,
                        'theme_location' => 'primary',
                        'menu_class' => 'headerMenu',
                    ));?>
                    </div>
                </div>
        </header>