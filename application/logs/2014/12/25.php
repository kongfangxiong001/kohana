<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-25 16:54:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: hi ~ APPPATH\views\foobar\hello.php [ 3 ] in E:\htdocs\kohana\application\views\foobar\hello.php:3
2014-12-25 16:54:34 --- DEBUG: #0 E:\htdocs\kohana\application\views\foobar\hello.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\\htdocs\\kohan...', 3, Array)
#1 E:\htdocs\kohana\application\views\welcome\index.php(6): include('E:\\htdocs\\kohan...')
#2 E:\htdocs\kohana\system\classes\Kohana\View.php(61): include('E:\\htdocs\\kohan...')
#3 E:\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\\htdocs\\kohan...', Array)
#4 E:\htdocs\kohana\application\classes\Controller\Welcome.php(28): Kohana_View->render()
#5 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\htdocs\kohana\system\classes\Kohana\Request.php(999): Kohana_Request_Client->execute(Object(Request))
#10 E:\htdocs\kohana\index.php(119): Kohana_Request->execute()
#11 {main} in E:\htdocs\kohana\application\views\foobar\hello.php:3
2014-12-25 16:54:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: hi ~ APPPATH\views\foobar\hello.php [ 3 ] in E:\htdocs\kohana\application\views\foobar\hello.php:3
2014-12-25 16:54:46 --- DEBUG: #0 E:\htdocs\kohana\application\views\foobar\hello.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\\htdocs\\kohan...', 3, Array)
#1 E:\htdocs\kohana\application\views\welcome\index.php(6): include('E:\\htdocs\\kohan...')
#2 E:\htdocs\kohana\system\classes\Kohana\View.php(61): include('E:\\htdocs\\kohan...')
#3 E:\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\\htdocs\\kohan...', Array)
#4 E:\htdocs\kohana\application\classes\Controller\Welcome.php(28): Kohana_View->render()
#5 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\htdocs\kohana\system\classes\Kohana\Request.php(999): Kohana_Request_Client->execute(Object(Request))
#10 E:\htdocs\kohana\index.php(119): Kohana_Request->execute()
#11 {main} in E:\htdocs\kohana\application\views\foobar\hello.php:3