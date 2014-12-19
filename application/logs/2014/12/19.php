<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-19 11:04:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: path ~ SYSPATH\classes\Kohana\Config.php [ 138 ] in E:\htdocs\kohana\system\classes\Kohana\Config.php:138
2014-12-19 11:04:19 --- DEBUG: #0 E:\htdocs\kohana\system\classes\Kohana\Config.php(138): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\\htdocs\\kohan...', 138, Array)
#1 E:\htdocs\kohana\application\classes\Controller\Welcome.php(38): Kohana_Config->load('myconf')
#2 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\htdocs\kohana\system\classes\Kohana\Config.php:138
2014-12-19 11:05:26 --- CRITICAL: ErrorException [ 4096 ]: Object of class Config_File could not be converted to string ~ SYSPATH\classes\Kohana\Config.php [ 129 ] in E:\htdocs\kohana\system\classes\Kohana\Config.php:129
2014-12-19 11:05:26 --- DEBUG: #0 E:\htdocs\kohana\system\classes\Kohana\Config.php(129): Kohana_Core::error_handler(4096, 'Object of class...', 'E:\\htdocs\\kohan...', 129, Array)
#1 E:\htdocs\kohana\application\classes\Controller\Welcome.php(38): Kohana_Config->load('myconf')
#2 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\htdocs\kohana\system\classes\Kohana\Config.php:129
2014-12-19 11:13:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\Welcome.php [ 39 ] in file:line
2014-12-19 11:13:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-19 14:14:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\Welcome.php [ 48 ] in file:line
2014-12-19 14:14:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-19 14:17:19 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\Welcome.php [ 48 ] in file:line
2014-12-19 14:17:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-19 14:17:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\Welcome.php [ 48 ] in file:line
2014-12-19 14:17:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-19 14:17:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\Welcome.php [ 48 ] in file:line
2014-12-19 14:17:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-19 17:19:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: hi ~ APPPATH\views\foobar\hello.php [ 3 ] in E:\htdocs\kohana\application\views\foobar\hello.php:3
2014-12-19 17:19:30 --- DEBUG: #0 E:\htdocs\kohana\application\views\foobar\hello.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\\htdocs\\kohan...', 3, Array)
#1 E:\htdocs\kohana\application\views\welcome\index.php(6): include('E:\\htdocs\\kohan...')
#2 E:\htdocs\kohana\system\classes\Kohana\View.php(61): include('E:\\htdocs\\kohan...')
#3 E:\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\\htdocs\\kohan...', Array)
#4 E:\htdocs\kohana\application\classes\Controller\Welcome.php(29): Kohana_View->render()
#5 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in E:\htdocs\kohana\application\views\foobar\hello.php:3