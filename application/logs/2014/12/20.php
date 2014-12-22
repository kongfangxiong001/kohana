<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-20 08:59:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: hi ~ APPPATH\views\foobar\hello.php [ 3 ] in E:\htdocs\kohana\application\views\foobar\hello.php:3
2014-12-20 08:59:19 --- DEBUG: #0 E:\htdocs\kohana\application\views\foobar\hello.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\\htdocs\\kohan...', 3, Array)
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
2014-12-20 10:04:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: hi ~ APPPATH\views\foobar\hello.php [ 3 ] in E:\htdocs\kohana\application\views\foobar\hello.php:3
2014-12-20 10:04:15 --- DEBUG: #0 E:\htdocs\kohana\application\views\foobar\hello.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\\htdocs\\kohan...', 3, Array)
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
2014-12-20 14:11:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: hi ~ APPPATH\views\foobar\hello.php [ 3 ] in E:\htdocs\kohana\application\views\foobar\hello.php:3
2014-12-20 14:11:55 --- DEBUG: #0 E:\htdocs\kohana\application\views\foobar\hello.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\\htdocs\\kohan...', 3, Array)
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
2014-12-20 14:13:59 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant Kohana - assumed 'Kohana' ~ APPPATH\classes\Controller\Foobar.php [ 37 ] in E:\htdocs\kohana\application\classes\Controller\Foobar.php:37
2014-12-20 14:13:59 --- DEBUG: #0 E:\htdocs\kohana\application\classes\Controller\Foobar.php(37): Kohana_Core::error_handler(8, 'Use of undefine...', 'E:\\htdocs\\kohan...', 37, Array)
#1 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Foobar->Action_debug()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Foobar))
#4 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\htdocs\kohana\application\classes\Controller\Foobar.php:37
2014-12-20 14:15:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Debug::sourc() ~ APPPATH\classes\Controller\Foobar.php [ 40 ] in file:line
2014-12-20 14:15:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-20 14:15:43 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_Debug::source(), called in E:\htdocs\kohana\application\classes\Controller\Foobar.php on line 40 and defined ~ SYSPATH\classes\Kohana\Debug.php [ 284 ] in E:\htdocs\kohana\system\classes\Kohana\Debug.php:284
2014-12-20 14:15:43 --- DEBUG: #0 E:\htdocs\kohana\system\classes\Kohana\Debug.php(284): Kohana_Core::error_handler(2, 'Missing argumen...', 'E:\\htdocs\\kohan...', 284, Array)
#1 E:\htdocs\kohana\application\classes\Controller\Foobar.php(40): Kohana_Debug::source('E:\\htdocs\\kohan...')
#2 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Foobar->Action_debug()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Foobar))
#5 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\htdocs\kohana\system\classes\Kohana\Debug.php:284
2014-12-20 14:17:17 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_Debug::source(), called in E:\htdocs\kohana\application\classes\Controller\Foobar.php on line 40 and defined ~ SYSPATH\classes\Kohana\Debug.php [ 284 ] in E:\htdocs\kohana\system\classes\Kohana\Debug.php:284
2014-12-20 14:17:17 --- DEBUG: #0 E:\htdocs\kohana\system\classes\Kohana\Debug.php(284): Kohana_Core::error_handler(2, 'Missing argumen...', 'E:\\htdocs\\kohan...', 284, Array)
#1 E:\htdocs\kohana\application\classes\Controller\Foobar.php(40): Kohana_Debug::source(40)
#2 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Foobar->Action_debug()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Foobar))
#5 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\htdocs\kohana\system\classes\Kohana\Debug.php:284
2014-12-20 14:17:26 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_Debug::source(), called in E:\htdocs\kohana\application\classes\Controller\Foobar.php on line 40 and defined ~ SYSPATH\classes\Kohana\Debug.php [ 284 ] in E:\htdocs\kohana\system\classes\Kohana\Debug.php:284
2014-12-20 14:17:26 --- DEBUG: #0 E:\htdocs\kohana\system\classes\Kohana\Debug.php(284): Kohana_Core::error_handler(2, 'Missing argumen...', 'E:\\htdocs\\kohan...', 284, Array)
#1 E:\htdocs\kohana\application\classes\Controller\Foobar.php(40): Kohana_Debug::source('E:\\htdocs\\kohan...')
#2 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Foobar->Action_debug()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Foobar))
#5 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\htdocs\kohana\system\classes\Kohana\Debug.php:284
2014-12-20 14:18:56 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant APPATH - assumed 'APPATH' ~ APPPATH\classes\Controller\Foobar.php [ 42 ] in E:\htdocs\kohana\application\classes\Controller\Foobar.php:42
2014-12-20 14:18:56 --- DEBUG: #0 E:\htdocs\kohana\application\classes\Controller\Foobar.php(42): Kohana_Core::error_handler(8, 'Use of undefine...', 'E:\\htdocs\\kohan...', 42, Array)
#1 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Foobar->Action_debug()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Foobar))
#4 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\htdocs\kohana\application\classes\Controller\Foobar.php:42
2014-12-20 14:23:27 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant NAMA - assumed 'NAMA' ~ APPPATH\classes\Controller\Foobar.php [ 41 ] in E:\htdocs\kohana\application\classes\Controller\Foobar.php:41
2014-12-20 14:23:27 --- DEBUG: #0 E:\htdocs\kohana\application\classes\Controller\Foobar.php(41): Kohana_Core::error_handler(8, 'Use of undefine...', 'E:\\htdocs\\kohan...', 41, Array)
#1 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Foobar->Action_debug()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Foobar))
#4 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\htdocs\kohana\application\classes\Controller\Foobar.php:41
2014-12-20 14:40:03 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_Core::find_file(), called in E:\htdocs\kohana\application\classes\Controller\Foobar.php on line 43 and defined ~ SYSPATH\classes\Kohana\Core.php [ 649 ] in E:\htdocs\kohana\system\classes\Kohana\Core.php:649
2014-12-20 14:40:03 --- DEBUG: #0 E:\htdocs\kohana\system\classes\Kohana\Core.php(649): Kohana_Core::error_handler(2, 'Missing argumen...', 'E:\\htdocs\\kohan...', 649, Array)
#1 E:\htdocs\kohana\application\classes\Controller\Foobar.php(43): Kohana_Core::find_file('Foobar')
#2 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Foobar->Action_debug()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Foobar))
#5 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\htdocs\kohana\system\classes\Kohana\Core.php:649
2014-12-20 14:40:06 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_Core::find_file(), called in E:\htdocs\kohana\application\classes\Controller\Foobar.php on line 43 and defined ~ SYSPATH\classes\Kohana\Core.php [ 649 ] in E:\htdocs\kohana\system\classes\Kohana\Core.php:649
2014-12-20 14:40:06 --- DEBUG: #0 E:\htdocs\kohana\system\classes\Kohana\Core.php(649): Kohana_Core::error_handler(2, 'Missing argumen...', 'E:\\htdocs\\kohan...', 649, Array)
#1 E:\htdocs\kohana\application\classes\Controller\Foobar.php(43): Kohana_Core::find_file('Foobar')
#2 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Foobar->Action_debug()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Foobar))
#5 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\htdocs\kohana\system\classes\Kohana\Core.php:649
2014-12-20 15:25:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: hi ~ APPPATH\views\foobar\hello.php [ 3 ] in E:\htdocs\kohana\application\views\foobar\hello.php:3
2014-12-20 15:25:09 --- DEBUG: #0 E:\htdocs\kohana\application\views\foobar\hello.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\\htdocs\\kohan...', 3, Array)
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
2014-12-20 15:25:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: path ~ APPPATH\classes\Controller\Foobar.php [ 46 ] in E:\htdocs\kohana\application\classes\Controller\Foobar.php:46
2014-12-20 15:25:32 --- DEBUG: #0 E:\htdocs\kohana\application\classes\Controller\Foobar.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\\htdocs\\kohan...', 46, Array)
#1 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Foobar->Action_debug()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Foobar))
#4 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\htdocs\kohana\application\classes\Controller\Foobar.php:46
2014-12-20 15:25:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: path ~ APPPATH\classes\Controller\Foobar.php [ 46 ] in E:\htdocs\kohana\application\classes\Controller\Foobar.php:46
2014-12-20 15:25:42 --- DEBUG: #0 E:\htdocs\kohana\application\classes\Controller\Foobar.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\\htdocs\\kohan...', 46, Array)
#1 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Foobar->Action_debug()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Foobar))
#4 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\htdocs\kohana\application\classes\Controller\Foobar.php:46
2014-12-20 15:25:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: path ~ APPPATH\classes\Controller\Foobar.php [ 46 ] in E:\htdocs\kohana\application\classes\Controller\Foobar.php:46
2014-12-20 15:25:57 --- DEBUG: #0 E:\htdocs\kohana\application\classes\Controller\Foobar.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\\htdocs\\kohan...', 46, Array)
#1 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Foobar->Action_debug()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Foobar))
#4 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\htdocs\kohana\application\classes\Controller\Foobar.php:46
2014-12-20 15:26:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: path ~ APPPATH\classes\Controller\Foobar.php [ 46 ] in E:\htdocs\kohana\application\classes\Controller\Foobar.php:46
2014-12-20 15:26:19 --- DEBUG: #0 E:\htdocs\kohana\application\classes\Controller\Foobar.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\\htdocs\\kohan...', 46, Array)
#1 E:\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Foobar->Action_debug()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Foobar))
#4 E:\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\htdocs\kohana\application\classes\Controller\Foobar.php:46
2014-12-20 15:51:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Konana' not found ~ APPPATH\classes\Controller\Foobar.php [ 49 ] in file:line
2014-12-20 15:51:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line