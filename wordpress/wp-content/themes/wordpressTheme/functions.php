<?php 
	add_action("get_header", "remove_admin_login_header");
	function remove_admin_login_header() {
		remove_action("wp_head", "_admin_bar_dump_cb"); 
	}

	add_filter("show_admin_bar", "test");
	function test() {
		return false;
	}
?>