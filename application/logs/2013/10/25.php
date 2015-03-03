<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-25 00:03:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: cPage ~ APPPATH/views/messages/list.php [ 10 ] in /opt/lampp/htdocs/freeads/application/views/messages/list.php:10
2013-10-25 00:03:07 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/views/messages/list.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 10, Array)
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
#14 {main} in /opt/lampp/htdocs/freeads/application/views/messages/list.php:10
2013-10-25 00:22:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/views/messages/list.php [ 35 ] in file:line
2013-10-25 00:22:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-25 10:17:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: idADS ~ APPPATH/classes/Controller/Annonces.php [ 243 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:243
2013-10-25 10:17:21 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(243): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 243, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:243
2013-10-25 10:18:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: idUser ~ APPPATH/classes/Controller/Annonces.php [ 243 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:243
2013-10-25 10:18:13 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(243): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 243, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:243
2013-10-25 10:22:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: idADS ~ APPPATH/classes/Controller/Annonces.php [ 244 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:244
2013-10-25 10:22:51 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(244): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 244, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:244
2013-10-25 10:25:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: idADS ~ APPPATH/classes/Controller/Annonces.php [ 226 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:226
2013-10-25 10:25:16 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(226): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 226, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:226
2013-10-25 10:28:36 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/annonces/list.php [ 52 ] in /opt/lampp/htdocs/freeads/application/views/annonces/list.php:52
2013-10-25 10:28:36 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/views/annonces/list.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/opt/lampp/htdo...', 52, Array)
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
#14 {main} in /opt/lampp/htdocs/freeads/application/views/annonces/list.php:52
2013-10-25 10:30:45 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Controller_Annonces could not be converted to string ~ APPPATH/classes/Controller/Annonces.php [ 82 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:82
2013-10-25 10:30:45 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(82): Kohana_Core::error_handler(4096, 'Object of class...', '/opt/lampp/htdo...', 82, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:82
2013-10-25 10:31:03 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/annonces/mylist.php [ 22 ] in /opt/lampp/htdocs/freeads/application/views/annonces/mylist.php:22
2013-10-25 10:31:03 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/views/annonces/mylist.php(22): Kohana_Core::error_handler(2, 'Invalid argumen...', '/opt/lampp/htdo...', 22, Array)
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
#14 {main} in /opt/lampp/htdocs/freeads/application/views/annonces/mylist.php:22
2013-10-25 10:35:30 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''6'' at line 1 [ SELECT COUNT(`annonce`.`id`) AS `records_found` FROM `annonces` AS `annonce` WHERE `id` NOT IN '6' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 10:35:30 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`a...', false, Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(239): Kohana_ORM->count_all()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 10:37:24 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Annonces.php [ 134 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:134
2013-10-25 10:37:24 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(134): Kohana_Core::error_handler(8, 'Trying to get p...', '/opt/lampp/htdo...', 134, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:134
2013-10-25 10:42:08 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/annonces/list.php [ 52 ] in /opt/lampp/htdocs/freeads/application/views/annonces/list.php:52
2013-10-25 10:42:08 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/views/annonces/list.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/opt/lampp/htdo...', 52, Array)
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
#14 {main} in /opt/lampp/htdocs/freeads/application/views/annonces/list.php:52
2013-10-25 11:50:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/Controller/Annonces.php [ 150 ] in file:line
2013-10-25 11:50:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-25 11:50:33 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function where() ~ APPPATH/classes/Controller/Annonces.php [ 150 ] in file:line
2013-10-25 11:50:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-25 11:50:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function where() ~ APPPATH/classes/Controller/Annonces.php [ 150 ] in file:line
2013-10-25 11:50:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-25 11:52:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/classes/Controller/Annonces.php [ 81 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:81
2013-10-25 11:52:52 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(81): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 81, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:81
2013-10-25 11:54:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/classes/Controller/Annonces.php [ 82 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:82
2013-10-25 11:54:25 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 82, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:82
2013-10-25 13:47:20 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` WHERE `id_user` = '6' LIMIT 4 OFFSET -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 13:47:20 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(85): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 13:49:07 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` WHERE `id_user` = '6' LIMIT 4 OFFSET -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 13:49:07 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(85): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 13:50:17 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` WHERE `id_user` = '6' LIMIT 4 OFFSET -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 13:50:17 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(85): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 13:50:18 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` WHERE `id_user` = '6' LIMIT 4 OFFSET -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 13:50:18 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(85): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 13:50:18 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` WHERE `id_user` = '6' LIMIT 4 OFFSET -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 13:50:18 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(85): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 14:04:44 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` WHERE `id_user` = '6' LIMIT 4 OFFSET -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 14:04:44 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(85): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 14:05:56 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` WHERE `id_user` = '6' LIMIT 4 OFFSET -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 14:05:56 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(85): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 14:06:04 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete annonce model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:288
2013-10-25 14:06:04 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(288): Kohana_ORM->delete()
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:288
2013-10-25 14:06:40 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete annonce model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:288
2013-10-25 14:06:40 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(288): Kohana_ORM->delete()
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:288
2013-10-25 14:08:15 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete annonce model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:288
2013-10-25 14:08:15 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(288): Kohana_ORM->delete()
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:288
2013-10-25 14:08:37 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete annonce model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:288
2013-10-25 14:08:37 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(288): Kohana_ORM->delete()
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:288
2013-10-25 14:11:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: ads ~ APPPATH/classes/Controller/Annonces.php [ 286 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:286
2013-10-25 14:11:05 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(286): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 286, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:286
2013-10-25 14:11:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: ads ~ APPPATH/classes/Controller/Annonces.php [ 286 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:286
2013-10-25 14:11:25 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(286): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 286, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:286
2013-10-25 14:12:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: ads ~ APPPATH/classes/Controller/Annonces.php [ 286 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:286
2013-10-25 14:12:12 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(286): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 286, Array)
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:286
2013-10-25 14:13:43 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete annonce model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:288
2013-10-25 14:13:43 --- DEBUG: #0 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(288): Kohana_ORM->delete()
#1 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php:288
2013-10-25 14:23:45 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::image() must be of the type array, null given ~ SYSPATH/classes/Kohana/Upload.php [ 209 ] in /opt/lampp/htdocs/freeads/system/classes/Kohana/Upload.php:209
2013-10-25 14:23:45 --- DEBUG: #0 /opt/lampp/htdocs/freeads/system/classes/Kohana/Upload.php(209): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/opt/lampp/htdo...', 209, Array)
#1 [internal function]: Kohana_Upload::image(NULL)
#2 /opt/lampp/htdocs/freeads/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(109): Kohana_Validation->check()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/system/classes/Kohana/Upload.php:209
2013-10-25 15:37:21 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` WHERE `id_user` = '28' LIMIT 4 OFFSET -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 15:37:21 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(85): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 15:38:05 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` WHERE `id_user` = '28' LIMIT 4 OFFSET -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 15:38:05 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(85): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 15:38:34 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` WHERE `id_user` = '28' LIMIT 4 OFFSET -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 15:38:34 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(85): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 15:39:02 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-4' at line 1 [ SELECT `annonce`.`id` AS `id`, `annonce`.`id_user` AS `id_user`, `annonce`.`title` AS `title`, `annonce`.`content` AS `content`, `annonce`.`date_pub` AS `date_pub`, `annonce`.`price` AS `price`, `annonce`.`city` AS `city`, `annonce`.`img_path` AS `img_path`, `annonce`.`category` AS `category` FROM `annonces` AS `annonce` WHERE `id_user` = '6' LIMIT 4 OFFSET -4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 15:39:02 --- DEBUG: #0 /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', 'Model_Annonce', Array)
#1 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /opt/lampp/htdocs/freeads/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /opt/lampp/htdocs/freeads/application/classes/Controller/Annonces.php(85): Kohana_ORM->find_all()
#4 /opt/lampp/htdocs/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_myLIST()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#7 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/freeads/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/freeads/modules/database/classes/Kohana/Database/Query.php:251