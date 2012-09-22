<?php
if( !defined('IN') ) die('bad request');
include_once( AROOT . 'controller'.DS.'app.class.php' );

class defaultController extends appController
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['title'] = $data['top_title'] = '首页';
		render( $data );
		
		//debug
		echo "$data";
		echo " by echo <br />";
		print_r($data);
		echo " by pring_r <br />";
		var_dump($data);
		echo " by var_dump <br />";
		var_export($data);
		echo " by var_export <br />";
		debug_zval_dump($data);
		echo " by debug_zval_dump <br />";
		debug_print_backtrace();
		echo " by debug_pring_backtrace <br />";
		include_once('FirePHPCore/fb.php');  
		FB::log($data);
	}
	
	function ajax_test()
	{
		return ajax_echo('1234');
	}
	
	function rest()
	{
		$data = array(  );
		if( intval(v('o')) == 1 )
		{
			$data['code'] = 123;
			$data['message'] = 'RPWT';
		}
		else
		{
			$data['code'] = 0 ;
			$data['data'] = array( '2' , '4' , '6' , '8' ); 
		}
		
		render( $data , 'rest' );
	}
	
	function mobile()
	{
		$data['title'] = $data['top_title'] = 'JQMobi';
		render( $data , 'mobile' );
	}
	
	function ajax_load()
	{
		date_default_timezone_set('Asia/Chongqing');
		return ajax_echo('Hello ' . date("Y-m-d H:i:s"));
	}
	
	function about()
	{
		return info_page( "ftqq.com 荣誉出品" , "About" );
	}
	
	function contact()
	{
		return info_page( "Sina Weibo - <a href='http://weibo.com/easy' target='_blank'>@Easy</a> |  Twitter - @Easychen" , "Follow Me" );
	}
	
	function test()
	{
		$data['title'] = $data['top_title'] = '自动测试页';
		$data['info'] = '根据访问来源自动切换Layout';
		
		return render( $data );
	}
	
	function sql()
	{
		db();
		echo $sql = prepare( "SELECT * FROM `user` WHERE `name` = ?s AND `uid` = ?i AND `level` = ?s LIMIT 1" , array( "Easy'" , '-1', '9.56' ) );	
	}
    
}
	