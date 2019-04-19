<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?> 
</head>

<body>
    <header> 
    <nav class="navbar navbar-expand-lg navbar-light bg-black">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <?php wp_nav_menu( array(
            'menu_class'        => "navbar-nav", 
            'menu_id'           => " ",  
            'container'         => NULL, 
            'fallback_cb'       => false, 
            'theme_location'    => "header-menu" 
        ) ); ?>
        </div>    
    </header>  
    <div>    
   