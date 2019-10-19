<?php

//add_filter( 'prince_radio_images', [ $this, 'template_layout_images' ], 10, 2 );
//add_filter( 'prince_header_version_text', [ $this, 'settings_version_text' ] );
//add_filter( 'prince_header_logo_link', [ $this, 'settings_page_logo' ] );
//add_filter( 'prince_settings_parent_slug', 'prince_settings_menu' );

function prince_settings_menu(){
	return 'themes.php';
}
