<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-09 09:25:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: form ~ SYSPATH/classes/Kohana/Validation.php [ 102 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:102
2013-10-09 09:25:44 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 102, Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(25): Kohana_Validation->offsetGet('form')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:102
2013-10-09 09:25:59 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:25
2013-10-09 09:25:59 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(25): Kohana_Upload::save(Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:25
2013-10-09 09:26:17 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:25
2013-10-09 09:26:17 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(25): Kohana_Upload::save(Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:25
2013-10-09 09:26:32 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:25
2013-10-09 09:26:32 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(25): Kohana_Upload::save(Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:25
2013-10-09 09:26:52 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:25
2013-10-09 09:26:52 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(25): Kohana_Upload::save(Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:25
2013-10-09 09:27:33 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:25
2013-10-09 09:27:33 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(25): Kohana_Upload::save(Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:25
2013-10-09 09:30:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 8 ] in /opt/lampp/htdocs/cloudwac/application/views/template/template.php:8
2013-10-09 09:30:38 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/template/template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 8, Array)
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
2013-10-09 09:48:37 --- EMERGENCY: ErrorException [ 2 ]: move_uploaded_file(/opt/lampp/htdocs/cloudwac/uploads/23/52550a5561167follow_twak.zip): failed to open stream: Permission denied ~ SYSPATH/classes/Kohana/Upload.php [ 87 ] in file:line
2013-10-09 09:48:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', '/opt/lampp/htdo...', 87, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php(87): move_uploaded_file('/tmp/phpnIpIB7', '/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(49): Kohana_Upload::save(Array, NULL, '/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-10-09 09:53:39 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT//uploads/23 must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:49
2013-10-09 09:53:39 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(49): Kohana_Upload::save(Array, NULL, '/opt/lampp/htdo...')
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:49
2013-10-09 09:54:01 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT//uploads/23 must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:35
2013-10-09 09:54:01 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(35): Kohana_Upload::save(Array, NULL, '/opt/lampp/htdo...')
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:35
2013-10-09 10:26:44 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2013-10-09 10:26:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/opt/lampp/htdo...', 377, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(34): Kohana_Validation->check()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-10-09 10:27:06 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be of the type array, null given ~ SYSPATH/classes/Kohana/Upload.php [ 129 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php:129
2013-10-09 10:27:06 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/opt/lampp/htdo...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#3 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(34): Kohana_Validation->check()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php:129
2013-10-09 10:27:06 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 38232138 bytes) ~ SYSPATH/classes/Kohana/UTF8.php [ 115 ] in file:line
2013-10-09 10:27:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:27:37 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be of the type array, null given ~ SYSPATH/classes/Kohana/Upload.php [ 129 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php:129
2013-10-09 10:27:37 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/opt/lampp/htdo...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#3 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(34): Kohana_Validation->check()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php:129
2013-10-09 10:28:08 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be of the type array, null given ~ SYSPATH/classes/Kohana/Upload.php [ 129 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php:129
2013-10-09 10:28:08 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/opt/lampp/htdo...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#3 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(33): Kohana_Validation->check()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php:129
2013-10-09 10:30:20 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be of the type array, null given ~ SYSPATH/classes/Kohana/Upload.php [ 129 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php:129
2013-10-09 10:30:20 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/opt/lampp/htdo...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#3 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(33): Kohana_Validation->check()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php:129
2013-10-09 10:30:20 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 38232138 bytes) ~ SYSPATH/classes/Kohana/UTF8.php [ 115 ] in file:line
2013-10-09 10:30:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:43:46 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be of the type array, null given ~ SYSPATH/classes/Kohana/Upload.php [ 129 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php:129
2013-10-09 10:43:46 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/opt/lampp/htdo...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#3 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(34): Kohana_Validation->check()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php:129
2013-10-09 10:43:46 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 38232138 bytes) ~ SYSPATH/classes/Kohana/UTF8.php [ 115 ] in file:line
2013-10-09 10:43:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:44:21 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::size() must be of the type array, string given ~ SYSPATH/classes/Kohana/Upload.php [ 169 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php:169
2013-10-09 10:44:21 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php(169): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/opt/lampp/htdo...', 169, Array)
#1 [internal function]: Kohana_Upload::size('30M')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(34): Kohana_Validation->check()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php:169
2013-10-09 10:46:07 --- EMERGENCY: ReflectionException [ 0 ]: Method Upload::size[30M]() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 407 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:407
2013-10-09 10:46:07 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(407): ReflectionMethod->__construct('Upload', 'size[30M]')
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(34): Kohana_Validation->check()
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:407
2013-10-09 10:46:13 --- EMERGENCY: ReflectionException [ 0 ]: Method Upload::size[30M]() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 407 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:407
2013-10-09 10:46:13 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(407): ReflectionMethod->__construct('Upload', 'size[30M]')
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(34): Kohana_Validation->check()
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:407
2013-10-09 10:51:19 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::size() must be of the type array, string given ~ SYSPATH/classes/Kohana/Upload.php [ 169 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php:169
2013-10-09 10:51:19 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php(169): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/opt/lampp/htdo...', 169, Array)
#1 [internal function]: Kohana_Upload::size('30M')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(34): Kohana_Validation->check()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php:169
2013-10-09 10:56:46 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::size() must be of the type array, string given ~ SYSPATH/classes/Kohana/Upload.php [ 169 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php:169
2013-10-09 10:56:46 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php(169): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/opt/lampp/htdo...', 169, Array)
#1 [internal function]: Kohana_Upload::size('30M')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(35): Kohana_Validation->check()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Upload.php:169
2013-10-09 11:01:15 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Upload' does not have a method 'size[30M]' ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2013-10-09 11:01:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/opt/lampp/htdo...', 377, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(35): Kohana_Validation->check()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-10-09 11:09:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH/classes/Controller/Files.php [ 26 ] in file:line
2013-10-09 11:09:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 11:09:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH/classes/Kohana/Validation.php [ 242 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:242
2013-10-09 11:09:32 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(242): Kohana_Core::error_handler(8, 'Undefined offse...', '/opt/lampp/htdo...', 242, Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(32): Kohana_Validation->rules('image', Array)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:242
2013-10-09 11:14:14 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH/classes/Controller/Files.php [ 36 ] in file:line
2013-10-09 11:14:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 11:15:22 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH/classes/Controller/Files.php [ 36 ] in file:line
2013-10-09 11:15:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 11:15:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/Controller/Files.php [ 47 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:47
2013-10-09 11:15:54 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 47, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:47
2013-10-09 11:27:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::files() ~ APPPATH/classes/Controller/Files.php [ 42 ] in file:line
2013-10-09 11:27:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 11:28:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Validation::files() ~ APPPATH/classes/Controller/Files.php [ 42 ] in file:line
2013-10-09 11:28:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 11:29:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::files() ~ APPPATH/classes/Controller/Files.php [ 45 ] in file:line
2013-10-09 11:29:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 11:30:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function post() ~ APPPATH/classes/Controller/Files.php [ 41 ] in file:line
2013-10-09 11:30:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 11:32:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Files::$id_user ~ APPPATH/classes/Controller/Files.php [ 42 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:42
2013-10-09 11:32:54 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 42, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:42
2013-10-09 11:39:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Controller/Files.php [ 43 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:43
2013-10-09 11:39:51 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(43): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 43, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:43
2013-10-09 11:40:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Validation::$name ~ APPPATH/classes/Controller/Files.php [ 43 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:43
2013-10-09 11:40:53 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(43): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 43, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:43
2013-10-09 11:41:24 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ SYSPATH/classes/Kohana/Arr.php [ 104 ] in file:line
2013-10-09 11:41:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/opt/lampp/htdo...', 104, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Arr.php(104): array_key_exists(Object(Validation), Array)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(1319): Kohana_Arr::path(Array, Object(Validation))
#3 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(43): Kohana_Request->post(Object(Validation))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-09 11:42:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ SYSPATH/classes/Kohana/Validation.php [ 102 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:102
2013-10-09 11:42:01 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 102, Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(43): Kohana_Validation->offsetGet('name')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:102
2013-10-09 11:42:09 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ SYSPATH/classes/Kohana/Arr.php [ 104 ] in file:line
2013-10-09 11:42:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/opt/lampp/htdo...', 104, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Arr.php(104): array_key_exists(Object(Validation), Array)
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(1319): Kohana_Arr::path(Array, Object(Validation))
#3 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(43): Kohana_Request->post(Object(Validation))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-09 11:44:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ SYSPATH/classes/Kohana/Validation.php [ 102 ] in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:102
2013-10-09 11:44:13 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 102, Array)
#1 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(43): Kohana_Validation->offsetGet('name')
#2 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Validation.php:102
2013-10-09 11:44:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Validation::$file ~ APPPATH/classes/Controller/Files.php [ 43 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:43
2013-10-09 11:44:38 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(43): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 43, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:43
2013-10-09 11:44:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Controller/Files.php [ 43 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:43
2013-10-09 11:44:56 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(43): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 43, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:43
2013-10-09 15:17:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH/classes/Controller/Files.php [ 5 ] in file:line
2013-10-09 15:17:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 15:18:58 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-10-09 15:18:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 15:19:16 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-10-09 15:19:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 15:32:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::bind() ~ APPPATH/classes/Controller/Files.php [ 25 ] in file:line
2013-10-09 15:32:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 15:33:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Upload::bind() ~ APPPATH/classes/Controller/Files.php [ 20 ] in file:line
2013-10-09 15:33:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 15:35:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: fileINFO ~ APPPATH/views/space/filemanager.php [ 11 ] in /opt/lampp/htdocs/cloudwac/application/views/space/filemanager.php:11
2013-10-09 15:35:16 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/space/filemanager.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 11, Array)
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
#14 {main} in /opt/lampp/htdocs/cloudwac/application/views/space/filemanager.php:11
2013-10-09 15:55:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_files' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-09 15:55:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 16:04:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH/views/space/filemanager.php [ 22 ] in /opt/lampp/htdocs/cloudwac/application/views/space/filemanager.php:22
2013-10-09 16:04:36 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/space/filemanager.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 22, Array)
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
#14 {main} in /opt/lampp/htdocs/cloudwac/application/views/space/filemanager.php:22
2013-10-09 16:06:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: idUser ~ APPPATH/classes/Controller/Files.php [ 22 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:22
2013-10-09 16:06:30 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 22, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:22
2013-10-09 17:44:05 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Files.php [ 21 ] in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:21
2013-10-09 17:44:05 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php(21): Kohana_Core::error_handler(8, 'Trying to get p...', '/opt/lampp/htdo...', 21, Array)
#1 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Files->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/cloudwac/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/cloudwac/application/classes/Controller/Files.php:21
2013-10-09 22:28:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function id3_get_tag() ~ APPPATH/views/space/filemanager.php [ 16 ] in file:line
2013-10-09 22:28:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 22:30:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function id3_get_tag() ~ APPPATH/views/space/filemanager.php [ 17 ] in file:line
2013-10-09 22:30:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 22:31:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: tag ~ APPPATH/views/space/filemanager.php [ 19 ] in /opt/lampp/htdocs/cloudwac/application/views/space/filemanager.php:19
2013-10-09 22:31:31 --- DEBUG: #0 /opt/lampp/htdocs/cloudwac/application/views/space/filemanager.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 19, Array)
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
#14 {main} in /opt/lampp/htdocs/cloudwac/application/views/space/filemanager.php:19
2013-10-09 22:32:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function id3_get_tag() ~ APPPATH/views/space/filemanager.php [ 18 ] in file:line
2013-10-09 22:32:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 22:44:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function id3_get_tag() ~ APPPATH/views/space/filemanager.php [ 18 ] in file:line
2013-10-09 22:44:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 22:44:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function id3_get_tag() ~ APPPATH/views/space/filemanager.php [ 18 ] in file:line
2013-10-09 22:44:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 22:44:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function id3_get_tag() ~ APPPATH/views/space/filemanager.php [ 18 ] in file:line
2013-10-09 22:44:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 22:52:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function id3_get_tag() ~ APPPATH/views/space/filemanager.php [ 18 ] in file:line
2013-10-09 22:52:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 22:52:08 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function id3_get_tag() ~ APPPATH/views/space/filemanager.php [ 18 ] in file:line
2013-10-09 22:52:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 22:52:08 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function id3_get_tag() ~ APPPATH/views/space/filemanager.php [ 18 ] in file:line
2013-10-09 22:52:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 22:52:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function id3_get_tag() ~ APPPATH/views/space/filemanager.php [ 18 ] in file:line
2013-10-09 22:52:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 23:26:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function id3_get_tag() ~ APPPATH/views/space/filemanager.php [ 18 ] in file:line
2013-10-09 23:26:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 23:26:57 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function id3_get_tag() ~ APPPATH/views/space/filemanager.php [ 18 ] in file:line
2013-10-09 23:26:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 23:54:14 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function id3_get_tag() ~ APPPATH/views/space/filemanager.php [ 18 ] in file:line
2013-10-09 23:54:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 23:54:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function id3_get_tag() ~ APPPATH/views/space/filemanager.php [ 18 ] in file:line
2013-10-09 23:54:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 23:54:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function id3_get_tag() ~ APPPATH/views/space/filemanager.php [ 18 ] in file:line
2013-10-09 23:54:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 23:54:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function id3_get_tag() ~ APPPATH/views/space/filemanager.php [ 18 ] in file:line
2013-10-09 23:54:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line