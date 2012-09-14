<?php
function show(){
	$uid =  intval($_REQUEST['uid']);
	if( $uid < 1 ) return info_page(‘错误的uid’);
	$data['user'] = get_user_info_by_id(  $uid  );
	render( $data );
}