<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-22 09:29:37 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'test' for key 'uniq_username' [ INSERT INTO `users` (`lastname`, `firstname`, `username`, `password`, `email`, `space`) VALUES ('test', 'test', 'test', 'b1a321436bfbb251e81c15858d5a60f5a79ed4428acee432a7c21f9af901c771', 'test@mail.com', '31457280') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-22 09:29:37 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
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
2013-10-22 09:31:15 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'test' for key 'uniq_username' [ INSERT INTO `users` (`lastname`, `firstname`, `username`, `password`, `email`, `space`) VALUES ('test', 'test', 'test', 'b1a321436bfbb251e81c15858d5a60f5a79ed4428acee432a7c21f9af901c771', 'test@mail.com', '31457280') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-22 09:31:15 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
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
2013-10-22 09:32:36 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'test' for key 'uniq_username' [ INSERT INTO `users` (`lastname`, `firstname`, `username`, `password`, `email`, `space`) VALUES ('test', 'test', 'test', 'b1a321436bfbb251e81c15858d5a60f5a79ed4428acee432a7c21f9af901c771', 'test@mail.com', '31457280') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-22 09:32:36 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Users.php(25): Kohana_ORM->save()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-22 09:32:45 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'test@mail.com' for key 'uniq_email' [ INSERT INTO `users` (`lastname`, `firstname`, `username`, `password`, `email`, `space`) VALUES ('test', 'test', 'troll', 'b1a321436bfbb251e81c15858d5a60f5a79ed4428acee432a7c21f9af901c771', 'test@mail.com', '31457280') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-22 09:32:45 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Users.php(25): Kohana_ORM->save()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-22 09:33:52 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'troll' for key 'uniq_username' [ INSERT INTO `users` (`lastname`, `firstname`, `username`, `password`, `email`, `space`) VALUES ('test', 'test', 'troll', 'b1a321436bfbb251e81c15858d5a60f5a79ed4428acee432a7c21f9af901c771', 'troll@mail.com', '31457280') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-22 09:33:52 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Users.php(25): Kohana_ORM->save()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-22 10:10:26 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'test' for key 'uniq_username' [ INSERT INTO `users` (`lastname`, `firstname`, `username`, `password`, `email`, `space`) VALUES ('test', 'test', 'test', 'b1a321436bfbb251e81c15858d5a60f5a79ed4428acee432a7c21f9af901c771', 'test@mail.com', '31457280') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-22 10:10:26 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Users.php(25): Kohana_ORM->save()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-22 10:35:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 9 ] in /opt/lampp/htdocs/freeads/application/views/template/template.php:9
2013-10-22 10:35:42 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/views/template/template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 9, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/application/views/template/template.php:9
2013-10-22 11:01:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{', expecting '(' ~ APPPATH/classes/Controller/Users.php [ 148 ] in file:line
2013-10-22 11:01:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:16:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '(', expecting '{' ~ APPPATH/classes/Controller/Users.php [ 143 ] in file:line
2013-10-22 11:16:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:17:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/classes/Controller/Users.php [ 150 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Users.php:150
2013-10-22 11:17:21 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Users.php(150): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 150, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Users.php:150
2013-10-22 11:22:11 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Users.php [ 144 ] in file:line
2013-10-22 11:22:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:22:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Users.php [ 144 ] in file:line
2013-10-22 11:22:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:42:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_upload' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-22 11:42:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 12:00:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_annonces' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-22 12:00:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 12:39:21 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): Permission denied ~ APPPATH/classes/Controller/Annonces.php [ 34 ] in file:line
2013-10-22 12:39:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): Permis...', '/opt/lampp/htdo...', 34, Array)
#1 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(34): mkdir('/opt/lampp/htdo...', 511)
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_addADS()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-10-22 14:20:03 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH/classes/Controller/Annonces.php [ 10 ] in file:line
2013-10-22 14:20:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 14:20:09 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH/classes/Controller/Annonces.php [ 10 ] in file:line
2013-10-22 14:20:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 16:56:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/Controller/Annonces.php [ 68 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:68
2013-10-22 16:56:36 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(68): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 68, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:68
2013-10-22 17:02:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ SYSPATH/classes/Kohana/Validation.php [ 102 ] in /opt/lampp/htdocs/freeads/system/classes/Kohana/Validation.php:102
2013-10-22 17:02:16 --- DEBUG: #0 /opt/lampp/htdocs/freeads/system/classes/Kohana/Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 102, Array)
#1 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(72): Kohana_Validation->offsetGet('file')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/freeads/system/classes/Kohana/Validation.php:102
2013-10-22 17:07:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ SYSPATH/classes/Kohana/Validation.php [ 102 ] in /opt/lampp/htdocs/freeads/system/classes/Kohana/Validation.php:102
2013-10-22 17:07:46 --- DEBUG: #0 /opt/lampp/htdocs/freeads/system/classes/Kohana/Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 102, Array)
#1 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(72): Kohana_Validation->offsetGet('file')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/freeads/system/classes/Kohana/Validation.php:102
2013-10-22 17:09:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ SYSPATH/classes/Kohana/Validation.php [ 102 ] in /opt/lampp/htdocs/freeads/system/classes/Kohana/Validation.php:102
2013-10-22 17:09:56 --- DEBUG: #0 /opt/lampp/htdocs/freeads/system/classes/Kohana/Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 102, Array)
#1 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(72): Kohana_Validation->offsetGet('file')
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/freeads/system/classes/Kohana/Validation.php:102