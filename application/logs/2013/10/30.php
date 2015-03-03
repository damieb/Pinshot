<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-30 12:13:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: value ~ APPPATH/views/home/home.php [ 11 ] in /opt/lampp/htdocs/pinshot/application/views/home/home.php:11
2013-10-30 12:13:52 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/application/views/home/home.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 11, Array)
#1 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/pinshot/application/views/template/template.php(72): Kohana_View->__toString()
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/pinshot/application/views/home/home.php:11
2013-10-30 14:18:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH/views/template/template.php [ 70 ] in file:line
2013-10-30 14:18:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-30 14:51:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: idUSER ~ APPPATH/views/template/template.php [ 66 ] in /opt/lampp/htdocs/pinshot/application/views/template/template.php:66
2013-10-30 14:51:50 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/application/views/template/template.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 66, Array)
#1 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/pinshot/application/views/template/template.php:66
2013-10-30 15:53:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Profil.php [ 22 ] in file:line
2013-10-30 15:53:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-30 16:36:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_pin' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-30 16:36:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-30 16:36:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_pin' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-30 16:36:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-30 16:51:38 --- EMERGENCY: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:51:38 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id_user')
#1 /opt/lampp/htdocs/pinshot/application/classes/Controller/Profil.php(14): Kohana_ORM->__get('id_user')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(84): Controller_Profil->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:51:43 --- EMERGENCY: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:51:43 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id_user')
#1 /opt/lampp/htdocs/pinshot/application/classes/Controller/Profil.php(14): Kohana_ORM->__get('id_user')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(84): Controller_Profil->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:13 --- EMERGENCY: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:13 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id_user')
#1 /opt/lampp/htdocs/pinshot/application/classes/Controller/Profil.php(14): Kohana_ORM->__get('id_user')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(84): Controller_Profil->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:14 --- EMERGENCY: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:14 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id_user')
#1 /opt/lampp/htdocs/pinshot/application/classes/Controller/Profil.php(14): Kohana_ORM->__get('id_user')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(84): Controller_Profil->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:15 --- EMERGENCY: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:15 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id_user')
#1 /opt/lampp/htdocs/pinshot/application/classes/Controller/Profil.php(14): Kohana_ORM->__get('id_user')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(84): Controller_Profil->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:15 --- EMERGENCY: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:15 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id_user')
#1 /opt/lampp/htdocs/pinshot/application/classes/Controller/Profil.php(14): Kohana_ORM->__get('id_user')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(84): Controller_Profil->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:15 --- EMERGENCY: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:15 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id_user')
#1 /opt/lampp/htdocs/pinshot/application/classes/Controller/Profil.php(14): Kohana_ORM->__get('id_user')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(84): Controller_Profil->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:16 --- EMERGENCY: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:16 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id_user')
#1 /opt/lampp/htdocs/pinshot/application/classes/Controller/Profil.php(14): Kohana_ORM->__get('id_user')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(84): Controller_Profil->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:16 --- EMERGENCY: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:16 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id_user')
#1 /opt/lampp/htdocs/pinshot/application/classes/Controller/Profil.php(14): Kohana_ORM->__get('id_user')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(84): Controller_Profil->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:20 --- EMERGENCY: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:20 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id_user')
#1 /opt/lampp/htdocs/pinshot/application/classes/Controller/Profil.php(14): Kohana_ORM->__get('id_user')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(84): Controller_Profil->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:54 --- EMERGENCY: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:54 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id_user')
#1 /opt/lampp/htdocs/pinshot/application/classes/Controller/Profil.php(14): Kohana_ORM->__get('id_user')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(84): Controller_Profil->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:56 --- EMERGENCY: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:56 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id_user')
#1 /opt/lampp/htdocs/pinshot/application/classes/Controller/Profil.php(14): Kohana_ORM->__get('id_user')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(84): Controller_Profil->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:56 --- EMERGENCY: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:56 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id_user')
#1 /opt/lampp/htdocs/pinshot/application/classes/Controller/Profil.php(14): Kohana_ORM->__get('id_user')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(84): Controller_Profil->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:57 --- EMERGENCY: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:57 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id_user')
#1 /opt/lampp/htdocs/pinshot/application/classes/Controller/Profil.php(14): Kohana_ORM->__get('id_user')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(84): Controller_Profil->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:57 --- EMERGENCY: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:52:57 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id_user')
#1 /opt/lampp/htdocs/pinshot/application/classes/Controller/Profil.php(14): Kohana_ORM->__get('id_user')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(84): Controller_Profil->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-10-30 16:54:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: Bfile ~ APPPATH/views/pins/profil.php [ 19 ] in /opt/lampp/htdocs/pinshot/application/views/pins/profil.php:19
2013-10-30 16:54:27 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/application/views/pins/profil.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 19, Array)
#1 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/pinshot/application/views/template/template.php(80): Kohana_View->__toString()
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/pinshot/application/views/pins/profil.php:19
2013-10-30 16:55:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/pins/profil.php [ 28 ] in /opt/lampp/htdocs/pinshot/application/views/pins/profil.php:28
2013-10-30 16:55:30 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/application/views/pins/profil.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 28, Array)
#1 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/pinshot/application/views/template/template.php(80): Kohana_View->__toString()
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/pinshot/application/views/pins/profil.php:28
2013-10-30 18:12:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_annonce' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-30 18:12:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-30 18:12:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_annonce' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-30 18:12:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-30 18:12:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_annonce' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-30 18:12:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line