<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Sub_Hello extends Controller{
	public function Action_hello()
	{
		$hello = "hello Value";
		$this->response->body(View::factory('sub/hello/hello')->set('hello',$hello));
	}
}