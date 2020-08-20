<?php
function theme_menus(){
    register_nav_menus([
        'primary_trvl' => 'Main Menu Travelo',
        'secondary_trvl' => 'Secondary Menu Travelo',
        'quick_links_trvl' => 'Quick Links Travelo'
    ]);
}