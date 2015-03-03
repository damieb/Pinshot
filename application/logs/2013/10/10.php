<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-10 09:11:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function id3_get_tag() ~ APPPATH/views/space/filemanager.php [ 18 ] in file:line
2013-10-10 09:11:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-10 09:31:26 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_View::bind(), called in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php on line 52 and defined ~ SYSPATH/classes/Kohana/View.php [ 314 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php:314
2013-10-10 09:31:26 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(314): Kohana_Core::error_handler(2, 'Missing argumen...', '/opt/lampp/htdo...', 314, Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(52): Kohana_View->bind()
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php:314
2013-10-10 09:37:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$lastname ~ APPPATH/views/auth/edit.php [ 6 ] in /opt/lampp/htdocs/cloudwac/application/views/auth/edit.php:6
2013-10-10 09:37:25 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/auth/edit.php(6): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 6, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(65): Kohana_View->__toString()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/cloudwac/application/views/auth/edit.php:6
2013-10-10 09:39:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/auth/edit.php [ 5 ] in /opt/lampp/htdocs/cloudwac/application/views/auth/edit.php:5
2013-10-10 09:39:04 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/auth/edit.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 5, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(65): Kohana_View->__toString()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/cloudwac/application/views/auth/edit.php:5
2013-10-10 09:39:38 --- EMERGENCY: Kohana_Exception [ 0 ]: The mail property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:603
2013-10-10 09:39:38 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('mail')
#1 /opt/lampp/htdocs/cloudwac/application/views/auth/edit.php(6): Kohana_ORM->__get('mail')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(65): Kohana_View->__toString()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:603
2013-10-10 09:40:36 --- EMERGENCY: Kohana_Exception [ 0 ]: The mail property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:603
2013-10-10 09:40:36 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('mail')
#1 /opt/lampp/htdocs/cloudwac/application/views/auth/edit.php(6): Kohana_ORM->__get('mail')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(65): Kohana_View->__toString()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:603
2013-10-10 09:50:06 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-10 09:50:06 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(74): Kohana_ORM->add('roles', Object(Model_Role))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-10 10:14:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: idUser ~ APPPATH/classes/Controller/Users.php [ 91 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:91
2013-10-10 10:14:40 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(91): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 91, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:91
2013-10-10 10:15:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 10:15:37 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 10:17:15 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete user model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:93
2013-10-10 10:17:15 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(93): Kohana_ORM->delete()
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:93
2013-10-10 10:22:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Users.php [ 76 ] in file:line
2013-10-10 10:22:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-10 10:55:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 10:55:32 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 10:55:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 10:55:47 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 10:57:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 10:57:54 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 10:57:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 10:57:55 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 10:57:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 10:57:55 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 10:57:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 10:57:55 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 10:57:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 10:57:59 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 10:58:29 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Files::action_delete(), called in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Files.php [ 96 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:96
2013-10-10 10:58:29 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(96): Kohana_Core::error_handler(2, 'Missing argumen...', '/opt/lampp/htdo...', 96, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:96
2013-10-10 11:03:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 11:03:50 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 11:04:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/classes/Controller/Files.php [ 98 ] in file:line
2013-10-10 11:04:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-10 11:04:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: fileID ~ APPPATH/classes/Controller/Files.php [ 98 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:98
2013-10-10 11:04:58 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(98): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 98, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:98
2013-10-10 11:05:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 11:05:08 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 11:20:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 11:20:05 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 11:20:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 11:20:46 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 11:21:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 11:21:03 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 11:23:15 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Files.php [ 100 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:100
2013-10-10 11:23:15 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(100): Kohana_Core::error_handler(8, 'Trying to get p...', '/opt/lampp/htdo...', 100, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:100
2013-10-10 11:23:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 11:23:31 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 11:28:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 11:28:31 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 12:45:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: value ~ APPPATH/views/space/download.php [ 4 ] in /opt/lampp/htdocs/cloudwac/application/views/space/download.php:4
2013-10-10 12:45:15 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/space/download.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(65): Kohana_View->__toString()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#11 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/cloudwac/application/views/space/download.php:4
2013-10-10 14:40:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/Controller/Files.php [ 131 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:131
2013-10-10 14:40:58 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(131): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 131, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:131
2013-10-10 14:41:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/Controller/Files.php [ 139 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:139
2013-10-10 14:41:17 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(139): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 139, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:139
2013-10-10 14:41:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/Controller/Files.php [ 139 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:139
2013-10-10 14:41:25 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(139): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 139, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:139
2013-10-10 14:44:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/Controller/Files.php [ 141 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:141
2013-10-10 14:44:17 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(141): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 141, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:141
2013-10-10 14:44:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/Controller/Files.php [ 141 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:141
2013-10-10 14:44:26 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(141): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 141, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:141
2013-10-10 14:44:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/Controller/Files.php [ 141 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:141
2013-10-10 14:44:34 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(141): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 141, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:141
2013-10-10 14:48:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/Controller/Files.php [ 141 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:141
2013-10-10 14:48:27 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(141): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 141, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:141
2013-10-10 15:10:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/Controller/Files.php [ 141 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:141
2013-10-10 15:10:08 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(141): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 141, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:141
2013-10-10 15:31:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/Controller/Files.php [ 141 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:141
2013-10-10 15:31:27 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(141): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 141, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:141
2013-10-10 16:03:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/Controller/Files.php [ 141 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:141
2013-10-10 16:03:41 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(141): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 141, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:141
2013-10-10 16:16:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/Controller/Files.php [ 141 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:141
2013-10-10 16:16:49 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(141): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 141, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:141
2013-10-10 19:15:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/Controller/Files.php [ 141 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:141
2013-10-10 19:15:38 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(141): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 141, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:141
2013-10-10 20:54:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 20:54:19 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 20:54:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template/template.php [ 66 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:66
2013-10-10 20:54:46 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 66, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:66
2013-10-10 20:56:06 --- EMERGENCY: View_Exception [ 0 ]: The requested view messages/error could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php:137
2013-10-10 20:56:06 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(137): Kohana_View->set_filename('messages/error')
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(30): Kohana_View->__construct('messages/error', NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(18): Kohana_View::factory('messages/error')
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php:137
2013-10-10 20:57:00 --- EMERGENCY: View_Exception [ 0 ]: The requested view messages/error could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php:137
2013-10-10 20:57:00 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(137): Kohana_View->set_filename('messages/error')
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(30): Kohana_View->__construct('messages/error', NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(18): Kohana_View::factory('messages/error')
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php:137
2013-10-10 20:57:19 --- EMERGENCY: View_Exception [ 0 ]: The requested view messages/user/signup could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php:137
2013-10-10 20:57:19 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(137): Kohana_View->set_filename('messages/user/s...')
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(30): Kohana_View->__construct('messages/user/s...', NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(18): Kohana_View::factory('messages/user/s...')
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php:137
2013-10-10 20:58:11 --- EMERGENCY: View_Exception [ 0 ]: The requested view views/error could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php:137
2013-10-10 20:58:11 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(137): Kohana_View->set_filename('views/error')
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(30): Kohana_View->__construct('views/error', NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(18): Kohana_View::factory('views/error')
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php:137
2013-10-10 21:00:45 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Files.php [ 26 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:26
2013-10-10 21:00:45 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(26): Kohana_Core::error_handler(8, 'Trying to get p...', '/opt/lampp/htdo...', 26, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:26
2013-10-10 21:02:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 21:02:46 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-10 21:05:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/Controller/Files.php [ 174 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:174
2013-10-10 21:05:33 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(174): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 174, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:174
2013-10-10 21:05:51 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Users.php [ 56 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:56
2013-10-10 21:05:51 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(56): Kohana_Core::error_handler(8, 'Trying to get p...', '/opt/lampp/htdo...', 56, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:56
2013-10-10 21:25:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Files.php [ 50 ] in file:line
2013-10-10 21:25:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-10 21:25:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$size ~ APPPATH/classes/Controller/Files.php [ 45 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:45
2013-10-10 21:25:15 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(45): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 45, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:45
2013-10-10 21:27:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$size ~ APPPATH/classes/Controller/Files.php [ 45 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:45
2013-10-10 21:27:20 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(45): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 45, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:45
2013-10-10 21:27:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Files::$fileGET ~ APPPATH/classes/Controller/Files.php [ 45 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:45
2013-10-10 21:27:47 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(45): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 45, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:45
2013-10-10 21:27:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$size ~ APPPATH/classes/Controller/Files.php [ 45 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:45
2013-10-10 21:27:55 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(45): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 45, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:45
2013-10-10 21:27:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH/classes/Controller/Files.php [ 45 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:45
2013-10-10 21:27:59 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(45): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 45, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:45
2013-10-10 21:31:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Files' not found ~ APPPATH/views/space/filemanager.php [ 17 ] in file:line
2013-10-10 21:31:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-10 21:31:22 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Controller_Files::calcul() should not be called statically ~ APPPATH/views/space/filemanager.php [ 17 ] in /opt/lampp/htdocs/cloudwac/application/views/space/filemanager.php:17
2013-10-10 21:31:22 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/space/filemanager.php(17): Kohana_Core::error_handler(2048, 'Non-static meth...', '/opt/lampp/htdo...', 17, Array)
#1 /opt/lampp/htdocs/cloudwac/application/views/space/filemanager.php(17): Controller_Files::calcul()
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(66): Kohana_View->__toString()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#12 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/cloudwac/application/views/space/filemanager.php:17
2013-10-10 23:25:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/space/filemanager.php [ 64 ] in file:line
2013-10-10 23:25:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-10 23:26:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'elseif' (T_ELSEIF) ~ APPPATH/views/space/filemanager.php [ 41 ] in file:line
2013-10-10 23:26:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-10 23:27:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'elseif' (T_ELSEIF) ~ APPPATH/views/space/filemanager.php [ 41 ] in file:line
2013-10-10 23:27:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line