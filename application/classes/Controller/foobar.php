<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Foobar extends Controller{
//	public function before()
//	{
//		echo 'hi,im before';
//	}
	public function Action_hello()
	{
//		print_r($this->request->action());
//		echo "<br/>";
//		print_r( $this->request->response);
//        $param = $this->request->param();
        $hi_value = "hiValue";
		$this->response->body(View::factory('foobar/hello')->set('hi',$hi_value));
	}
//    public function after()
//    {
//        echo 'hi,im after.'."|||";
//    }
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
    public function Action_debug(){
//    	$k = Kohana;
//    	$a = array('a','b','c');
//    	echo Debug::vars($a);
//    	echo Debug::source(__FILE__,__LINE__,10);
//    	echo Debug::path(SYSPATH."cache");
//    	echo realpath(__FILE__);
//    	echo Kohana::find_file("classes/Controller","Foobar");
    	echo ini_get('include_path')."\r\n";
    	ini_set('include_path',
        ini_get('include_path').PATH_SEPARATOR.dirname(dirname(__FILE__)));
        echo ini_get('include_path')."\r\n";
        echo PATH_SEPARATOR;
//        echo Kohana::auto_load("Controller_Welcome");
//        echo Kohana::find_file("classes\\controller", "welcome");
        
        Request::factory('welcome');
    } 
    
    public function Action_d(){
//        echo $request = Request::factory('welcome');
//        echo $request->uri()."<br/>";
//        echo Request::initial()->uri();
//        echo Request::current()->uri();
//        if($this->request->is_initial()){
//        	echo 'yes';
//        }else{
//        	echo 'no';
//        }
//          $request = Request::factory('http://ww.kfxiong.com/ceshi/post_api.php',array(
//            'header_callbacks' => array(
//		        'Content-Encoding' =>
//		            function (Request $request, Response $response, Request_Client $client)
//		            {
//		                // Uncompress the response
//		                $response->body("aaaa");
//		            })
//          ))->method(Request::POST)->post(array('foo' => 'bar', 'bar' => 'baz'));
//          $request->execute();
////          print_r($request);
//          print_r($this->response->body());

    	
            $key = 'keys';
            $value = 'value';
            $hello  = 'hello';
            $world = "world";
//            $session = Session::instance();
//            $session->set($key, $value);
//            echo $session->get($key);
           $default_value = "pigger";
           $session = Session::instance('native');
    	   $_SESSION = &$session->as_array();
    	   print_r($_SESSION);
    	   Cookie::set($hello, $world);
    	   $data = Cookie::get('pig', $default_value);
    	   echo $data;
    }
    public function Action_dd(){
    	 if(!Fragment::load('dd'))
    	 {
    	    echo 'load';
            Fragment::save();	
    	 }
    } 
    public function Action_feed(){
		$feed = "http://en.wikipedia.org/w/index.php?title=Special:RecentChanges&feed=rss";
		$limit = 50;
		 
		// Displayed feeds are cached for 30 seconds (default)
//		if ( ! Fragment::load('rss:'.$feed)):
		 
		    // Parse the feed
		    $items = Feed::parse($feed, $limit);
		    foreach ($items as $item):
		          
		        // Convert $item to object
		        $item = (object) $item;
		 
		        echo HTML::anchor($item->link,$item->title);
		 
		        ?>
		        <blockquote>
		            <p>author: <?php echo $item->creator ?></p>
		            <p>date: <?php echo $item->pubDate ?></p>
		        </blockquote>
		        <?php
		 
		    endforeach;
		 
//		    Fragment::save();
		 
//		endif;
		
//		echo View::factory('profiler/stats');
    }
    

	public function Action_foo()
	{
	    // Be sure to only profile if it's enabled
	    if (Kohana::$profiling === TRUE)
	    {
	        // Start a new benchmark
	        $benchmark = Profiler::start('my_group', __FUNCTION__);
	    }
	    for($i=0;$i<1000000;$i++){
	    	echo $i;
	    }
	    // Do some stuff
	    if (isset($benchmark))
	    {
	        // Stop the benchmark
	        Profiler::stop($benchmark);
	    }
	    echo View::factory('profiler/stats');
	}
    
    public function Action_fo()
    {
        $object = Validation::factory($array);
//        $object->rule($field, $callback, array($parameter1, $parameter2));
//        $object->rule($field, 'not_empty');
          $object->rule('number', 'phone');
    }
}
