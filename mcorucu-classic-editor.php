<?php
/*
Plugin Name: mcorucu's Classic Editor
Description: Enables the use of the classic editor in WordPress
Version: 1.0
Author: mcorucu
*/

add_filter( 'use_block_editor_for_post_type', '__return_false', 10 );
