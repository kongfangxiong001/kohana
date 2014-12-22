<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-22 09:48:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: hi ~ APPPATH\views\foobar\hello.php [ 3 ] in E:\htdocs\kohana\application\views\foobar\hello.php:3
2014-12-22 09:48:10 --- DEBUG: #0 E:\htdocs\kohana\application\views\foobar\hello.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\\htdocs\\kohan...', 3, Array)
#1 E:\htdocs\kohana\application\views\welcome\index.php(6): include('E:\\htdocs\\kohan...')
#2 E:\htdocs\kohana\system\classes\Kohana\View.php(61): include('E:\\htdocs\\kohan...')
#3 E:\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\\htdocs\\kohan...', Array)
#4 E:\htdocs\kohana\application\classes\Controller\Welcome.php(28): Kohana_View->render()
#5 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in E:\htdocs\kohana\application\views\foobar\hello.php:3
2014-12-22 09:51:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: hi ~ APPPATH\views\foobar\hello.php [ 3 ] in E:\htdocs\kohana\application\views\foobar\hello.php:3
2014-12-22 09:51:30 --- DEBUG: #0 E:\htdocs\kohana\application\views\foobar\hello.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\\htdocs\\kohan...', 3, Array)
#1 E:\htdocs\kohana\application\views\welcome\index.php(6): include('E:\\htdocs\\kohan...')
#2 E:\htdocs\kohana\system\classes\Kohana\View.php(61): include('E:\\htdocs\\kohan...')
#3 E:\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\\htdocs\\kohan...', Array)
#4 E:\htdocs\kohana\application\classes\Controller\Welcome.php(28): Kohana_View->render()
#5 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in E:\htdocs\kohana\application\views\foobar\hello.php:3
2014-12-22 13:42:24 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in E:\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2014-12-22 13:42:24 --- DEBUG: #0 E:\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 E:\htdocs\kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 E:\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in E:\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2014-12-22 13:42:38 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in E:\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2014-12-22 13:42:38 --- DEBUG: #0 E:\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 E:\htdocs\kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 E:\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in E:\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2014-12-22 13:48:40 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in E:\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2014-12-22 13:48:40 --- DEBUG: #0 E:\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 E:\htdocs\kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 E:\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in E:\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2014-12-22 13:49:10 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in E:\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2014-12-22 13:49:10 --- DEBUG: #0 E:\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 E:\htdocs\kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 E:\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in E:\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2014-12-22 13:49:21 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in E:\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2014-12-22 13:49:21 --- DEBUG: #0 E:\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 E:\htdocs\kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 E:\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in E:\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2014-12-22 13:49:38 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in E:\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2014-12-22 13:49:38 --- DEBUG: #0 E:\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 E:\htdocs\kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 E:\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in E:\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2014-12-22 13:49:58 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in E:\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2014-12-22 13:49:58 --- DEBUG: #0 E:\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 E:\htdocs\kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 E:\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in E:\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2014-12-22 13:50:01 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in E:\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2014-12-22 13:50:01 --- DEBUG: #0 E:\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 E:\htdocs\kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 E:\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in E:\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2014-12-22 13:50:11 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in E:\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2014-12-22 13:50:11 --- DEBUG: #0 E:\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 E:\htdocs\kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 E:\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in E:\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2014-12-22 13:50:41 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in E:\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2014-12-22 13:50:41 --- DEBUG: #0 E:\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session_name', NULL)
#1 E:\htdocs\kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session_name')
#2 E:\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in E:\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2014-12-22 13:50:45 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in E:\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2014-12-22 13:50:45 --- DEBUG: #0 E:\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session_name', NULL)
#1 E:\htdocs\kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session_name')
#2 E:\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in E:\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2014-12-22 13:55:39 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in E:\htdocs\kohana\application\bootstrap.php:137
2014-12-22 13:55:39 --- DEBUG: #0 E:\htdocs\kohana\application\bootstrap.php(137): Kohana_Cookie::salt('cookie_salt', 'kohana_salt')
#1 E:\htdocs\kohana\index.php(102): require('E:\\htdocs\\kohan...')
#2 {main} in E:\htdocs\kohana\application\bootstrap.php:137
2014-12-22 13:55:41 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in E:\htdocs\kohana\application\bootstrap.php:137
2014-12-22 13:55:41 --- DEBUG: #0 E:\htdocs\kohana\application\bootstrap.php(137): Kohana_Cookie::salt('cookie_salt', 'kohana_salt')
#1 E:\htdocs\kohana\index.php(102): require('E:\\htdocs\\kohan...')
#2 {main} in E:\htdocs\kohana\application\bootstrap.php:137
2014-12-22 13:55:43 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in E:\htdocs\kohana\application\bootstrap.php:137
2014-12-22 13:55:43 --- DEBUG: #0 E:\htdocs\kohana\application\bootstrap.php(137): Kohana_Cookie::salt('cookie_salt', 'kohana_salt')
#1 E:\htdocs\kohana\index.php(102): require('E:\\htdocs\\kohan...')
#2 {main} in E:\htdocs\kohana\application\bootstrap.php:137
2014-12-22 13:55:46 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in E:\htdocs\kohana\application\bootstrap.php:137
2014-12-22 13:55:46 --- DEBUG: #0 E:\htdocs\kohana\application\bootstrap.php(137): Kohana_Cookie::salt('cookie_salt', 'kohana_salt')
#1 E:\htdocs\kohana\index.php(102): require('E:\\htdocs\\kohan...')
#2 {main} in E:\htdocs\kohana\application\bootstrap.php:137
2014-12-22 13:55:48 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in E:\htdocs\kohana\application\bootstrap.php:137
2014-12-22 13:55:48 --- DEBUG: #0 E:\htdocs\kohana\application\bootstrap.php(137): Kohana_Cookie::salt('cookie_salt', 'kohana_salt')
#1 E:\htdocs\kohana\index.php(102): require('E:\\htdocs\\kohan...')
#2 {main} in E:\htdocs\kohana\application\bootstrap.php:137
2014-12-22 13:55:50 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in E:\htdocs\kohana\application\bootstrap.php:137
2014-12-22 13:55:50 --- DEBUG: #0 E:\htdocs\kohana\application\bootstrap.php(137): Kohana_Cookie::salt('cookie_salt', 'kohana_salt')
#1 E:\htdocs\kohana\index.php(102): require('E:\\htdocs\\kohan...')
#2 {main} in E:\htdocs\kohana\application\bootstrap.php:137
2014-12-22 13:55:51 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in E:\htdocs\kohana\application\bootstrap.php:137
2014-12-22 13:55:51 --- DEBUG: #0 E:\htdocs\kohana\application\bootstrap.php(137): Kohana_Cookie::salt('cookie_salt', 'kohana_salt')
#1 E:\htdocs\kohana\index.php(102): require('E:\\htdocs\\kohan...')
#2 {main} in E:\htdocs\kohana\application\bootstrap.php:137
2014-12-22 13:55:51 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in E:\htdocs\kohana\application\bootstrap.php:137
2014-12-22 13:55:51 --- DEBUG: #0 E:\htdocs\kohana\application\bootstrap.php(137): Kohana_Cookie::salt('cookie_salt', 'kohana_salt')
#1 E:\htdocs\kohana\index.php(102): require('E:\\htdocs\\kohan...')
#2 {main} in E:\htdocs\kohana\application\bootstrap.php:137
2014-12-22 13:55:52 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in E:\htdocs\kohana\application\bootstrap.php:137
2014-12-22 13:55:52 --- DEBUG: #0 E:\htdocs\kohana\application\bootstrap.php(137): Kohana_Cookie::salt('cookie_salt', 'kohana_salt')
#1 E:\htdocs\kohana\index.php(102): require('E:\\htdocs\\kohan...')
#2 {main} in E:\htdocs\kohana\application\bootstrap.php:137
2014-12-22 13:55:53 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in E:\htdocs\kohana\application\bootstrap.php:137
2014-12-22 13:55:53 --- DEBUG: #0 E:\htdocs\kohana\application\bootstrap.php(137): Kohana_Cookie::salt('cookie_salt', 'kohana_salt')
#1 E:\htdocs\kohana\index.php(102): require('E:\\htdocs\\kohan...')
#2 {main} in E:\htdocs\kohana\application\bootstrap.php:137
2014-12-22 14:11:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: session ~ APPPATH\classes\Controller\Foobar.php [ 85 ] in E:\htdocs\kohana\application\classes\Controller\Foobar.php:85
2014-12-22 14:11:11 --- DEBUG: #0 E:\htdocs\kohana\application\classes\Controller\Foobar.php(85): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\\htdocs\\kohan...', 85, Array)
#1 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Foobar->Action_d()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Foobar))
#4 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\htdocs\kohana\application\classes\Controller\Foobar.php:85
2014-12-22 15:40:32 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Fragment::load(), called in E:\htdocs\kohana\application\classes\Controller\Foobar.php on line 95 and defined ~ SYSPATH\classes\Kohana\Fragment.php [ 77 ] in E:\htdocs\kohana\system\classes\Kohana\Fragment.php:77
2014-12-22 15:40:32 --- DEBUG: #0 E:\htdocs\kohana\system\classes\Kohana\Fragment.php(77): Kohana_Core::error_handler(2, 'Missing argumen...', 'E:\\htdocs\\kohan...', 77, Array)
#1 E:\htdocs\kohana\application\classes\Controller\Foobar.php(95): Kohana_Fragment::load()
#2 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Foobar->Action_dd()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Foobar))
#5 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\htdocs\kohana\system\classes\Kohana\Fragment.php:77
2014-12-22 15:43:15 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Fragment::load(), called in E:\htdocs\kohana\application\classes\Controller\Foobar.php on line 95 and defined ~ SYSPATH\classes\Kohana\Fragment.php [ 77 ] in E:\htdocs\kohana\system\classes\Kohana\Fragment.php:77
2014-12-22 15:43:15 --- DEBUG: #0 E:\htdocs\kohana\system\classes\Kohana\Fragment.php(77): Kohana_Core::error_handler(2, 'Missing argumen...', 'E:\\htdocs\\kohan...', 77, Array)
#1 E:\htdocs\kohana\application\classes\Controller\Foobar.php(95): Kohana_Fragment::load()
#2 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Foobar->Action_dd()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Foobar))
#5 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\htdocs\kohana\system\classes\Kohana\Fragment.php:77
2014-12-22 15:59:15 --- CRITICAL: ErrorException [ 2 ]: Division by zero ~ SYSPATH\views\profiler\stats.php [ 38 ] in E:\htdocs\kohana\system\views\profiler\stats.php:38
2014-12-22 15:59:15 --- DEBUG: #0 E:\htdocs\kohana\system\views\profiler\stats.php(38): Kohana_Core::error_handler(2, 'Division by zer...', 'E:\\htdocs\\kohan...', 38, Array)
#1 E:\htdocs\kohana\system\classes\Kohana\View.php(61): include('E:\\htdocs\\kohan...')
#2 E:\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\\htdocs\\kohan...', Array)
#3 E:\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 E:\htdocs\kohana\application\classes\Controller\Foobar.php(131): Kohana_View->__toString()
#5 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Foobar->Action_pi()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Foobar))
#8 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in E:\htdocs\kohana\system\views\profiler\stats.php:38
2014-12-22 15:59:17 --- CRITICAL: ErrorException [ 2 ]: Division by zero ~ SYSPATH\views\profiler\stats.php [ 38 ] in E:\htdocs\kohana\system\views\profiler\stats.php:38
2014-12-22 15:59:17 --- DEBUG: #0 E:\htdocs\kohana\system\views\profiler\stats.php(38): Kohana_Core::error_handler(2, 'Division by zer...', 'E:\\htdocs\\kohan...', 38, Array)
#1 E:\htdocs\kohana\system\classes\Kohana\View.php(61): include('E:\\htdocs\\kohan...')
#2 E:\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\\htdocs\\kohan...', Array)
#3 E:\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 E:\htdocs\kohana\application\classes\Controller\Foobar.php(131): Kohana_View->__toString()
#5 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Foobar->Action_pi()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Foobar))
#8 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in E:\htdocs\kohana\system\views\profiler\stats.php:38
2014-12-22 15:59:31 --- CRITICAL: ErrorException [ 2 ]: Division by zero ~ SYSPATH\views\profiler\stats.php [ 38 ] in E:\htdocs\kohana\system\views\profiler\stats.php:38
2014-12-22 15:59:31 --- DEBUG: #0 E:\htdocs\kohana\system\views\profiler\stats.php(38): Kohana_Core::error_handler(2, 'Division by zer...', 'E:\\htdocs\\kohan...', 38, Array)
#1 E:\htdocs\kohana\system\classes\Kohana\View.php(61): include('E:\\htdocs\\kohan...')
#2 E:\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\\htdocs\\kohan...', Array)
#3 E:\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 E:\htdocs\kohana\application\classes\Controller\Foobar.php(131): Kohana_View->__toString()
#5 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Foobar->Action_pi()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Foobar))
#8 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in E:\htdocs\kohana\system\views\profiler\stats.php:38
2014-12-22 16:08:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: error_level ~ SYSPATH\classes\Kohana\Feed.php [ 49 ] in E:\htdocs\kohana\system\classes\Kohana\Feed.php:49
2014-12-22 16:08:28 --- DEBUG: #0 E:\htdocs\kohana\system\classes\Kohana\Feed.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\\htdocs\\kohan...', 49, Array)
#1 E:\htdocs\kohana\application\classes\Controller\Foobar.php(109): Kohana_Feed::parse('http://en.wikip...', 50)
#2 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Foobar->Action_feed()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Foobar))
#5 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\htdocs\kohana\system\classes\Kohana\Feed.php:49
2014-12-22 16:27:58 --- CRITICAL: ErrorException [ 2 ]: Division by zero ~ SYSPATH\views\profiler\stats.php [ 38 ] in E:\htdocs\kohana\system\views\profiler\stats.php:38
2014-12-22 16:27:58 --- DEBUG: #0 E:\htdocs\kohana\system\views\profiler\stats.php(38): Kohana_Core::error_handler(2, 'Division by zer...', 'E:\\htdocs\\kohan...', 38, Array)
#1 E:\htdocs\kohana\system\classes\Kohana\View.php(61): include('E:\\htdocs\\kohan...')
#2 E:\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\\htdocs\\kohan...', Array)
#3 E:\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 E:\htdocs\kohana\application\classes\Controller\Foobar.php(149): Kohana_View->__toString()
#5 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Foobar->Action_foo()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Foobar))
#8 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in E:\htdocs\kohana\system\views\profiler\stats.php:38
2014-12-22 16:28:21 --- CRITICAL: ErrorException [ 2 ]: Division by zero ~ SYSPATH\views\profiler\stats.php [ 38 ] in E:\htdocs\kohana\system\views\profiler\stats.php:38
2014-12-22 16:28:21 --- DEBUG: #0 E:\htdocs\kohana\system\views\profiler\stats.php(38): Kohana_Core::error_handler(2, 'Division by zer...', 'E:\\htdocs\\kohan...', 38, Array)
#1 E:\htdocs\kohana\system\classes\Kohana\View.php(61): include('E:\\htdocs\\kohan...')
#2 E:\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\\htdocs\\kohan...', Array)
#3 E:\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 E:\htdocs\kohana\application\classes\Controller\Foobar.php(149): Kohana_View->__toString()
#5 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Foobar->Action_foo()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Foobar))
#8 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in E:\htdocs\kohana\system\views\profiler\stats.php:38
2014-12-22 16:28:56 --- CRITICAL: ErrorException [ 2 ]: Division by zero ~ SYSPATH\views\profiler\stats.php [ 38 ] in E:\htdocs\kohana\system\views\profiler\stats.php:38
2014-12-22 16:28:56 --- DEBUG: #0 E:\htdocs\kohana\system\views\profiler\stats.php(38): Kohana_Core::error_handler(2, 'Division by zer...', 'E:\\htdocs\\kohan...', 38, Array)
#1 E:\htdocs\kohana\system\classes\Kohana\View.php(61): include('E:\\htdocs\\kohan...')
#2 E:\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\\htdocs\\kohan...', Array)
#3 E:\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 E:\htdocs\kohana\application\classes\Controller\Foobar.php(151): Kohana_View->__toString()
#5 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Foobar->Action_foo()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Foobar))
#8 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in E:\htdocs\kohana\system\views\profiler\stats.php:38