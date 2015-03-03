<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-05 16:43:28 --- EMERGENCY: View_Exception [ 0 ]: The requested view head could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php:137
2013-10-05 16:43:28 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('head')
#1 /opt/lampp/htdocs/testKohana/application/classes/Controller/Home.php(8): Kohana_View->__construct('head')
#2 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php:137
2013-10-05 16:51:25 --- EMERGENCY: View_Exception [ 0 ]: The requested view head.php could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php:137
2013-10-05 16:51:25 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('head.php')
#1 /opt/lampp/htdocs/testKohana/application/classes/Controller/Home.php(8): Kohana_View->__construct('head.php')
#2 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php:137
2013-10-05 16:52:20 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::head() ~ APPPATH/classes/Controller/Home.php [ 9 ] in file:line
2013-10-05 16:52:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-05 17:13:29 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php:137
2013-10-05 17:13:29 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php:137
2013-10-05 17:16:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template' not found ~ APPPATH/classes/Controller/Template.php [ 3 ] in file:line
2013-10-05 17:16:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-05 17:17:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Home::$auto_render ~ APPPATH/classes/Controller/Template.php [ 14 ] in /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php:14
2013-10-05 17:17:20 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 14, Array)
#1 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php:14
2013-10-05 17:21:30 --- EMERGENCY: View_Exception [ 0 ]: The requested view essential/head could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php:137
2013-10-05 17:21:30 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('essential/head')
#1 /opt/lampp/htdocs/testKohana/application/classes/Controller/Home.php(8): Kohana_View->__construct('essential/head')
#2 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php:137
2013-10-05 17:43:46 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Template ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php:114
2013-10-05 17:43:46 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#3 {main} in /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php:114
2013-10-05 17:44:13 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Template ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 87 ] in /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php:114
2013-10-05 17:44:13 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#3 {main} in /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php:114
2013-10-05 18:05:49 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Template.php [ 7 ] in /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php:7
2013-10-05 18:05:49 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php(7): Kohana_Core::error_handler(2, 'Attempt to assi...', '/opt/lampp/htdo...', 7, Array)
#1 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller.php(84): Controller_Template->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php:7
2013-10-05 18:08:13 --- EMERGENCY: View_Exception [ 0 ]: The requested view templates/template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php:137
2013-10-05 18:08:13 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('templates/templ...')
#1 /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('templates/templ...', NULL)
#2 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('templates/templ...')
#3 /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php(9): Kohana_Controller_Template->before()
#4 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php:137
2013-10-05 18:08:36 --- EMERGENCY: View_Exception [ 0 ]: The requested view templates/template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php:137
2013-10-05 18:08:36 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('templates/templ...')
#1 /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('templates/templ...', NULL)
#2 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('templates/templ...')
#3 /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php(9): Kohana_Controller_Template->before()
#4 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php:137
2013-10-05 18:08:44 --- EMERGENCY: View_Exception [ 0 ]: The requested view templates/template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php:137
2013-10-05 18:08:44 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('templates/templ...')
#1 /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('templates/templ...', NULL)
#2 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('templates/templ...')
#3 /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php(9): Kohana_Controller_Template->before()
#4 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php:137
2013-10-05 18:09:19 --- EMERGENCY: View_Exception [ 0 ]: The requested view ../views/templates/template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php:137
2013-10-05 18:09:19 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('../views/templa...')
#1 /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('../views/templa...', NULL)
#2 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('../views/templa...')
#3 /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php(9): Kohana_Controller_Template->before()
#4 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php:137
2013-10-05 18:09:28 --- EMERGENCY: View_Exception [ 0 ]: The requested view templates/template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php:137
2013-10-05 18:09:28 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('templates/templ...')
#1 /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('templates/templ...', NULL)
#2 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('templates/templ...')
#3 /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php(9): Kohana_Controller_Template->before()
#4 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php:137
2013-10-05 18:21:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Template.php [ 12 ] in file:line
2013-10-05 18:21:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-05 18:30:42 --- EMERGENCY: View_Exception [ 0 ]: The requested view home could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php:137
2013-10-05 18:30:42 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('home')
#1 /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('home', NULL)
#2 /opt/lampp/htdocs/testKohana/application/classes/Controller/Home.php(8): Kohana_View::factory('home')
#3 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/testKohana/system/classes/Kohana/View.php:137
2013-10-05 18:36:01 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Home.php [ 9 ] in /opt/lampp/htdocs/testKohana/application/classes/Controller/Home.php:9
2013-10-05 18:36:01 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/application/classes/Controller/Home.php(9): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 9, Array)
#1 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/testKohana/application/classes/Controller/Home.php:9
2013-10-05 18:36:42 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Home.php [ 9 ] in /opt/lampp/htdocs/testKohana/application/classes/Controller/Home.php:9
2013-10-05 18:36:42 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/application/classes/Controller/Home.php(9): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 9, Array)
#1 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/testKohana/application/classes/Controller/Home.php:9
2013-10-05 18:57:58 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: head ~ SYSPATH/classes/Kohana/View.php [ 171 ] in /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php:14
2013-10-05 18:57:58 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php(14): Kohana_View->__get('head')
#1 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php:14
2013-10-05 18:58:16 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: head ~ SYSPATH/classes/Kohana/View.php [ 171 ] in /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php:14
2013-10-05 18:58:16 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php(14): Kohana_View->__get('head')
#1 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php:14
2013-10-05 18:58:17 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: head ~ SYSPATH/classes/Kohana/View.php [ 171 ] in /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php:14
2013-10-05 18:58:17 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php(14): Kohana_View->__get('head')
#1 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php:14
2013-10-05 18:58:17 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: head ~ SYSPATH/classes/Kohana/View.php [ 171 ] in /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php:14
2013-10-05 18:58:17 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php(14): Kohana_View->__get('head')
#1 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php:14
2013-10-05 18:58:17 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: head ~ SYSPATH/classes/Kohana/View.php [ 171 ] in /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php:14
2013-10-05 18:58:17 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php(14): Kohana_View->__get('head')
#1 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php:14
2013-10-05 18:59:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'html' not found ~ APPPATH/views/template/template.php [ 11 ] in file:line
2013-10-05 18:59:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-05 19:01:51 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: head ~ SYSPATH/classes/Kohana/View.php [ 171 ] in /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php:14
2013-10-05 19:01:51 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php(14): Kohana_View->__get('head')
#1 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php:14
2013-10-05 19:02:06 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: head ~ SYSPATH/classes/Kohana/View.php [ 171 ] in /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php:14
2013-10-05 19:02:06 --- DEBUG: #0 /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php(14): Kohana_View->__get('head')
#1 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/testKohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/testKohana/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/testKohana/application/classes/Controller/Template.php:14