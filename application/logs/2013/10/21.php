<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-21 09:46:02 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'test' for key 'uniq_username' [ INSERT INTO `users` (`lastname`, `firstname`, `username`, `password`, `email`, `space`) VALUES ('testlast', 'testfirst', 'test', 'b1a321436bfbb251e81c15858d5a60f5a79ed4428acee432a7c21f9af901c771', 'test@mail.com', '31457280') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-21 09:46:02 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Users.php(26): Kohana_ORM->save()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-21 09:47:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Files' not found ~ APPPATH/views/home/home.php [ 31 ] in file:line
2013-10-21 09:47:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 09:48:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Files' not found ~ APPPATH/views/home/home.php [ 31 ] in file:line
2013-10-21 09:48:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 09:49:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Files' not found ~ APPPATH/views/home/home.php [ 31 ] in file:line
2013-10-21 09:49:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 09:49:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Files' not found ~ APPPATH/views/home/home.php [ 31 ] in file:line
2013-10-21 09:49:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 09:50:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Files' not found ~ APPPATH/views/home/home.php [ 31 ] in file:line
2013-10-21 09:50:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 10:38:39 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant WEBROOT - assumed 'WEBROOT' ~ APPPATH/views/template/template.php [ 45 ] in /opt/lampp/htdocs/freeads/application/views/template/template.php:45
2013-10-21 10:38:39 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/views/template/template.php(45): Kohana_Core::error_handler(8, 'Use of undefine...', '/opt/lampp/htdo...', 45, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/application/views/template/template.php:45
2013-10-21 10:42:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'url' not found ~ APPPATH/views/template/template.php [ 45 ] in file:line
2013-10-21 10:42:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 10:43:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Url' not found ~ APPPATH/views/template/template.php [ 45 ] in file:line
2013-10-21 10:43:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 15:04:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'gravatar' (T_STRING), expecting ',' or ';' ~ APPPATH/views/template/template.php [ 60 ] in file:line
2013-10-21 15:04:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 15:04:37 --- EMERGENCY: Kohana_Exception [ 0 ]: The mail property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php:603
2013-10-21 15:04:37 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('mail')
#1 /opt/lampp/htdocs/freeads/application/views/template/template.php(60): Kohana_ORM->__get('mail')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#11 {main} in /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php:603
2013-10-21 15:05:08 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method gravatar::get_gravatar() should not be called statically ~ APPPATH/views/template/template.php [ 60 ] in /opt/lampp/htdocs/freeads/application/views/template/template.php:60
2013-10-21 15:05:08 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/views/template/template.php(60): Kohana_Core::error_handler(2048, 'Non-static meth...', '/opt/lampp/htdo...', 60, Array)
#1 /opt/lampp/htdocs/freeads/application/views/template/template.php(60): gravatar::get_gravatar()
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#11 {main} in /opt/lampp/htdocs/freeads/application/views/template/template.php:60
2013-10-21 15:09:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '"> ~ APPPATH/views/template/template.php [ 60 ] in file:line
2013-10-21 15:09:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 15:23:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Annonces.php [ 41 ] in file:line
2013-10-21 15:23:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 15:55:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: idUser ~ APPPATH/classes/Controller/Annonces.php [ 13 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:13
2013-10-21 15:55:44 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 13, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_addADS()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:13
2013-10-21 16:06:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '/', expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Annonces.php [ 34 ] in file:line
2013-10-21 16:06:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 16:14:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '/', expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Annonces.php [ 34 ] in file:line
2013-10-21 16:14:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 16:14:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '/', expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Annonces.php [ 34 ] in file:line
2013-10-21 16:14:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 16:14:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '/', expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Annonces.php [ 34 ] in file:line
2013-10-21 16:14:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 16:15:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '/', expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Annonces.php [ 34 ] in file:line
2013-10-21 16:15:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line