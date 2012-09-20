<?php
if (!defined('IN')) die('bad request');
include_once ( AROOT . 'controller'.DS.'app.class.php' );

class otherController extends appController
{
	function index()
	{
		echo "other class index function";
	}

	function aa()
	{
		echo "other class aa function";
	}
}