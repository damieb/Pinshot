<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-24 09:43:43 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/annonces/list.php [ 38 ] in /opt/lampp/htdocs/freeads/application/views/annonces/list.php:38
2013-10-24 09:43:43 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/views/annonces/list.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', '/opt/lampp/htdo...', 38, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/freeads/application/views/template/template.php(67): Kohana_View->__toString()
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#11 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/freeads/application/views/annonces/list.php:38
2013-10-24 09:44:28 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH/views/annonces/list.php [ 38 ] in file:line
2013-10-24 09:44:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 09:46:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: idUser ~ APPPATH/views/annonces/list.php [ 42 ] in /opt/lampp/htdocs/freeads/application/views/annonces/list.php:42
2013-10-24 09:46:02 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/views/annonces/list.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 42, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/freeads/application/views/template/template.php(67): Kohana_View->__toString()
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#11 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/freeads/application/views/annonces/list.php:42
2013-10-24 09:48:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: value ~ APPPATH/views/annonces/list.php [ 5 ] in /opt/lampp/htdocs/freeads/application/views/annonces/list.php:5
2013-10-24 09:48:53 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/views/annonces/list.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 5, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/freeads/application/views/template/template.php(67): Kohana_View->__toString()
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#11 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/freeads/application/views/annonces/list.php:5
2013-10-24 10:01:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 9 ] in /opt/lampp/htdocs/freeads/application/views/template/template.php:9
2013-10-24 10:01:14 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/views/template/template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 9, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messages))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/application/views/template/template.php:9
2013-10-24 10:15:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: avatar ~ APPPATH/views/messages/contact.php [ 8 ] in /opt/lampp/htdocs/freeads/application/views/messages/contact.php:8
2013-10-24 10:15:21 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/views/messages/contact.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/freeads/application/views/template/template.php(67): Kohana_View->__toString()
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messages))
#11 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/freeads/application/views/messages/contact.php:8
2013-10-24 10:48:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: idUser ~ APPPATH/views/annonces/list.php [ 42 ] in /opt/lampp/htdocs/freeads/application/views/annonces/list.php:42
2013-10-24 10:48:03 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/views/annonces/list.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 42, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/freeads/application/views/template/template.php(67): Kohana_View->__toString()
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#11 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/freeads/application/views/annonces/list.php:42
2013-10-24 10:52:42 --- EMERGENCY: Kohana_Exception [ 0 ]: The mail property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php:603
2013-10-24 10:52:42 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('mail')
#1 /opt/lampp/htdocs/freeads/application/views/messages/contact.php(25): Kohana_ORM->__get('mail')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/freeads/application/views/template/template.php(67): Kohana_View->__toString()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messages))
#12 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php:603
2013-10-24 11:43:22 --- EMERGENCY: Kohana_Exception [ 0 ]: The img_path property does not exist in the Model_Message class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php:603
2013-10-24 11:43:22 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('img_path')
#1 /opt/lampp/htdocs/freeads/application/views/annonces/mylist.php(15): Kohana_ORM->__get('img_path')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/freeads/application/views/template/template.php(69): Kohana_View->__toString()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messages))
#12 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php:603
2013-10-24 11:44:15 --- EMERGENCY: View_Exception [ 0 ]: The requested view messages/list could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php:137
2013-10-24 11:44:15 --- DEBUG: #0 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(137): Kohana_View->set_filename('messages/list')
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(30): Kohana_View->__construct('messages/list', NULL)
#2 /opt/lampp/htdocs/freeads/application/classes/Controller/Messages.php(39): Kohana_View::factory('messages/list')
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Messages->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messages))
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php:137
2013-10-24 11:45:58 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH/classes/Controller/Annonces.php [ 13 ] in file:line
2013-10-24 11:45:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 11:55:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 9 ] in /opt/lampp/htdocs/freeads/application/views/template/template.php:9
2013-10-24 11:55:03 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/views/template/template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 9, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/application/views/template/template.php:9
2013-10-24 11:55:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 9 ] in /opt/lampp/htdocs/freeads/application/views/template/template.php:9
2013-10-24 11:55:23 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/views/template/template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 9, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/application/views/template/template.php:9
2013-10-24 12:11:20 --- EMERGENCY: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Message class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php:603
2013-10-24 12:11:20 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('title')
#1 /opt/lampp/htdocs/freeads/application/views/messages/list.php(19): Kohana_ORM->__get('title')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/freeads/application/views/template/template.php(69): Kohana_View->__toString()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messages))
#12 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php:603
2013-10-24 12:16:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: avatar ~ APPPATH/views/messages/list.php [ 22 ] in /opt/lampp/htdocs/freeads/application/views/messages/list.php:22
2013-10-24 12:16:13 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/views/messages/list.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 22, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/freeads/application/views/template/template.php(69): Kohana_View->__toString()
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messages))
#11 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/freeads/application/views/messages/list.php:22
2013-10-24 12:17:00 --- EMERGENCY: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Message class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php:603
2013-10-24 12:17:00 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('email')
#1 /opt/lampp/htdocs/freeads/application/views/messages/list.php(2): Kohana_ORM->__get('email')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/freeads/application/views/template/template.php(69): Kohana_View->__toString()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messages))
#12 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php:603
2013-10-24 12:17:30 --- EMERGENCY: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Message class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php:603
2013-10-24 12:17:30 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('email')
#1 /opt/lampp/htdocs/freeads/application/views/messages/list.php(2): Kohana_ORM->__get('email')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/freeads/application/views/template/template.php(69): Kohana_View->__toString()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messages))
#12 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php:603
2013-10-24 12:17:32 --- EMERGENCY: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Message class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php:603
2013-10-24 12:17:32 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('email')
#1 /opt/lampp/htdocs/freeads/application/views/messages/list.php(2): Kohana_ORM->__get('email')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/freeads/application/views/template/template.php(69): Kohana_View->__toString()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messages))
#12 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php:603
2013-10-24 15:00:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:00:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 15:09:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:09:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 15:11:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:11:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 15:11:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:11:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 15:11:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:11:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 15:11:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:11:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 15:11:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:11:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 15:11:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:11:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 15:11:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:11:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 15:11:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:11:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 15:11:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:11:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 15:11:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:11:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 15:28:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:28:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 15:35:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:35:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 15:41:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:41:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 15:41:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:41:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 15:56:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:56:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 15:56:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:56:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 15:56:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:56:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 15:56:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:56:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 15:56:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:56:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 15:57:06 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH/paginate' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /opt/lampp/htdocs/freeads/application/bootstrap.php:133
2013-10-24 15:57:06 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/bootstrap.php(133): Kohana_Core::modules(Array)
#1 /opt/lampp/htdocs/freeads/index.php(102): require('/opt/lampp/htdo...')
#2 {main} in /opt/lampp/htdocs/freeads/application/bootstrap.php:133
2013-10-24 15:57:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:57:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 15:58:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 15:58:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 16:36:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 16:36:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 16:36:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 16:36:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 16:44:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 16:44:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 17:00:19 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'paginate' at 'MODPATH/pagination' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /opt/lampp/htdocs/freeads/application/bootstrap.php:133
2013-10-24 17:00:19 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/bootstrap.php(133): Kohana_Core::modules(Array)
#1 /opt/lampp/htdocs/freeads/index.php(102): require('/opt/lampp/htdo...')
#2 {main} in /opt/lampp/htdocs/freeads/application/bootstrap.php:133
2013-10-24 17:00:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 17:00:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 17:16:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Paginate' not found ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 17:16:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 17:49:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '==' (T_IS_EQUAL), expecting ')' ~ APPPATH/classes/helper.php [ 33 ] in file:line
2013-10-24 17:49:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 21:14:11 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '==' (T_IS_EQUAL), expecting ')' ~ APPPATH/classes/helper.php [ 33 ] in file:line
2013-10-24 21:14:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 21:21:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$directory' (T_VARIABLE) ~ APPPATH/classes/Controller/Annonces.php [ 82 ] in file:line
2013-10-24 21:21:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 21:21:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$nbrADS' (T_VARIABLE) ~ APPPATH/classes/Controller/Annonces.php [ 84 ] in file:line
2013-10-24 21:21:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 21:24:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: idUSER ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:80
2013-10-24 21:24:33 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(80): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 80, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:80
2013-10-24 21:24:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Annonces::$idUSER ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:80
2013-10-24 21:24:50 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(80): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 80, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:80
2013-10-24 21:26:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Annonces::$idUSER ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:80
2013-10-24 21:26:40 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(80): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 80, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:80
2013-10-24 21:26:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Annonces::$idUSER ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:80
2013-10-24 21:26:41 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(80): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 80, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:80
2013-10-24 21:27:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: idUser ~ APPPATH/classes/Controller/Annonces.php [ 78 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:78
2013-10-24 21:27:15 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(78): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 78, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:78
2013-10-24 21:28:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Annonces::$idUSER ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:80
2013-10-24 21:28:05 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(80): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 80, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:80
2013-10-24 21:33:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Annonces::$idUSER ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:80
2013-10-24 21:33:07 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(80): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 80, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:80
2013-10-24 21:33:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Annonces::$idUSER ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:80
2013-10-24 21:33:07 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(80): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 80, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:80
2013-10-24 21:33:34 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function pagin() ~ APPPATH/classes/Controller/Annonces.php [ 82 ] in file:line
2013-10-24 21:33:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 21:33:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: cPage ~ APPPATH/classes/helper.php [ 44 ] in /opt/lampp/htdocs/freeads/application/classes/helper.php:44
2013-10-24 21:33:46 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/helper.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 44, Array)
#1 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(82): helper::pagin(5, 2, NULL)
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/freeads/application/classes/helper.php:44
2013-10-24 21:42:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/annonces/mylist.php [ 125 ] in file:line
2013-10-24 21:42:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 21:43:32 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/annonces/mylist.php [ 11 ] in /opt/lampp/htdocs/freeads/application/views/annonces/mylist.php:11
2013-10-24 21:43:32 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/views/annonces/mylist.php(11): Kohana_Core::error_handler(2, 'Invalid argumen...', '/opt/lampp/htdo...', 11, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/freeads/application/views/template/template.php(69): Kohana_View->__toString()
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#11 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/freeads/application/views/annonces/mylist.php:11
2013-10-24 21:44:08 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/annonces/mylist.php [ 11 ] in /opt/lampp/htdocs/freeads/application/views/annonces/mylist.php:11
2013-10-24 21:44:08 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/views/annonces/mylist.php(11): Kohana_Core::error_handler(2, 'Invalid argumen...', '/opt/lampp/htdo...', 11, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/freeads/application/views/template/template.php(69): Kohana_View->__toString()
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#11 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/freeads/application/views/annonces/mylist.php:11
2013-10-24 21:45:16 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/annonces/mylist.php [ 12 ] in /opt/lampp/htdocs/freeads/application/views/annonces/mylist.php:12
2013-10-24 21:45:16 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/views/annonces/mylist.php(12): Kohana_Core::error_handler(2, 'Invalid argumen...', '/opt/lampp/htdo...', 12, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/freeads/application/views/template/template.php(69): Kohana_View->__toString()
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#11 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/freeads/application/views/annonces/mylist.php:12
2013-10-24 21:54:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH/classes/Controller/Annonces.php [ 80 ] in file:line
2013-10-24 21:54:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 22:26:39 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` WHERE `id_user` = '6' LIMIT -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 22:26:39 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(83): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 22:30:00 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` WHERE `id_user` = '6' LIMIT -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 22:30:00 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(83): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 22:30:01 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` WHERE `id_user` = '6' LIMIT -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 22:30:01 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(83): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 22:30:02 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` WHERE `id_user` = '6' LIMIT -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 22:30:02 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(83): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 22:37:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Annonce::count() ~ APPPATH/classes/Controller/Annonces.php [ 79 ] in file:line
2013-10-24 22:37:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 22:48:53 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/annonces/mylist.php [ 11 ] in file:line
2013-10-24 22:48:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 22:51:43 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` WHERE `id_user` = '6' LIMIT 4 OFFSET -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 22:51:43 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(83): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 22:52:27 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` WHERE `id_user` = '6' LIMIT 4 OFFSET -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 22:52:27 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(83): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 23:06:21 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` ORDER BY `date_pub` DESC LIMIT 4 OFFSET -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 23:06:21 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(188): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_list()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 23:13:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pagin ~ APPPATH/views/annonces/list.php [ 40 ] in /opt/lampp/htdocs/freeads/application/views/annonces/list.php:40
2013-10-24 23:13:49 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/views/annonces/list.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 40, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/freeads/application/views/template/template.php(69): Kohana_View->__toString()
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#11 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/freeads/application/views/annonces/list.php:40
2013-10-24 23:16:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pagin ~ APPPATH/views/annonces/list.php [ 40 ] in /opt/lampp/htdocs/freeads/application/views/annonces/list.php:40
2013-10-24 23:16:16 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/views/annonces/list.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 40, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/freeads/application/views/template/template.php(69): Kohana_View->__toString()
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#11 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/freeads/application/views/annonces/list.php:40
2013-10-24 23:25:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Annonces.php [ 161 ] in file:line
2013-10-24 23:25:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 23:48:56 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` ORDER BY `date_pub` DESC LIMIT 4 OFFSET -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 23:48:56 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(217): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_list()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 23:53:06 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` ORDER BY `date_pub` DESC LIMIT 4 OFFSET -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 23:53:06 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(217): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_list()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 23:53:09 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` ORDER BY `date_pub` DESC LIMIT 4 OFFSET -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 23:53:09 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(217): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_list()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 23:53:43 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` ORDER BY `date_pub` DESC LIMIT 4 OFFSET -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 23:53:43 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(217): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_list()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 23:55:13 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` ORDER BY `date_pub` DESC LIMIT 4 OFFSET -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 23:55:13 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(217): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_list()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 23:55:36 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` ORDER BY `date_pub` DESC LIMIT 4 OFFSET -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-24 23:55:36 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(217): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_list()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251