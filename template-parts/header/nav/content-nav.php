<?php
    $qumodo_header_layout = qumodo_opt('qumodo_header_layout', 'container'); 
    $qumodo_menu_layout = qumodo_opt('qumodo_menu_layout', 'center'); 
?>

<nav class="navbar navbar-expand-lg menu_one">
    <div class="<?php if($qumodo_header_layout == 'container'){echo "container";}else{echo "container-fluid";} ?>">
        <?php qumodo_logo(); ?>
        <div class="collapse navbar-collapse <?php if($qumodo_menu_layout == 'center'){echo "justify-content-center";}elseif($qumodo_menu_layout == 'start'){echo "justify-content-start";}else{echo "justify-content-end";} ?>" id="navbarSupportedContent">
            <?php 
                wp_nav_menu( array(
                        'menu_class' => 'navbar-nav menu',
                        'container'  => '',
                        'theme_location' => 'main_menu',
                        'walker'         => new qumodo_Navwalker(),
                        'fallback_cb'     => false,
                ) );
            ?>
        </div>
        <?php if(class_exists( 'Redux' ) ) { ?>
            <?php  get_template_part( 'template-parts/header/nav/content-nav', 'serch'); ?>
       <?php } ?>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
            <span></span><span></span><span></span><span></span><span></span><span></span>
        </button>
    </div>
</nav>