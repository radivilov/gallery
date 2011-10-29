<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-25 21:55:17 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ APPPATH\classes\controller\main.php [ 21 ]
2011-10-25 21:55:17 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ APPPATH\classes\controller\main.php [ 21 ]
--
#0 [internal function]: Controller_Main->action_index()
#1 Z:\home\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#2 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#5 {main}
2011-10-25 22:10:41 --- ERROR: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\main.php [ 18 ]
2011-10-25 22:10:41 --- STRACE: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\main.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-25 22:12:17 --- ERROR: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\main.php [ 18 ]
2011-10-25 22:12:17 --- STRACE: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\main.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-25 22:14:03 --- ERROR: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\main.php [ 18 ]
2011-10-25 22:14:03 --- STRACE: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\main.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-25 22:14:13 --- ERROR: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\main.php [ 18 ]
2011-10-25 22:14:13 --- STRACE: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\main.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-25 22:15:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-10-25 22:15:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-25 22:15:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-10-25 22:15:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-25 22:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-10-25 22:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-25 22:15:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-10-25 22:15:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-25 22:15:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-10-25 22:15:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-25 22:16:02 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH\classes\kohana\validation.php [ 228 ]
2011-10-25 22:16:02 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH\classes\kohana\validation.php [ 228 ]
--
#0 Z:\home\kohana\system\classes\kohana\validation.php(228): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana\...', 228, Array)
#1 Z:\home\kohana\application\classes\controller\load.php(16): Kohana_Validation->rules('image', Array)
#2 [internal function]: Controller_Load->action_post()
#3 Z:\home\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Load))
#4 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-25 22:16:41 --- ERROR: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\load.php [ 8 ]
2011-10-25 22:16:41 --- STRACE: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\load.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-25 22:17:02 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH\classes\kohana\validation.php [ 228 ]
2011-10-25 22:17:02 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH\classes\kohana\validation.php [ 228 ]
--
#0 Z:\home\kohana\system\classes\kohana\validation.php(228): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana\...', 228, Array)
#1 Z:\home\kohana\application\classes\controller\load.php(16): Kohana_Validation->rules('image', Array)
#2 [internal function]: Controller_Load->action_post()
#3 Z:\home\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Load))
#4 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-25 22:18:33 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, null given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
2011-10-25 22:18:33 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, null given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
--
#0 Z:\home\kohana\system\classes\kohana\upload.php(146): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\kohana\...', 146, Array)
#1 [internal function]: Kohana_Upload::type(NULL, Array)
#2 Z:\home\kohana\system\classes\kohana\validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\kohana\application\classes\controller\load.php(16): Kohana_Validation->check()
#4 [internal function]: Controller_Load->action_post()
#5 Z:\home\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Load))
#6 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-25 22:20:36 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Upload::type() must be an array, none given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
2011-10-25 22:20:36 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Upload::type() must be an array, none given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
--
#0 Z:\home\kohana\system\classes\kohana\upload.php(146): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\kohana\...', 146, Array)
#1 [internal function]: Kohana_Upload::type(Array)
#2 Z:\home\kohana\system\classes\kohana\validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\kohana\application\classes\controller\load.php(16): Kohana_Validation->check()
#4 [internal function]: Controller_Load->action_post()
#5 Z:\home\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Load))
#6 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-25 22:21:38 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::size() must be an array, null given ~ SYSPATH\classes\kohana\upload.php [ 169 ]
2011-10-25 22:21:38 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::size() must be an array, null given ~ SYSPATH\classes\kohana\upload.php [ 169 ]
--
#0 Z:\home\kohana\system\classes\kohana\upload.php(169): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\kohana\...', 169, Array)
#1 [internal function]: Kohana_Upload::size(NULL, '1M')
#2 Z:\home\kohana\system\classes\kohana\validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\kohana\application\classes\controller\load.php(16): Kohana_Validation->check()
#4 [internal function]: Controller_Load->action_post()
#5 Z:\home\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Load))
#6 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-25 22:34:57 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, null given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
2011-10-25 22:34:57 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, null given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
--
#0 Z:\home\kohana\system\classes\kohana\upload.php(146): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\kohana\...', 146, Array)
#1 [internal function]: Kohana_Upload::type(NULL, Array)
#2 Z:\home\kohana\system\classes\kohana\validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\kohana\application\classes\controller\load.php(18): Kohana_Validation->check()
#4 [internal function]: Controller_Load->action_post()
#5 Z:\home\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Load))
#6 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-25 22:35:05 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, null given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
2011-10-25 22:35:05 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, null given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
--
#0 Z:\home\kohana\system\classes\kohana\upload.php(146): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\kohana\...', 146, Array)
#1 [internal function]: Kohana_Upload::type(NULL, Array)
#2 Z:\home\kohana\system\classes\kohana\validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\kohana\application\classes\controller\load.php(18): Kohana_Validation->check()
#4 [internal function]: Controller_Load->action_post()
#5 Z:\home\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Load))
#6 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-25 22:35:15 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, null given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
2011-10-25 22:35:15 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, null given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
--
#0 Z:\home\kohana\system\classes\kohana\upload.php(146): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\kohana\...', 146, Array)
#1 [internal function]: Kohana_Upload::type(NULL, Array)
#2 Z:\home\kohana\system\classes\kohana\validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\kohana\application\classes\controller\load.php(18): Kohana_Validation->check()
#4 [internal function]: Controller_Load->action_post()
#5 Z:\home\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Load))
#6 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-25 22:35:30 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, null given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
2011-10-25 22:35:30 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, null given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
--
#0 Z:\home\kohana\system\classes\kohana\upload.php(146): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\kohana\...', 146, Array)
#1 [internal function]: Kohana_Upload::type(NULL, Array)
#2 Z:\home\kohana\system\classes\kohana\validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\kohana\application\classes\controller\load.php(18): Kohana_Validation->check()
#4 [internal function]: Controller_Load->action_post()
#5 Z:\home\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Load))
#6 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-25 23:32:34 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, null given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
2011-10-25 23:32:34 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, null given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
--
#0 Z:\home\kohana\system\classes\kohana\upload.php(146): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\kohana\...', 146, Array)
#1 [internal function]: Kohana_Upload::type(NULL, Array)
#2 Z:\home\kohana\system\classes\kohana\validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\kohana\application\classes\controller\load.php(17): Kohana_Validation->check()
#4 [internal function]: Controller_Load->action_post()
#5 Z:\home\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Load))
#6 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-25 23:36:03 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, null given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
2011-10-25 23:36:03 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, null given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
--
#0 Z:\home\kohana\system\classes\kohana\upload.php(146): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\kohana\...', 146, Array)
#1 [internal function]: Kohana_Upload::type(NULL, Array)
#2 Z:\home\kohana\system\classes\kohana\validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\kohana\application\classes\controller\load.php(17): Kohana_Validation->check()
#4 [internal function]: Controller_Load->action_post()
#5 Z:\home\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Load))
#6 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-25 23:37:27 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: Z:\home\kohana\www ~ MODPATH\image\classes\kohana\image.php [ 106 ]
2011-10-25 23:37:27 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: Z:\home\kohana\www ~ MODPATH\image\classes\kohana\image.php [ 106 ]
--
#0 Z:\home\kohana\modules\image\classes\kohana\image\gd.php(90): Kohana_Image->__construct(false)
#1 Z:\home\kohana\modules\image\classes\kohana\image.php(53): Kohana_Image_GD->__construct(false)
#2 Z:\home\kohana\application\classes\controller\load.php(20): Kohana_Image::factory(false)
#3 [internal function]: Controller_Load->action_post()
#4 Z:\home\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Load))
#5 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-25 23:39:18 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: Z:\home\kohana\www ~ MODPATH\image\classes\kohana\image.php [ 106 ]
2011-10-25 23:39:18 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: Z:\home\kohana\www ~ MODPATH\image\classes\kohana\image.php [ 106 ]
--
#0 Z:\home\kohana\modules\image\classes\kohana\image\gd.php(90): Kohana_Image->__construct(false)
#1 Z:\home\kohana\modules\image\classes\kohana\image.php(53): Kohana_Image_GD->__construct(false)
#2 Z:\home\kohana\application\classes\controller\load.php(20): Kohana_Image::factory(false)
#3 [internal function]: Controller_Load->action_post()
#4 Z:\home\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Load))
#5 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-25 23:39:23 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: Z:\home\kohana\www ~ MODPATH\image\classes\kohana\image.php [ 106 ]
2011-10-25 23:39:23 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: Z:\home\kohana\www ~ MODPATH\image\classes\kohana\image.php [ 106 ]
--
#0 Z:\home\kohana\modules\image\classes\kohana\image\gd.php(90): Kohana_Image->__construct(false)
#1 Z:\home\kohana\modules\image\classes\kohana\image.php(53): Kohana_Image_GD->__construct(false)
#2 Z:\home\kohana\application\classes\controller\load.php(20): Kohana_Image::factory(false)
#3 [internal function]: Controller_Load->action_post()
#4 Z:\home\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Load))
#5 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-25 23:39:28 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: Z:\home\kohana\www ~ MODPATH\image\classes\kohana\image.php [ 106 ]
2011-10-25 23:39:28 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: Z:\home\kohana\www ~ MODPATH\image\classes\kohana\image.php [ 106 ]
--
#0 Z:\home\kohana\modules\image\classes\kohana\image\gd.php(90): Kohana_Image->__construct(false)
#1 Z:\home\kohana\modules\image\classes\kohana\image.php(53): Kohana_Image_GD->__construct(false)
#2 Z:\home\kohana\application\classes\controller\load.php(20): Kohana_Image::factory(false)
#3 [internal function]: Controller_Load->action_post()
#4 Z:\home\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Load))
#5 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-25 23:39:34 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: Z:\home\kohana\www ~ MODPATH\image\classes\kohana\image.php [ 106 ]
2011-10-25 23:39:34 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: Z:\home\kohana\www ~ MODPATH\image\classes\kohana\image.php [ 106 ]
--
#0 Z:\home\kohana\modules\image\classes\kohana\image\gd.php(90): Kohana_Image->__construct(false)
#1 Z:\home\kohana\modules\image\classes\kohana\image.php(53): Kohana_Image_GD->__construct(false)
#2 Z:\home\kohana\application\classes\controller\load.php(20): Kohana_Image::factory(false)
#3 [internal function]: Controller_Load->action_post()
#4 Z:\home\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Load))
#5 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-25 23:40:18 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: Z:\home\kohana\www ~ MODPATH\image\classes\kohana\image.php [ 106 ]
2011-10-25 23:40:18 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: Z:\home\kohana\www ~ MODPATH\image\classes\kohana\image.php [ 106 ]
--
#0 Z:\home\kohana\modules\image\classes\kohana\image\gd.php(90): Kohana_Image->__construct(false)
#1 Z:\home\kohana\modules\image\classes\kohana\image.php(53): Kohana_Image_GD->__construct(false)
#2 Z:\home\kohana\application\classes\controller\load.php(20): Kohana_Image::factory(false)
#3 [internal function]: Controller_Load->action_post()
#4 Z:\home\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Load))
#5 Z:\home\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#8 {main}