<?php
if (!defined('IN')) die('bad request');
include_once( AROOT . 'controller'.DS.'app.class.php' );

class userController extends appController
{
	function __construct()
	{
		parent::__construct(); 
	}

    function show()
    {
	    $uid =  intval($_REQUEST['uid']);

	    if( $uid < 1 ) return info_page(‘错误的uid’);

	    $data['user'] = get_user_info_by_id(  $uid  );

	    render( $data );
    }

	function login()
	{

	}

	function register()
	{

	}

	function logout()
	{

	}

	function detail()
	{

	}
}