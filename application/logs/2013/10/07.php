<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-07 11:45:09 --- EMERGENCY: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'cloudwac' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-07 11:45:09 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('cloudwac')
#1 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#4 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(10): Kohana_ORM::factory('User')
#9 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-07 11:47:32 --- EMERGENCY: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'cloudwac' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-07 11:47:32 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('cloudwac')
#1 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#4 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(10): Kohana_ORM::factory('User')
#9 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-07 11:49:37 --- EMERGENCY: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'cloudwac' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-07 11:49:37 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('cloudwac')
#1 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#4 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(10): Kohana_ORM::factory('User')
#9 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-07 11:49:38 --- EMERGENCY: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'cloudwac' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-07 11:49:38 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('cloudwac')
#1 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#4 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(10): Kohana_ORM::factory('User')
#9 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-07 11:49:39 --- EMERGENCY: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'cloudwac' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-07 11:49:39 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('cloudwac')
#1 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#4 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(10): Kohana_ORM::factory('User')
#9 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-07 11:49:39 --- EMERGENCY: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'cloudwac' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-07 11:49:39 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('cloudwac')
#1 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#4 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(10): Kohana_ORM::factory('User')
#9 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-07 11:49:39 --- EMERGENCY: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'cloudwac' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-07 11:49:39 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('cloudwac')
#1 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#4 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(10): Kohana_ORM::factory('User')
#9 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-07 11:49:39 --- EMERGENCY: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'cloudwac' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-07 11:49:39 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('cloudwac')
#1 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#4 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(10): Kohana_ORM::factory('User')
#9 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-07 11:49:39 --- EMERGENCY: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'cloudwac' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-07 11:49:39 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('cloudwac')
#1 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#4 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(10): Kohana_ORM::factory('User')
#9 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-07 11:49:39 --- EMERGENCY: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'cloudwac' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-07 11:49:39 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('cloudwac')
#1 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#4 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(10): Kohana_ORM::factory('User')
#9 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-07 11:49:39 --- EMERGENCY: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'cloudwac' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-07 11:49:39 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('cloudwac')
#1 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#4 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(10): Kohana_ORM::factory('User')
#9 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/cloudwac/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-07 14:31:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-07 14:31:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 14:32:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-07 14:32:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 14:33:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-07 14:33:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 14:38:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH/classes/Model/user.php [ 9 ] in file:line
2013-10-07 14:38:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 14:46:31 --- EMERGENCY: Kohana_Exception [ 0 ]: The _rules property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:603
2013-10-07 14:46:31 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('_rules')
#1 /opt/lampp/htdocs/cloudwac/application/classes/Model/user.php(10): Kohana_ORM->__get('_rules')
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(14): Model_User->validate_create(Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:603
2013-10-07 14:50:14 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Validation::rules() must be of the type array, null given, called in /opt/lampp/htdocs/cloudwac/application/classes/Model/user.php on line 11 and defined ~ SYSPATH/classes/Kohana/Validation.php [ 238 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:238
2013-10-07 14:50:14 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(238): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/opt/lampp/htdo...', 238, Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Model/user.php(11): Kohana_Validation->rules('password', NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(14): Model_User->validate_create(Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:238
2013-10-07 15:17:07 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Validation::rules() must be of the type array, null given, called in /opt/lampp/htdocs/cloudwac/application/classes/Model/user.php on line 11 and defined ~ SYSPATH/classes/Kohana/Validation.php [ 238 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:238
2013-10-07 15:17:07 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(238): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/opt/lampp/htdo...', 238, Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Model/user.php(11): Kohana_Validation->rules('password', NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(14): Model_User->validate_create(Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:238
2013-10-07 15:20:53 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Validation::rules() must be of the type array, null given, called in /opt/lampp/htdocs/cloudwac/application/classes/Model/user.php on line 27 and defined ~ SYSPATH/classes/Kohana/Validation.php [ 238 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:238
2013-10-07 15:20:53 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(238): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/opt/lampp/htdo...', 238, Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Model/user.php(27): Kohana_Validation->rules('password', NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(14): Model_User->validate_create(Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:238
2013-10-07 15:22:01 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Validation::rules() must be of the type array, null given, called in /opt/lampp/htdocs/cloudwac/application/classes/Model/user.php on line 28 and defined ~ SYSPATH/classes/Kohana/Validation.php [ 238 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:238
2013-10-07 15:22:01 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(238): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/opt/lampp/htdo...', 238, Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Model/user.php(28): Kohana_Validation->rules('password', NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(14): Model_User->validate_create(Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:238
2013-10-07 15:24:10 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Validation::rules() must be of the type array, null given, called in /opt/lampp/htdocs/cloudwac/application/classes/Model/user.php on line 12 and defined ~ SYSPATH/classes/Kohana/Validation.php [ 238 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:238
2013-10-07 15:24:10 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(238): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/opt/lampp/htdo...', 238, Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Model/user.php(12): Kohana_Validation->rules('password', NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(14): Model_User->validate_create(Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:238
2013-10-07 15:25:51 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Validation::rules() must be of the type array, null given, called in /opt/lampp/htdocs/cloudwac/application/classes/Model/user.php on line 12 and defined ~ SYSPATH/classes/Kohana/Validation.php [ 238 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:238
2013-10-07 15:25:51 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(238): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/opt/lampp/htdo...', 238, Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Model/user.php(12): Kohana_Validation->rules('password', NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(14): Model_User->validate_create(Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:238
2013-10-07 15:29:29 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Validation::rules() must be of the type array, null given, called in /opt/lampp/htdocs/cloudwac/application/classes/Model/user.php on line 13 and defined ~ SYSPATH/classes/Kohana/Validation.php [ 238 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:238
2013-10-07 15:29:29 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(238): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/opt/lampp/htdo...', 238, Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Model/user.php(13): Kohana_Validation->rules('username', NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(14): Model_User->validate_create(Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:238
2013-10-07 15:29:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Validation::filter() ~ APPPATH/classes/Model/user.php [ 16 ] in file:line
2013-10-07 15:29:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 15:32:53 --- EMERGENCY: Kohana_Exception [ 0 ]: The _callbacks property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:603
2013-10-07 15:32:53 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('_callbacks')
#1 /opt/lampp/htdocs/cloudwac/application/classes/Model/user.php(18): Kohana_ORM->__get('_callbacks')
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(14): Model_User->validate_create(Object(Validation))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:603
2013-10-07 16:08:37 --- EMERGENCY: Kohana_Exception [ 0 ]: The _callbacks property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:603
2013-10-07 16:08:37 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('_callbacks')
#1 /opt/lampp/htdocs/cloudwac/application/classes/Model/user.php(19): Kohana_ORM->__get('_callbacks')
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(14): Model_User->validate_create(Object(Validation))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:603
2013-10-07 16:08:47 --- EMERGENCY: Kohana_Exception [ 0 ]: The _callbacks property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:603
2013-10-07 16:08:47 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('_callbacks')
#1 /opt/lampp/htdocs/cloudwac/application/classes/Model/user.php(19): Kohana_ORM->__get('_callbacks')
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(14): Model_User->validate_create(Object(Validation))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:603
2013-10-07 16:15:46 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Model/user.php [ 19 ] in /opt/lampp/htdocs/cloudwac/application/classes/Model/user.php:19
2013-10-07 16:15:46 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Model/user.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', '/opt/lampp/htdo...', 19, Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(14): Model_User->validate_create(Object(Validation))
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Model/user.php:19
2013-10-07 16:21:31 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'unique_username' ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2013-10-07 16:21:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/opt/lampp/htdo...', 377, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(24): Kohana_Validation->check()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-10-07 16:23:08 --- EMERGENCY: View_Exception [ 0 ]: The requested view user/register could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php:137
2013-10-07 16:23:08 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(137): Kohana_View->set_filename('user/register')
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(30): Kohana_View->__construct('user/register', NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(37): Kohana_View::factory('user/register')
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php:137
2013-10-07 16:24:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view user/register could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php:137
2013-10-07 16:24:05 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(137): Kohana_View->set_filename('user/register')
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php(30): Kohana_View->__construct('user/register', NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(37): Kohana_View::factory('user/register')
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/View.php:137
2013-10-07 16:24:58 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/Users.php [ 38 ] in file:line
2013-10-07 16:24:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 16:31:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/Users.php [ 37 ] in file:line
2013-10-07 16:31:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 16:54:32 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/Users.php [ 10 ] in file:line
2013-10-07 16:54:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 16:55:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/Users.php [ 11 ] in file:line
2013-10-07 16:55:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 16:55:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/Users.php [ 11 ] in file:line
2013-10-07 16:55:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 16:56:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/Users.php [ 11 ] in file:line
2013-10-07 16:56:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 16:57:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::body() ~ APPPATH/classes/Controller/Users.php [ 10 ] in file:line
2013-10-07 16:57:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 16:57:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM) ~ APPPATH/classes/Controller/Users.php [ 9 ] in file:line
2013-10-07 16:57:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 16:58:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/Users.php [ 10 ] in file:line
2013-10-07 16:58:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 16:58:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/Users.php [ 10 ] in file:line
2013-10-07 16:58:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 17:00:57 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::param() ~ APPPATH/classes/Controller/Users.php [ 10 ] in file:line
2013-10-07 17:00:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 17:07:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/Users.php [ 24 ] in file:line
2013-10-07 17:07:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 17:08:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/Users.php [ 25 ] in file:line
2013-10-07 17:08:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 17:08:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/Users.php [ 25 ] in file:line
2013-10-07 17:08:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 17:09:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/Users.php [ 25 ] in file:line
2013-10-07 17:09:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 17:10:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::register() ~ APPPATH/classes/Controller/Users.php [ 28 ] in file:line
2013-10-07 17:10:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 17:13:11 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::save() must be an instance of Validation, array given, called in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php on line 28 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1419 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1419
2013-10-07 17:13:11 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1419): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/opt/lampp/htdo...', 1419, Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(28): Kohana_ORM->save(Array)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1419
2013-10-07 17:13:40 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-07 17:13:40 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(Object(Validation))
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(28): Kohana_ORM->save(Object(Validation))
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-07 17:20:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Users::save() ~ APPPATH/classes/Controller/Users.php [ 29 ] in file:line
2013-10-07 17:20:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 17:21:10 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::save() must be an instance of Validation, array given, called in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php on line 28 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1419 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1419
2013-10-07 17:21:10 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1419): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/opt/lampp/htdo...', 1419, Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(28): Kohana_ORM->save(Array)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1419
2013-10-07 21:21:25 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::save() must be an instance of Validation, array given, called in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php on line 28 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1419 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1419
2013-10-07 21:21:25 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1419): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/opt/lampp/htdo...', 1419, Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(28): Kohana_ORM->save(Array)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1419
2013-10-07 21:31:23 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-07 21:31:23 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(28): Kohana_ORM->save()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-07 21:31:46 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-07 21:31:46 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(28): Kohana_ORM->save()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-07 21:34:21 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-07 21:34:21 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(30): Kohana_ORM->save()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-07 21:34:30 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-07 21:34:30 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(30): Kohana_ORM->save()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-07 21:35:23 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-07 21:35:23 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(30): Kohana_ORM->save()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-07 21:35:30 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-07 21:35:30 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(30): Kohana_ORM->save()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-07 21:36:01 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-07 21:36:01 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(30): Kohana_ORM->save()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-07 21:45:35 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-07 21:45:35 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(30): Kohana_ORM->save()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-07 21:53:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Model/user.php [ 39 ] in file:line
2013-10-07 21:53:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 21:54:09 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-07 21:54:09 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(30): Kohana_ORM->save()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-07 21:55:57 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in file:line
2013-10-07 21:55:57 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('test')
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1210): call_user_func_array(Array, Array)
#2 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('password', 'test')
#3 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password', 'test')
#4 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(14): Kohana_ORM->__set('password', 'test')
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#6 [internal function]: Kohana_Controller->execute()
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-10-07 21:56:39 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Cookie.php:67
2013-10-07 21:56:39 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /opt/lampp/htdocs/cloudwac/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Cookie.php:67
2013-10-07 21:59:47 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-07 21:59:47 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(30): Kohana_ORM->save()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-07 22:02:33 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in file:line
2013-10-07 22:02:33 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('test')
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1210): call_user_func_array(Array, Array)
#2 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('password', 'test')
#3 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password', 'test')
#4 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(14): Kohana_ORM->__set('password', 'test')
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#6 [internal function]: Kohana_Controller->execute()
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-10-07 22:10:54 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in file:line
2013-10-07 22:10:54 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('test')
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(1210): call_user_func_array(Array, Array)
#2 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('password', 'test')
#3 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password', 'test')
#4 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(14): Kohana_ORM->__set('password', 'test')
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#6 [internal function]: Kohana_Controller->execute()
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-10-07 22:13:04 --- EMERGENCY: Kohana_Exception [ 0 ]: The email property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-07 22:13:04 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('email', NULL)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(15): Kohana_ORM->__set('email', NULL)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-07 22:14:00 --- EMERGENCY: Kohana_Exception [ 0 ]: The email property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-07 22:14:00 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('email', 'test@mail.com')
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(15): Kohana_ORM->__set('email', 'test@mail.com')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-07 22:14:10 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Users.php [ 21 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:21
2013-10-07 22:14:10 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(21): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 21, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:21
2013-10-07 22:14:21 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Users.php [ 21 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:21
2013-10-07 22:14:21 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(21): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 21, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:21
2013-10-07 22:15:04 --- EMERGENCY: Kohana_Exception [ 0 ]: The email property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-07 22:15:04 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('email', NULL)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(16): Kohana_ORM->__set('email', NULL)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-07 22:15:24 --- EMERGENCY: Kohana_Exception [ 0 ]: The email property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-07 22:15:24 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('email', NULL)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(16): Kohana_ORM->__set('email', NULL)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-07 22:15:30 --- EMERGENCY: Kohana_Exception [ 0 ]: The email property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-07 22:15:30 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('email', NULL)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(16): Kohana_ORM->__set('email', NULL)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-07 22:15:46 --- EMERGENCY: Kohana_Exception [ 0 ]: The email property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-07 22:15:46 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('email', NULL)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(16): Kohana_ORM->__set('email', NULL)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM.php:702
2013-10-07 22:22:25 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Users.php [ 23 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:23
2013-10-07 22:22:25 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(23): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 23, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:23
2013-10-07 22:23:16 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Users.php [ 22 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:22
2013-10-07 22:23:16 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(22): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 22, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:22
2013-10-07 22:23:26 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Users.php [ 22 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:22
2013-10-07 22:23:26 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(22): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 22, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:22
2013-10-07 22:24:33 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Users.php [ 24 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:24
2013-10-07 22:24:33 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(24): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 24, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:24
2013-10-07 22:26:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Users.php [ 40 ] in file:line
2013-10-07 22:26:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 22:26:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/Controller/Users.php [ 40 ] in file:line
2013-10-07 22:26:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-07 22:27:04 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/orm/classes/Kohana/ORM/Validation/Exception.php [ 168 ] in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM/Validation/Exception.php:168
2013-10-07 22:27:04 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM/Validation/Exception.php(168): Kohana_Core::error_handler(8, 'Array to string...', '/opt/lampp/htdo...', 168, Array)
#1 /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM/Validation/Exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('user', Array, Array, true)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(40): Kohana_ORM_Validation_Exception->errors(Array)
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/cloudwac/modules/orm/classes/Kohana/ORM/Validation/Exception.php:168
2013-10-07 22:28:15 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Users.php [ 24 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:24
2013-10-07 22:28:15 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(24): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 24, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:24
2013-10-07 22:39:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-07 22:39:57 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
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
2013-10-07 22:40:19 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Users.php [ 25 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:25
2013-10-07 22:40:19 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(25): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 25, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:25
2013-10-07 22:41:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-07 22:41:01 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
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
2013-10-07 22:45:21 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Users.php [ 26 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:26
2013-10-07 22:45:21 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(26): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 26, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:26
2013-10-07 22:45:41 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Users.php [ 26 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:26
2013-10-07 22:45:41 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(26): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 26, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:26
2013-10-07 22:50:37 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Users.php [ 35 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:35
2013-10-07 22:50:37 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(35): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 35, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:35
2013-10-07 22:51:17 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Users.php [ 35 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:35
2013-10-07 22:51:17 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(35): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 35, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:35
2013-10-07 22:51:46 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Users.php [ 36 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:36
2013-10-07 22:51:46 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php(36): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 36, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Users->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Users.php:36
2013-10-07 22:53:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-07 22:53:31 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
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