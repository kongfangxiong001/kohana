<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Foobar extends Controller{
	public function before()
	{
		echo 'hi,im before';
	}
	public function Action_hello()
	{
//		print_r($this->request->action());
//		echo "<br/>";
//		print_r( $this->request->response);
//        $param = $this->request->param();
        $hi_value = "hiValue";
		$this->response->body(View::factory('foobar/hello')->set('hi',$hi_value));
	}
    public function after()
    {
        echo 'hi,im after.'."|||";
    }
    public function Action_hi()
    {
    	$view = View::factory("foobar/hi");
    	$view->title = "my title";
//    	$view->body = View::factory('foobar/hello');
//    	$view->body->hi = 'hiValue';
//    	echo ( string )$view;
//        Hello::magic();
//        Professor_Baxter::teach();
//        print_r(Kohana::$config);
    }
//    public function Action_pdf()
//    {
//        require Kohana::find_file('vendor', 'dompdf/dompdf/dompdf_config','inc');
//        $pdf = new DOMPDf;
//    } 
}
