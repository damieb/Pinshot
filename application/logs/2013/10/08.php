<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-08 09:20:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template/template.php [ 90 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:90
2013-10-08 09:20:58 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 90, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:90
2013-10-08 09:21:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Flash' not found ~ APPPATH/classes/Controller/Users.php [ 63 ] in file:line
2013-10-08 09:21:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 09:33:44 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_ORM::factory(), called in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php on line 58 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 41 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:41
2013-10-08 09:33:44 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(41): Kohana_Core::error_handler(2, 'Missing argumen...', '/opt/lampp/htdo...', 41, Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(58): Kohana_ORM::factory()
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:41
2013-10-08 09:34:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::login() ~ APPPATH/classes/Controller/Users.php [ 58 ] in file:line
2013-10-08 09:34:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 09:38:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/classes/Controller/Users.php [ 58 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:58
2013-10-08 09:38:38 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 58, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:58
2013-10-08 09:58:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/classes/Controller/Users.php [ 28 ] in file:line
2013-10-08 09:58:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 10:00:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-08 10:00:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 10:00:29 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`lastname` AS `lastname`, `user`.`firstname` AS `firstname`, `user`.`username` AS `username`, `user`.`email` AS `email`, `user`.`password` AS `password` FROM `users` AS `user` WHERE `name` = 'login' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:00:29 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(266): Kohana_ORM->find()
#4 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#5 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(23): Kohana_ORM::factory('user', Array)
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:00:57 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:00:57 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(23): Kohana_ORM->add('roles', Object(Model_User))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:02:13 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:02:13 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(23): Kohana_ORM->add('roles', Object(Model_User))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:02:17 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:02:17 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(23): Kohana_ORM->add('roles', Object(Model_User))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:02:38 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:02:38 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(23): Kohana_ORM->add('roles', Object(Model_User))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:02:43 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:02:43 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(23): Kohana_ORM->add('roles', Object(Model_User))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:05:26 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:05:26 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(23): Kohana_ORM->add('roles', Object(Model_User))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:07:02 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Users.php [ 22 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:22
2013-10-08 10:07:02 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(22): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 22, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:22
2013-10-08 10:07:17 --- EMERGENCY: Kohana_Exception [ 0 ]: The roles property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-08 10:07:17 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('roles', Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(22): Kohana_ORM->__set('roles', Array)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-08 10:07:50 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:07:50 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(24): Kohana_ORM->add('roles', Object(Model_User))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:08:27 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:08:27 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(24): Kohana_ORM->add('roles', Object(Model_User))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:08:36 --- EMERGENCY: Kohana_Exception [ 0 ]: The roles property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-08 10:08:36 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('roles', Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(22): Kohana_ORM->__set('roles', Array)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-08 10:12:54 --- EMERGENCY: Kohana_Exception [ 0 ]: The lastname property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-08 10:12:54 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('lastname', 'toaster')
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(17): Kohana_ORM->__set('lastname', 'toaster')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-08 10:14:02 --- EMERGENCY: Kohana_Exception [ 0 ]: The roles property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-08 10:14:02 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('roles', Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(22): Kohana_ORM->__set('roles', Array)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-08 10:15:30 --- EMERGENCY: Kohana_Exception [ 0 ]: The roles property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-08 10:15:30 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('roles', Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(23): Kohana_ORM->__set('roles', Array)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-08 10:15:57 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:15:57 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(25): Kohana_ORM->add('roles', Object(Model_User))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:17:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'protected' (T_PROTECTED) ~ APPPATH/classes/Controller/Users.php [ 8 ] in file:line
2013-10-08 10:17:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 10:17:41 --- EMERGENCY: Kohana_Exception [ 0 ]: The roles property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-08 10:17:41 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('roles', Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(23): Kohana_ORM->__set('roles', Array)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-08 10:17:52 --- EMERGENCY: Kohana_Exception [ 0 ]: The roles property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-08 10:17:52 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('roles', Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(23): Kohana_ORM->__set('roles', Array)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-08 10:18:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-08 10:18:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 10:18:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-08 10:18:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 10:19:07 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`lastname` AS `lastname`, `user`.`firstname` AS `firstname`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login` FROM `users` AS `user` WHERE `name` = 'login' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:19:07 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(266): Kohana_ORM->find()
#4 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#5 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(23): Kohana_ORM::factory('user', Array)
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:19:22 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:19:22 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(23): Kohana_ORM->add('roles', Object(Model_User))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:20:20 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:20:20 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(24): Kohana_ORM->add('roles', Object(Model_User))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:20:22 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'trololol' for key 'uniq_username' [ INSERT INTO `users` (`lastname`, `firstname`, `username`, `password`, `email`) VALUES ('toaster', 'test', 'trololol', 'cb6b9f67175ff10b1c8ceb4a0aaa53c334e6030552f9a7a6846957c39abd6c5d', 'trollo@mail.com') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:20:22 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(23): Kohana_ORM->save()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:21:18 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:21:18 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(24): Kohana_ORM->add('roles', Object(Model_User))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:35:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-08 10:35:08 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
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
2013-10-08 10:36:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in file:line
2013-10-08 10:36:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 10:36:53 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:36:53 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(24): Kohana_ORM->add('roles', Object(Model_User))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:40:08 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'toto' for key 'uniq_username' [ INSERT INTO `users` (`lastname`, `firstname`, `username`, `password`, `email`) VALUES ('dkhfsg', 'fdhse', 'toto', 'b1a321436bfbb251e81c15858d5a60f5a79ed4428acee432a7c21f9af901c771', 'test@mail.com') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:40:08 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(23): Kohana_ORM->save()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:40:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/auth/signup.php [ 39 ] in /opt/lampp/htdocs/cloudwac/application/views/auth/signup.php:39
2013-10-08 10:40:13 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/auth/signup.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 39, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(90): Kohana_View->__toString()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/cloudwac/application/views/auth/signup.php:39
2013-10-08 10:40:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/auth/signup.php [ 46 ] in /opt/lampp/htdocs/cloudwac/application/views/auth/signup.php:46
2013-10-08 10:40:25 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/auth/signup.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 46, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(90): Kohana_View->__toString()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/cloudwac/application/views/auth/signup.php:46
2013-10-08 10:41:18 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:41:18 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(24): Kohana_ORM->add('roles', Object(Model_User))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:41:48 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'titi' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`) VALUES ('titi', '9137c97111cab86eeea5e696eace2b680354f3913346fc0491ab4a33ef4cca09', 'titi@mail.com') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:41:48 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(23): Kohana_ORM->save()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:42:52 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:42:52 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(24): Kohana_ORM->add('roles', Object(Model_User))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:43:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/config/auth.php [ 12 ] in file:line
2013-10-08 10:43:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 10:44:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/config/auth.php [ 11 ] in file:line
2013-10-08 10:44:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 10:44:24 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'titi' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`) VALUES ('titi', '9137c97111cab86eeea5e696eace2b680354f3913346fc0491ab4a33ef4cca09', 'titi@mail.com') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:44:24 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(23): Kohana_ORM->save()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:44:37 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:44:37 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(24): Kohana_ORM->add('roles', Object(Model_User))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:46:41 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'titi' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`) VALUES ('titi', '9137c97111cab86eeea5e696eace2b680354f3913346fc0491ab4a33ef4cca09', 'titi@mail.com') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:46:41 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(23): Kohana_ORM->save()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:46:50 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`lastname` AS `lastname`, `user`.`firstname` AS `firstname`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login` FROM `users` AS `user` WHERE `name` = 'login' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:46:50 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(266): Kohana_ORM->find()
#4 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#5 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(24): Kohana_ORM::factory('user', Array)
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#9 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:47:40 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'titi' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`) VALUES ('titi', '9137c97111cab86eeea5e696eace2b680354f3913346fc0491ab4a33ef4cca09', 'titi@mail.com') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:47:40 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(23): Kohana_ORM->save()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:47:50 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:47:50 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(24): Kohana_ORM->add('roles', Object(Model_User))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:50:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-08 10:50:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 10:50:40 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::add(), called in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php on line 27 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1563 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1563
2013-10-08 10:50:40 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1563): Kohana_Core::error_handler(2, 'Missing argumen...', '/opt/lampp/htdo...', 1563, Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(27): Kohana_ORM->add(Object(Model_User))
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1563
2013-10-08 10:55:16 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'titi' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`) VALUES ('titi', '9137c97111cab86eeea5e696eace2b680354f3913346fc0491ab4a33ef4cca09', 'titi@mail.com') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:55:16 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(24): Kohana_ORM->save()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:55:27 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:55:27 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(25): Kohana_ORM->add('roles', Object(Model_User))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:58:53 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, 1) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 10:58:53 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(24): Kohana_ORM->add('roles', 1)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 11:02:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-08 11:02:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:03:53 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 11:03:53 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(24): Kohana_ORM->add('roles', Object(Model_Role))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 11:06:04 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 11:06:04 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(24): Kohana_ORM->add('roles', Object(Model_Role))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 11:11:34 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`lastname` AS `lastname`, `user`.`firstname` AS `firstname`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login` FROM `users` AS `user` WHERE `name` = 'login' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 11:11:34 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(25): Kohana_ORM->find()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 11:12:01 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'titi' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`) VALUES ('titi', '9137c97111cab86eeea5e696eace2b680354f3913346fc0491ab4a33ef4cca09', 'titi@mail.com') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 11:12:01 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(24): Kohana_ORM->save()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 11:12:13 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 11:12:13 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(25): Kohana_ORM->add('roles', Object(Model_User))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 11:12:31 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 11:12:31 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(24): Kohana_ORM->add('roles', Object(Model_Role))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 11:14:52 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 11:14:52 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(25): Kohana_ORM->add('roles', Object(Model_Role))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 11:15:02 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 11:15:02 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(25): Kohana_ORM->add('roles', Object(Model_Role))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/Query.php:251
2013-10-08 11:29:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function post() ~ APPPATH/classes/Controller/Users.php [ 59 ] in file:line
2013-10-08 11:29:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:54:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::login() ~ APPPATH/classes/Controller/Users.php [ 61 ] in file:line
2013-10-08 11:54:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 12:12:33 --- EMERGENCY: ErrorException [ 1 ]: Class 'Flash' not found ~ APPPATH/classes/Controller/Users.php [ 67 ] in file:line
2013-10-08 12:12:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 12:52:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/Controller/Users.php [ 64 ] in file:line
2013-10-08 12:52:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 14:13:27 --- EMERGENCY: View_Exception [ 0 ]: The requested view user/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php:137
2013-10-08 14:13:27 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(137): Kohana_View->set_filename('user/login')
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(30): Kohana_View->__construct('user/login', NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(50): Kohana_View::factory('user/login')
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php:137
2013-10-08 14:13:46 --- EMERGENCY: View_Exception [ 0 ]: The requested view users/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php:137
2013-10-08 14:13:46 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(137): Kohana_View->set_filename('users/login')
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(30): Kohana_View->__construct('users/login', NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(50): Kohana_View::factory('users/login')
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php:137
2013-10-08 14:14:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-08 14:14:05 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
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
2013-10-08 14:18:12 --- EMERGENCY: View_Exception [ 0 ]: The requested view public/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php:137
2013-10-08 14:18:12 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(137): Kohana_View->set_filename('public/login')
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(30): Kohana_View->__construct('public/login', NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(59): Kohana_View::factory('public/login')
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php:137
2013-10-08 14:18:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Flash' not found ~ APPPATH/classes/Controller/Users.php [ 74 ] in file:line
2013-10-08 14:18:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 15:28:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/Users.php [ 80 ] in file:line
2013-10-08 15:28:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 16:04:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/template/template.php [ 93 ] in file:line
2013-10-08 16:04:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 17:29:12 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be of the type array, null given ~ SYSPATH/classes/Kohana/Upload.php [ 129 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php:129
2013-10-08 17:29:12 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/opt/lampp/htdo...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#3 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(21): Kohana_Validation->check()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php:129
2013-10-08 17:43:47 --- EMERGENCY: View_Exception [ 0 ]: The requested view avatar/upload could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php:137
2013-10-08 17:43:47 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(137): Kohana_View->set_filename('avatar/upload')
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(30): Kohana_View->__construct('avatar/upload', NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(15): Kohana_View::factory('avatar/upload')
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php:137
2013-10-08 17:44:20 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Files.php [ 32 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:32
2013-10-08 17:44:20 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(32): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 32, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:32
2013-10-08 17:44:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-08 17:44:52 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
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
2013-10-08 17:45:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/template/template.php [ 90 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:90
2013-10-08 17:45:10 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 90, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:90
2013-10-08 17:45:27 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Files.php [ 34 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:34
2013-10-08 17:45:27 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(34): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 34, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:34