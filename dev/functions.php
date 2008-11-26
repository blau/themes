<?php

function header_blueprint() { // PUTS STUFF IN THE HEADER theme name is hardcoded ?>
        <link rel="stylesheet" href="<?php bloginfo("wpurl"); ?>/wp-content/themes/dev/blueprint/print.css" type="text/css" media="print" />
        <!--[if IE]><link rel="stylesheet" href="<?php bloginfo("wpurl"); ?>/wp-content/themes/dev/blueprint/ie.css" type="text/css" media="screen, projection" /><![endif]-->  

<?php } // END header_blueprint

//add a link to home page in the menu
function sandbox_globalnav_home() {
    $menu = '<div id="menu"><ul>';
    if ( is_home() ) {
        $menu .= '<li class="current_page_item"><a href="';
    }
    else {
         $menu .= '<li><a href="';
    }
    $menu .= get_option('home') . '/" title="Home">Home</a></li>';
    $menu .= str_replace( array( "\r", "\n", "\t" ), '', wp_list_pages('title_li=&sort_column=menu_order&echo=0') );
    $menu .= "</ul></div>\n";
    echo $menu;
}

add_filter('globalnav_menu', 'sandbox_globalnav_home' );
add_action('wp_head', 'header_blueprint');
?>
