<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {
//	public function before()
//	{
//		echo "I am before function!\r\n";
//	}
//	
//    public function after()
//    {
//        echo 'I am after function!\r\n';
//    }

	public function action_index()
	{
		$hello = "hello,world";
//		$this->response->body(View::factory('welcome/index')->set('hello',$hello));

		 /**
		  *  $view->errors = 'Invalid email or password';
		  */
		$view = View::factory('welcome/index');
		$view->set('hello',$hello);
		$view->errors = "invalid message!";
		$woman = "祸水";
		$view->set('tmd',$woman);
		$woman = "huoshui";
		$view_render = $view->render();
		$view_render = ( string )$view_render;
		
//		$page_title = "hi";
//		View::bind_global('page_title', $page_title);
		
		$this->response->body($view);
	}
	public function action_show(){
		$config = Kohana::$config->load('myconf.options');
//        $options = $config->get('options');
        print_r($config);
	}
	public function action_message(){
//		$foobar_message = Kohana::message('forms');
//		print_r($foobar_message);
		
//		Kohana::message('forms/contact', 'foobar.bar');

		
		$config = Kohana::$config->load('myconf');
		print_r($config->get('options'));
	}
	
} // End Welcome
