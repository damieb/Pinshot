<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-04 09:19:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 9 ] in /opt/lampp/htdocs/pinshot/application/views/template/template.php:9
2013-11-04 09:19:33 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/application/views/template/template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 9, Array)
#1 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/pinshot/application/views/template/template.php:9
2013-11-04 10:28:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: fd ~ SYSPATH/classes/Kohana/Validation.php [ 102 ] in /opt/lampp/htdocs/pinshot/system/classes/Kohana/Validation.php:102
2013-11-04 10:28:27 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 102, Array)
#1 /opt/lampp/htdocs/pinshot/application/classes/Controller/Pins.php(33): Kohana_Validation->offsetGet('fd')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(84): Controller_Pins->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pins))
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/pinshot/system/classes/Kohana/Validation.php:102
2013-11-04 10:29:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: fd ~ SYSPATH/classes/Kohana/Validation.php [ 102 ] in /opt/lampp/htdocs/pinshot/system/classes/Kohana/Validation.php:102
2013-11-04 10:29:18 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 102, Array)
#1 /opt/lampp/htdocs/pinshot/application/classes/Controller/Pins.php(33): Kohana_Validation->offsetGet('fd')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(84): Controller_Pins->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pins))
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/pinshot/system/classes/Kohana/Validation.php:102
2013-11-04 10:38:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 9 ] in /opt/lampp/htdocs/pinshot/application/views/template/template.php:9
2013-11-04 10:38:13 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/application/views/template/template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 9, Array)
#1 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Core.php(668): Kohana_View->__toString()
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(255): Kohana_Core::find_file('views', Object(View))
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#7 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#8 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory(Object(View))
#9 /opt/lampp/htdocs/pinshot/application/classes/Controller/Template.php(16): Kohana_Controller_Template->before()
#10 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#11 [internal function]: Kohana_Controller->execute()
#12 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pins))
#13 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#16 {main} in /opt/lampp/htdocs/pinshot/application/views/template/template.php:9
2013-11-04 10:38:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 9 ] in /opt/lampp/htdocs/pinshot/application/views/template/template.php:9
2013-11-04 10:38:13 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/application/views/template/template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 9, Array)
#1 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 [internal function]: Kohana_View->__toString()
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/I18n.php(164): strtr('The requested v...', Array)
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Kohana/Exception.php(53): __('The requested v...', Array)
#7 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(259): Kohana_Kohana_Exception->__construct('The requested v...', Array)
#8 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#9 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#10 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory(Object(View))
#11 /opt/lampp/htdocs/pinshot/application/classes/Controller/Template.php(16): Kohana_Controller_Template->before()
#12 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#13 [internal function]: Kohana_Controller->execute()
#14 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pins))
#15 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#18 {main} in /opt/lampp/htdocs/pinshot/application/views/template/template.php:9
2013-11-04 10:38:13 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	ErrorException [ Notice ]: Undefined variable: title
	
		APPPATH/views/template/template.php [ 9 ]
		 4 
 5 &lt;head&gt;
 6 	&lt;meta charset="utf-8"&gt;
 7   &lt;meta name="viewport" content="width=device-width"&gt;
 8   &lt;meta name="author" content="leheri_d"&gt;
 9   &lt;title&gt;&lt;?php echo $title; ?&gt;&lt;/title&gt;
10 
11   
12   &lt;link rel="stylesheet" href="&lt;?php echo WEBROOT;?&gt;media/css/foundation.css"&gt;
13   &lt;link rel="stylesheet" href="&lt;?php echo WEBROOT;?&gt;media/css/pinshot.css"&gt;
14   &lt;script src="&lt;?php echo WEBROOT;?&gt;media/js/vendor/custom.modernizr.js"&gt;&lt;/script&gt;
		
					
				
					
													APPPATH/views/template/template.php [ 9 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(25) "Undefined variable: title"
						
											
							2
							string(65) "/opt/lampp/htdocs/pinshot/application/views/template/template.php"
						
											
							3
							integer 9
						
											
							4
							array(2) (
    "kohana_view_filename" => string(65) "/opt/lampp/htdocs/pinshot/application/views/template/template.php"
    "kohana_view_data" => array(0) 
)
						
										
				
													 4 
 5 &lt;head&gt;
 6 	&lt;meta charset="utf-8"&gt;
 7   &lt;meta name="viewport" content="width=device-width"&gt;
 8   &lt;meta name="author" content="leheri_d"&gt;
 9   &lt;title&gt;&lt;?php echo $title; ?&gt;&lt;/title&gt;
10 
11   
12   &lt;link rel="stylesheet" href="&lt;?php echo WEBROOT;?&gt;media/css/foundation.css"&gt;
13   &lt;link rel="stylesheet" href="&lt;?php echo WEBROOT;?&gt;media/css/pinshot.css"&gt;
14   &lt;script src="&lt;?php echo WEBROOT;?&gt;media/js/vendor/custom.modernizr.js"&gt;&lt;/script&gt;

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 61 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(65) "/opt/lampp/htdocs/pinshot/application/views/template/template.php"
						
										
				
													56 		ob_start();
57 
58 		try
59 		{
60 			// Load the view within the current scope
61 			include $kohana_view_filename;
62 		}
63 		catch (Exception $e)
64 		{
65 			// Delete the output buffer
66 			ob_end_clean();

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 348 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(65) "/opt/lampp/htdocs/pinshot/application/views/template/template.php"
						
											
							1
							array(0) 
						
										
				
													343 		{
344 			throw new View_Exception('You must set the file to use within your view before rendering');
345 		}
346 
347 		// Combine local and global data and capture the output
348 		return View::capture($this-&gt;_file, $this-&gt;_data);
349 	}
350 
351 }

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 228 ]
											
					&raquo;
					Kohana_View->render()
				
													223 	 */
224 	public function __toString()
225 	{
226 		try
227 		{
228 			return $this-&gt;render();
229 		}
230 		catch (Exception $e)
231 		{
232 			/**
233 			 * Display the exception message.

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_View->__toString()
				
											
								
				
					
													SYSPATH/classes/Kohana/I18n.php [ 164 ]
											
					&raquo;
					strtr(arguments)
				
								
					
											
							str
							string(43) "The requested view :file could not be found"
						
											
							from
							array(1) (
    ":file" => object View(2) {
        protected _file => string(65) "/opt/lampp/htdocs/pinshot/application/views/template/template.php"
        protected _data => array(0) 
    }
)
						
										
				
													159 			// The message and target languages are different
160 			// Get the translation for this message
161 			$string = I18n::get($string);
162 		}
163 
164 		return empty($values) ? $string : strtr($string, $values);
165 	}
166 }

							
								
				
					
													SYSPATH/classes/Kohana/Kohana/Exception.php [ 53 ]
											
					&raquo;
					__(arguments)
				
								
					
											
							string
							string(43) "The requested view :file could not be found"
						
											
							values
							array(1) (
    ":file" => object View(2) {
        protected _file => string(65) "/opt/lampp/htdocs/pinshot/application/views/template/template.php"
        protected _data => array(0) 
    }
)
						
										
				
													48 	 * @return  void
49 	 */
50 	public function __construct($message = "", array $variables = NULL, $code = 0, Exception $previous = NULL)
51 	{
52 		// Set the message
53 		$message = __($message, $variables);
54 
55 		// Pass the message and integer code to the parent
56 		parent::__construct($message, (int) $code, $previous);
57 
58 		// Save the unmodified code

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 259 ]
											
					&raquo;
					Kohana_Kohana_Exception->__construct(arguments)
				
								
					
											
							0
							string(43) "The requested view :file could not be found"
						
											
							1
							array(1) (
    ":file" => object View(2) {
        protected _file => string(65) "/opt/lampp/htdocs/pinshot/application/views/template/template.php"
        protected _data => array(0) 
    }
)
						
										
				
													254 	{
255 		if (($path = Kohana::find_file('views', $file)) === FALSE)
256 		{
257 			throw new View_Exception('The requested view :file could not be found', array(
258 				':file' =&gt; $file,
259 			));
260 		}
261 
262 		// Store the file path locally
263 		$this-&gt;_file = $path;
264 

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 137 ]
											
					&raquo;
					Kohana_View->set_filename(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(65) "/opt/lampp/htdocs/pinshot/application/views/template/template.php"
    protected _data => array(0) 
}
						
										
				
													132 	 */
133 	public function __construct($file = NULL, array $data = NULL)
134 	{
135 		if ($file !== NULL)
136 		{
137 			$this-&gt;set_filename($file);
138 		}
139 
140 		if ($data !== NULL)
141 		{
142 			// Add the values to the current data

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 30 ]
											
					&raquo;
					Kohana_View->__construct(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(65) "/opt/lampp/htdocs/pinshot/application/views/template/template.php"
    protected _data => array(0) 
}
						
											
							1
							NULL
						
										
				
													25 	 * @param   array   $data   array of values
26 	 * @return  View
27 	 */
28 	public static function factory($file = NULL, array $data = NULL)
29 	{
30 		return new View($file, $data);
31 	}
32 
33 	/**
34 	 * Captures the output that is generated when a view is included.
35 	 * The view data will be extracted to make local variables. This method

							
								
				
					
													SYSPATH/classes/Kohana/Controller/Template.php [ 33 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(65) "/opt/lampp/htdocs/pinshot/application/views/template/template.php"
    protected _data => array(0) 
}
						
										
				
													28 		parent::before();
29 
30 		if ($this-&gt;auto_render === TRUE)
31 		{
32 			// Load the template
33 			$this-&gt;template = View::factory($this-&gt;template);
34 		}
35 	}
36 
37 	/**
38 	 * Assigns the template [View] as the request response.

							
								
				
					
													APPPATH/classes/Controller/Template.php [ 16 ]
											
					&raquo;
					Kohana_Controller_Template->before()
				
													11         define('WEBROOT', str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
12 
13         $this-&gt;auto_render = ! $this-&gt;request-&gt;is_ajax(); 
14         if($this-&gt;auto_render === TRUE)
15         {
16             parent::before();
17         }
18 
19     }
20 
21 }

							
								
				
					
													SYSPATH/classes/Kohana/Controller.php [ 69 ]
											
					&raquo;
					Controller_Template->before()
				
													64 	 * @return  Response
65 	 */
66 	public function execute()
67 	{
68 		// Execute the "before action" method
69 		$this-&gt;before();
70 
71 		// Determine the action to use
72 		$action = 'action_'.$this-&gt;request-&gt;action();
73 
74 		// If the action doesn't exist, it's a 404

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH/classes/Kohana/Request/Client/Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_Pins(10) {
    protected idUser => NULL
    private nameads => NULL
    private cityads => NULL
    private categoryads => NULL
    private count => NULL
    private pagin => NULL
    public template => object View(2) {
        protected _file => string(65) "/opt/lampp/htdocs/pinshot/application/views/template/template.php"
        protected _data => array(0) 
    }
    public auto_render => bool TRUE
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => string(38) "http://localhost/pinshot/pins/mylist/1"
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(4) "home"
                "action" => string(5) "index"
            )
            protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(4) "Pins"
        protected _action => string(6) "upload"
        protected _uri => string(11) "pins/upload"
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(2) (
            "PHPSESSID" => NULL
            "session" => NULL
        )
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "Authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(0) ""
        protected _cookies => array(0) 
        protected _protocol => string(8) "HTTP/1.1"
    }
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH/classes/Kohana/Request/Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => string(38) "http://localhost/pinshot/pins/mylist/1"
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(4) "home"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(4) "Pins"
    protected _action => string(6) "upload"
    protected _uri => string(11) "pins/upload"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(2) (
        "PHPSESSID" => NULL
        "session" => NULL
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(0) ""
    protected _cookies => array(0) 
    protected _protocol => string(8) "HTTP/1.1"
}
						
										
				
													109 		$orig_response = $response = Response::factory(array('_protocol' =&gt; $request-&gt;protocol()));
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH/classes/Kohana/Request.php [ 986 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => string(38) "http://localhost/pinshot/pins/mylist/1"
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(4) "home"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(4) "Pins"
    protected _action => string(6) "upload"
    protected _uri => string(11) "pins/upload"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(2) (
        "PHPSESSID" => NULL
        "session" => NULL
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													981 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
982 				':uri' =&gt; $this-&gt;_uri,
983 			));
984 		}
985 
986 		return $this-&gt;_client-&gt;execute($this);
987 	}
988 
989 	/**
990 	 * Returns whether this request is the initial request Kohana received.
991 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT/index.php [ 118 ]
											
					&raquo;
					Kohana_Request->execute()
				
													113 	/**
114 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
115 	 * If no source is specified, the URI will be automatically detected.
116 	 */
117 	echo Request::factory(TRUE, array(), FALSE)
118 		-&gt;execute()
119 		-&gt;send_headers(TRUE)
120 		-&gt;body();
121 }

							
							
	
	Environment
	
				Included files (64)
		
			
								
					DOCROOT/index.php
				
								
					APPPATH/bootstrap.php
				
								
					SYSPATH/classes/Kohana/Core.php
				
								
					SYSPATH/classes/Kohana.php
				
								
					SYSPATH/classes/I18n.php
				
								
					SYSPATH/classes/Kohana/I18n.php
				
								
					SYSPATH/classes/HTTP.php
				
								
					SYSPATH/classes/Kohana/HTTP.php
				
								
					SYSPATH/classes/Kohana/Exception.php
				
								
					SYSPATH/classes/Kohana/Kohana/Exception.php
				
								
					SYSPATH/classes/Log.php
				
								
					SYSPATH/classes/Kohana/Log.php
				
								
					SYSPATH/classes/Config.php
				
								
					SYSPATH/classes/Kohana/Config.php
				
								
					SYSPATH/classes/Log/File.php
				
								
					SYSPATH/classes/Kohana/Log/File.php
				
								
					SYSPATH/classes/Log/Writer.php
				
								
					SYSPATH/classes/Kohana/Log/Writer.php
				
								
					SYSPATH/classes/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Source.php
				
								
					SYSPATH/classes/Route.php
				
								
					SYSPATH/classes/Kohana/Route.php
				
								
					SYSPATH/classes/Cookie.php
				
								
					SYSPATH/classes/Kohana/Cookie.php
				
								
					SYSPATH/classes/Request.php
				
								
					SYSPATH/classes/Kohana/Request.php
				
								
					SYSPATH/classes/HTTP/Request.php
				
								
					SYSPATH/classes/Kohana/HTTP/Request.php
				
								
					SYSPATH/classes/HTTP/Message.php
				
								
					SYSPATH/classes/Kohana/HTTP/Message.php
				
								
					SYSPATH/classes/HTTP/Header.php
				
								
					SYSPATH/classes/Kohana/HTTP/Header.php
				
								
					SYSPATH/classes/Request/Client/Internal.php
				
								
					SYSPATH/classes/Kohana/Request/Client/Internal.php
				
								
					SYSPATH/classes/Request/Client.php
				
								
					SYSPATH/classes/Kohana/Request/Client.php
				
								
					SYSPATH/classes/Arr.php
				
								
					SYSPATH/classes/Kohana/Arr.php
				
								
					SYSPATH/classes/Response.php
				
								
					SYSPATH/classes/Kohana/Response.php
				
								
					SYSPATH/classes/HTTP/Response.php
				
								
					SYSPATH/classes/Kohana/HTTP/Response.php
				
								
					SYSPATH/classes/Profiler.php
				
								
					SYSPATH/classes/Kohana/Profiler.php
				
								
					APPPATH/classes/Controller/Pins.php
				
								
					APPPATH/classes/Controller/Template.php
				
								
					SYSPATH/classes/Kohana/Controller/Template.php
				
								
					SYSPATH/classes/Controller.php
				
								
					SYSPATH/classes/Kohana/Controller.php
				
								
					SYSPATH/classes/View.php
				
								
					SYSPATH/classes/Kohana/View.php
				
								
					APPPATH/views/template/template.php
				
								
					SYSPATH/classes/Debug.php
				
								
					SYSPATH/classes/Kohana/Debug.php
				
								
					SYSPATH/classes/Date.php
				
								
					SYSPATH/classes/Kohana/Date.php
				
								
					SYSPATH/views/kohana/error.php
				
								
					SYSPATH/classes/UTF8.php
				
								
					SYSPATH/classes/Kohana/UTF8.php
				
								
					SYSPATH/classes/View/Exception.php
				
								
					SYSPATH/classes/Kohana/View/Exception.php
				
							
		
				Loaded extensions (58)
		
			
								
					Core
				
								
					date
				
								
					ereg
				
								
					libxml
				
								
					openssl
				
								
					pcre
				
								
					sqlite3
				
								
					zlib
				
								
					bcmath
				
								
					bz2
				
								
					calendar
				
								
					ctype
				
								
					curl
				
								
					dba
				
								
					dom
				
								
					hash
				
								
					fileinfo
				
								
					filter
				
								
					ftp
				
								
					gd
				
								
					gettext
				
								
					SPL
				
								
					iconv
				
								
					session
				
								
					intl
				
								
					json
				
								
					ldap
				
								
					mbstring
				
								
					mcrypt
				
								
					mssql
				
								
					standard
				
								
					mysqlnd
				
								
					mysqli
				
								
					mysql
				
								
					PDO
				
								
					pdo_mysql
				
								
					pdo_pgsql
				
								
					pdo_sqlite
				
								
					Phar
				
								
					posix
				
								
					Reflection
				
								
					imap
				
								
					shmop
				
								
					SimpleXML
				
								
					soap
				
								
					sockets
				
								
					exif
				
								
					sybase_ct
				
								
					sysvsem
				
								
					sysvshm
				
								
					tokenizer
				
								
					wddx
				
								
					xml
				
								
					xmlreader
				
								
					xmlwriter
				
								
					xsl
				
								
					apache2handler
				
								
					mhash
				
							
		
														$_COOKIE
		
			
								
					PHPSESSID
					string(26) "sdem3fkg6abbche01gth3nr824"
				
								
					session
					string(26) "1i23grkcsu7qqgkns1cmmvq265"
				
							
		
						$_SERVER
		
			
								
					REDIRECT_UNIQUE_ID
					string(24) "UndrBX8AAQEAACMOfcoAAAAH"
				
								
					REDIRECT_STATUS
					string(3) "200"
				
								
					UNIQUE_ID
					string(24) "UndrBX8AAQEAACMOfcoAAAAH"
				
								
					HTTP_HOST
					string(9) "localhost"
				
								
					HTTP_USER_AGENT
					string(76) "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:25.0) Gecko/20100101 Firefox/25.0"
				
								
					HTTP_ACCEPT
					string(63) "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(35) "fr,fr-fr;q=0.8,en-us;q=0.5,en;q=0.3"
				
								
					HTTP_ACCEPT_ENCODING
					string(13) "gzip, deflate"
				
								
					HTTP_REFERER
					string(38) "http://localhost/pinshot/pins/mylist/1"
				
								
					HTTP_COOKIE
					string(72) "PHPSESSID=sdem3fkg6abbche01gth3nr824; session=1i23grkcsu7qqgkns1cmmvq265"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					PATH
					string(60) "/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin"
				
								
					LD_LIBRARY_PATH
					string(29) "/opt/lampp/lib:/opt/lampp/lib"
				
								
					SERVER_SIGNATURE
					string(0) ""
				
								
					SERVER_SOFTWARE
					string(44) "Apache/2.4.3 (Unix) OpenSSL/1.0.1c PHP/5.4.7"
				
								
					SERVER_NAME
					string(9) "localhost"
				
								
					SERVER_ADDR
					string(9) "127.0.0.1"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					REMOTE_ADDR
					string(9) "127.0.0.1"
				
								
					DOCUMENT_ROOT
					string(17) "/opt/lampp/htdocs"
				
								
					REQUEST_SCHEME
					string(4) "http"
				
								
					CONTEXT_PREFIX
					string(0) ""
				
								
					CONTEXT_DOCUMENT_ROOT
					string(17) "/opt/lampp/htdocs"
				
								
					SERVER_ADMIN
					string(15) "you@example.com"
				
								
					SCRIPT_FILENAME
					string(35) "/opt/lampp/htdocs/pinshot/index.php"
				
								
					REMOTE_PORT
					string(5) "47610"
				
								
					REDIRECT_URL
					string(20) "/pinshot/pins/upload"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_URI
					string(20) "/pinshot/pins/upload"
				
								
					SCRIPT_NAME
					string(18) "/pinshot/index.php"
				
								
					PATH_INFO
					string(12) "/pins/upload"
				
								
					PATH_TRANSLATED
					string(29) "/opt/lampp/htdocs/pins/upload"
				
								
					PHP_SELF
					string(30) "/pinshot/index.php/pins/upload"
				
								
					REQUEST_TIME_FLOAT
					float 1383557893.182
				
								
					REQUEST_TIME
					integer 1383557893
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php:137
2013-11-04 10:38:13 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#1 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory(Object(View))
#3 /opt/lampp/htdocs/pinshot/application/classes/Controller/Template.php(16): Kohana_Controller_Template->before()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pins))
#7 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php:137
2013-11-04 10:38:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 9 ] in /opt/lampp/htdocs/pinshot/application/views/template/template.php:9
2013-11-04 10:38:26 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/application/views/template/template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 9, Array)
#1 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Core.php(668): Kohana_View->__toString()
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(255): Kohana_Core::find_file('views', Object(View))
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#7 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#8 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory(Object(View))
#9 /opt/lampp/htdocs/pinshot/application/classes/Controller/Template.php(16): Kohana_Controller_Template->before()
#10 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#11 [internal function]: Kohana_Controller->execute()
#12 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#13 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#16 {main} in /opt/lampp/htdocs/pinshot/application/views/template/template.php:9
2013-11-04 10:38:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/template.php [ 9 ] in /opt/lampp/htdocs/pinshot/application/views/template/template.php:9
2013-11-04 10:38:26 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/application/views/template/template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 9, Array)
#1 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 [internal function]: Kohana_View->__toString()
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/I18n.php(164): strtr('The requested v...', Array)
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Kohana/Exception.php(53): __('The requested v...', Array)
#7 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(259): Kohana_Kohana_Exception->__construct('The requested v...', Array)
#8 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#9 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#10 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory(Object(View))
#11 /opt/lampp/htdocs/pinshot/application/classes/Controller/Template.php(16): Kohana_Controller_Template->before()
#12 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#13 [internal function]: Kohana_Controller->execute()
#14 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#15 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#18 {main} in /opt/lampp/htdocs/pinshot/application/views/template/template.php:9
2013-11-04 10:38:26 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	ErrorException [ Notice ]: Undefined variable: title
	
		APPPATH/views/template/template.php [ 9 ]
		 4 
 5 &lt;head&gt;
 6 	&lt;meta charset="utf-8"&gt;
 7   &lt;meta name="viewport" content="width=device-width"&gt;
 8   &lt;meta name="author" content="leheri_d"&gt;
 9   &lt;title&gt;&lt;?php echo $title; ?&gt;&lt;/title&gt;
10 
11   
12   &lt;link rel="stylesheet" href="&lt;?php echo WEBROOT;?&gt;media/css/foundation.css"&gt;
13   &lt;link rel="stylesheet" href="&lt;?php echo WEBROOT;?&gt;media/css/pinshot.css"&gt;
14   &lt;script src="&lt;?php echo WEBROOT;?&gt;media/js/vendor/custom.modernizr.js"&gt;&lt;/script&gt;
		
					
				
					
													APPPATH/views/template/template.php [ 9 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(25) "Undefined variable: title"
						
											
							2
							string(65) "/opt/lampp/htdocs/pinshot/application/views/template/template.php"
						
											
							3
							integer 9
						
											
							4
							array(2) (
    "kohana_view_filename" => string(65) "/opt/lampp/htdocs/pinshot/application/views/template/template.php"
    "kohana_view_data" => array(0) 
)
						
										
				
													 4 
 5 &lt;head&gt;
 6 	&lt;meta charset="utf-8"&gt;
 7   &lt;meta name="viewport" content="width=device-width"&gt;
 8   &lt;meta name="author" content="leheri_d"&gt;
 9   &lt;title&gt;&lt;?php echo $title; ?&gt;&lt;/title&gt;
10 
11   
12   &lt;link rel="stylesheet" href="&lt;?php echo WEBROOT;?&gt;media/css/foundation.css"&gt;
13   &lt;link rel="stylesheet" href="&lt;?php echo WEBROOT;?&gt;media/css/pinshot.css"&gt;
14   &lt;script src="&lt;?php echo WEBROOT;?&gt;media/js/vendor/custom.modernizr.js"&gt;&lt;/script&gt;

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 61 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(65) "/opt/lampp/htdocs/pinshot/application/views/template/template.php"
						
										
				
													56 		ob_start();
57 
58 		try
59 		{
60 			// Load the view within the current scope
61 			include $kohana_view_filename;
62 		}
63 		catch (Exception $e)
64 		{
65 			// Delete the output buffer
66 			ob_end_clean();

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 348 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(65) "/opt/lampp/htdocs/pinshot/application/views/template/template.php"
						
											
							1
							array(0) 
						
										
				
													343 		{
344 			throw new View_Exception('You must set the file to use within your view before rendering');
345 		}
346 
347 		// Combine local and global data and capture the output
348 		return View::capture($this-&gt;_file, $this-&gt;_data);
349 	}
350 
351 }

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 228 ]
											
					&raquo;
					Kohana_View->render()
				
													223 	 */
224 	public function __toString()
225 	{
226 		try
227 		{
228 			return $this-&gt;render();
229 		}
230 		catch (Exception $e)
231 		{
232 			/**
233 			 * Display the exception message.

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_View->__toString()
				
											
								
				
					
													SYSPATH/classes/Kohana/I18n.php [ 164 ]
											
					&raquo;
					strtr(arguments)
				
								
					
											
							str
							string(43) "The requested view :file could not be found"
						
											
							from
							array(1) (
    ":file" => object View(2) {
        protected _file => string(65) "/opt/lampp/htdocs/pinshot/application/views/template/template.php"
        protected _data => array(0) 
    }
)
						
										
				
													159 			// The message and target languages are different
160 			// Get the translation for this message
161 			$string = I18n::get($string);
162 		}
163 
164 		return empty($values) ? $string : strtr($string, $values);
165 	}
166 }

							
								
				
					
													SYSPATH/classes/Kohana/Kohana/Exception.php [ 53 ]
											
					&raquo;
					__(arguments)
				
								
					
											
							string
							string(43) "The requested view :file could not be found"
						
											
							values
							array(1) (
    ":file" => object View(2) {
        protected _file => string(65) "/opt/lampp/htdocs/pinshot/application/views/template/template.php"
        protected _data => array(0) 
    }
)
						
										
				
													48 	 * @return  void
49 	 */
50 	public function __construct($message = "", array $variables = NULL, $code = 0, Exception $previous = NULL)
51 	{
52 		// Set the message
53 		$message = __($message, $variables);
54 
55 		// Pass the message and integer code to the parent
56 		parent::__construct($message, (int) $code, $previous);
57 
58 		// Save the unmodified code

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 259 ]
											
					&raquo;
					Kohana_Kohana_Exception->__construct(arguments)
				
								
					
											
							0
							string(43) "The requested view :file could not be found"
						
											
							1
							array(1) (
    ":file" => object View(2) {
        protected _file => string(65) "/opt/lampp/htdocs/pinshot/application/views/template/template.php"
        protected _data => array(0) 
    }
)
						
										
				
													254 	{
255 		if (($path = Kohana::find_file('views', $file)) === FALSE)
256 		{
257 			throw new View_Exception('The requested view :file could not be found', array(
258 				':file' =&gt; $file,
259 			));
260 		}
261 
262 		// Store the file path locally
263 		$this-&gt;_file = $path;
264 

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 137 ]
											
					&raquo;
					Kohana_View->set_filename(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(65) "/opt/lampp/htdocs/pinshot/application/views/template/template.php"
    protected _data => array(0) 
}
						
										
				
													132 	 */
133 	public function __construct($file = NULL, array $data = NULL)
134 	{
135 		if ($file !== NULL)
136 		{
137 			$this-&gt;set_filename($file);
138 		}
139 
140 		if ($data !== NULL)
141 		{
142 			// Add the values to the current data

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 30 ]
											
					&raquo;
					Kohana_View->__construct(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(65) "/opt/lampp/htdocs/pinshot/application/views/template/template.php"
    protected _data => array(0) 
}
						
											
							1
							NULL
						
										
				
													25 	 * @param   array   $data   array of values
26 	 * @return  View
27 	 */
28 	public static function factory($file = NULL, array $data = NULL)
29 	{
30 		return new View($file, $data);
31 	}
32 
33 	/**
34 	 * Captures the output that is generated when a view is included.
35 	 * The view data will be extracted to make local variables. This method

							
								
				
					
													SYSPATH/classes/Kohana/Controller/Template.php [ 33 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(65) "/opt/lampp/htdocs/pinshot/application/views/template/template.php"
    protected _data => array(0) 
}
						
										
				
													28 		parent::before();
29 
30 		if ($this-&gt;auto_render === TRUE)
31 		{
32 			// Load the template
33 			$this-&gt;template = View::factory($this-&gt;template);
34 		}
35 	}
36 
37 	/**
38 	 * Assigns the template [View] as the request response.

							
								
				
					
													APPPATH/classes/Controller/Template.php [ 16 ]
											
					&raquo;
					Kohana_Controller_Template->before()
				
													11         define('WEBROOT', str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
12 
13         $this-&gt;auto_render = ! $this-&gt;request-&gt;is_ajax(); 
14         if($this-&gt;auto_render === TRUE)
15         {
16             parent::before();
17         }
18 
19     }
20 
21 }

							
								
				
					
													SYSPATH/classes/Kohana/Controller.php [ 69 ]
											
					&raquo;
					Controller_Template->before()
				
													64 	 * @return  Response
65 	 */
66 	public function execute()
67 	{
68 		// Execute the "before action" method
69 		$this-&gt;before();
70 
71 		// Determine the action to use
72 		$action = 'action_'.$this-&gt;request-&gt;action();
73 
74 		// If the action doesn't exist, it's a 404

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH/classes/Kohana/Request/Client/Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_Home(4) {
    public template => object View(2) {
        protected _file => string(65) "/opt/lampp/htdocs/pinshot/application/views/template/template.php"
        protected _data => array(0) 
    }
    public auto_render => bool TRUE
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(4) "home"
                "action" => string(5) "index"
            )
            protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(4) "Home"
        protected _action => string(5) "index"
        protected _uri => string(0) ""
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(2) (
            "PHPSESSID" => NULL
            "session" => NULL
        )
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "Authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(0) ""
        protected _cookies => array(0) 
        protected _protocol => string(8) "HTTP/1.1"
    }
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH/classes/Kohana/Request/Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(4) "home"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(4) "Home"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(2) (
        "PHPSESSID" => NULL
        "session" => NULL
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(0) ""
    protected _cookies => array(0) 
    protected _protocol => string(8) "HTTP/1.1"
}
						
										
				
													109 		$orig_response = $response = Response::factory(array('_protocol' =&gt; $request-&gt;protocol()));
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH/classes/Kohana/Request.php [ 986 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(4) "home"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(4) "Home"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(2) (
        "PHPSESSID" => NULL
        "session" => NULL
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													981 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
982 				':uri' =&gt; $this-&gt;_uri,
983 			));
984 		}
985 
986 		return $this-&gt;_client-&gt;execute($this);
987 	}
988 
989 	/**
990 	 * Returns whether this request is the initial request Kohana received.
991 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT/index.php [ 118 ]
											
					&raquo;
					Kohana_Request->execute()
				
													113 	/**
114 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
115 	 * If no source is specified, the URI will be automatically detected.
116 	 */
117 	echo Request::factory(TRUE, array(), FALSE)
118 		-&gt;execute()
119 		-&gt;send_headers(TRUE)
120 		-&gt;body();
121 }

							
							
	
	Environment
	
				Included files (64)
		
			
								
					DOCROOT/index.php
				
								
					APPPATH/bootstrap.php
				
								
					SYSPATH/classes/Kohana/Core.php
				
								
					SYSPATH/classes/Kohana.php
				
								
					SYSPATH/classes/I18n.php
				
								
					SYSPATH/classes/Kohana/I18n.php
				
								
					SYSPATH/classes/HTTP.php
				
								
					SYSPATH/classes/Kohana/HTTP.php
				
								
					SYSPATH/classes/Kohana/Exception.php
				
								
					SYSPATH/classes/Kohana/Kohana/Exception.php
				
								
					SYSPATH/classes/Log.php
				
								
					SYSPATH/classes/Kohana/Log.php
				
								
					SYSPATH/classes/Config.php
				
								
					SYSPATH/classes/Kohana/Config.php
				
								
					SYSPATH/classes/Log/File.php
				
								
					SYSPATH/classes/Kohana/Log/File.php
				
								
					SYSPATH/classes/Log/Writer.php
				
								
					SYSPATH/classes/Kohana/Log/Writer.php
				
								
					SYSPATH/classes/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Source.php
				
								
					SYSPATH/classes/Route.php
				
								
					SYSPATH/classes/Kohana/Route.php
				
								
					SYSPATH/classes/Cookie.php
				
								
					SYSPATH/classes/Kohana/Cookie.php
				
								
					SYSPATH/classes/Request.php
				
								
					SYSPATH/classes/Kohana/Request.php
				
								
					SYSPATH/classes/HTTP/Request.php
				
								
					SYSPATH/classes/Kohana/HTTP/Request.php
				
								
					SYSPATH/classes/HTTP/Message.php
				
								
					SYSPATH/classes/Kohana/HTTP/Message.php
				
								
					SYSPATH/classes/HTTP/Header.php
				
								
					SYSPATH/classes/Kohana/HTTP/Header.php
				
								
					SYSPATH/classes/Request/Client/Internal.php
				
								
					SYSPATH/classes/Kohana/Request/Client/Internal.php
				
								
					SYSPATH/classes/Request/Client.php
				
								
					SYSPATH/classes/Kohana/Request/Client.php
				
								
					SYSPATH/classes/Arr.php
				
								
					SYSPATH/classes/Kohana/Arr.php
				
								
					SYSPATH/classes/Response.php
				
								
					SYSPATH/classes/Kohana/Response.php
				
								
					SYSPATH/classes/HTTP/Response.php
				
								
					SYSPATH/classes/Kohana/HTTP/Response.php
				
								
					SYSPATH/classes/Profiler.php
				
								
					SYSPATH/classes/Kohana/Profiler.php
				
								
					APPPATH/classes/Controller/Home.php
				
								
					APPPATH/classes/Controller/Template.php
				
								
					SYSPATH/classes/Kohana/Controller/Template.php
				
								
					SYSPATH/classes/Controller.php
				
								
					SYSPATH/classes/Kohana/Controller.php
				
								
					SYSPATH/classes/View.php
				
								
					SYSPATH/classes/Kohana/View.php
				
								
					APPPATH/views/template/template.php
				
								
					SYSPATH/classes/Debug.php
				
								
					SYSPATH/classes/Kohana/Debug.php
				
								
					SYSPATH/classes/Date.php
				
								
					SYSPATH/classes/Kohana/Date.php
				
								
					SYSPATH/views/kohana/error.php
				
								
					SYSPATH/classes/UTF8.php
				
								
					SYSPATH/classes/Kohana/UTF8.php
				
								
					SYSPATH/classes/View/Exception.php
				
								
					SYSPATH/classes/Kohana/View/Exception.php
				
							
		
				Loaded extensions (58)
		
			
								
					Core
				
								
					date
				
								
					ereg
				
								
					libxml
				
								
					openssl
				
								
					pcre
				
								
					sqlite3
				
								
					zlib
				
								
					bcmath
				
								
					bz2
				
								
					calendar
				
								
					ctype
				
								
					curl
				
								
					dba
				
								
					dom
				
								
					hash
				
								
					fileinfo
				
								
					filter
				
								
					ftp
				
								
					gd
				
								
					gettext
				
								
					SPL
				
								
					iconv
				
								
					session
				
								
					intl
				
								
					json
				
								
					ldap
				
								
					mbstring
				
								
					mcrypt
				
								
					mssql
				
								
					standard
				
								
					mysqlnd
				
								
					mysqli
				
								
					mysql
				
								
					PDO
				
								
					pdo_mysql
				
								
					pdo_pgsql
				
								
					pdo_sqlite
				
								
					Phar
				
								
					posix
				
								
					Reflection
				
								
					imap
				
								
					shmop
				
								
					SimpleXML
				
								
					soap
				
								
					sockets
				
								
					exif
				
								
					sybase_ct
				
								
					sysvsem
				
								
					sysvshm
				
								
					tokenizer
				
								
					wddx
				
								
					xml
				
								
					xmlreader
				
								
					xmlwriter
				
								
					xsl
				
								
					apache2handler
				
								
					mhash
				
							
		
														$_COOKIE
		
			
								
					PHPSESSID
					string(26) "sdem3fkg6abbche01gth3nr824"
				
								
					session
					string(26) "1i23grkcsu7qqgkns1cmmvq265"
				
							
		
						$_SERVER
		
			
								
					UNIQUE_ID
					string(24) "UndrEn8AAQEAAA6nfRwAAAAF"
				
								
					HTTP_HOST
					string(9) "localhost"
				
								
					HTTP_USER_AGENT
					string(76) "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:25.0) Gecko/20100101 Firefox/25.0"
				
								
					HTTP_ACCEPT
					string(63) "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(35) "fr,fr-fr;q=0.8,en-us;q=0.5,en;q=0.3"
				
								
					HTTP_ACCEPT_ENCODING
					string(13) "gzip, deflate"
				
								
					HTTP_COOKIE
					string(72) "PHPSESSID=sdem3fkg6abbche01gth3nr824; session=1i23grkcsu7qqgkns1cmmvq265"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					PATH
					string(60) "/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin"
				
								
					LD_LIBRARY_PATH
					string(29) "/opt/lampp/lib:/opt/lampp/lib"
				
								
					SERVER_SIGNATURE
					string(0) ""
				
								
					SERVER_SOFTWARE
					string(44) "Apache/2.4.3 (Unix) OpenSSL/1.0.1c PHP/5.4.7"
				
								
					SERVER_NAME
					string(9) "localhost"
				
								
					SERVER_ADDR
					string(9) "127.0.0.1"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					REMOTE_ADDR
					string(9) "127.0.0.1"
				
								
					DOCUMENT_ROOT
					string(17) "/opt/lampp/htdocs"
				
								
					REQUEST_SCHEME
					string(4) "http"
				
								
					CONTEXT_PREFIX
					string(0) ""
				
								
					CONTEXT_DOCUMENT_ROOT
					string(17) "/opt/lampp/htdocs"
				
								
					SERVER_ADMIN
					string(15) "you@example.com"
				
								
					SCRIPT_FILENAME
					string(35) "/opt/lampp/htdocs/pinshot/index.php"
				
								
					REMOTE_PORT
					string(5) "47611"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_URI
					string(9) "/pinshot/"
				
								
					SCRIPT_NAME
					string(18) "/pinshot/index.php"
				
								
					PHP_SELF
					string(18) "/pinshot/index.php"
				
								
					REQUEST_TIME_FLOAT
					float 1383557906.077
				
								
					REQUEST_TIME
					integer 1383557906
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php:137
2013-11-04 10:38:26 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#1 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory(Object(View))
#3 /opt/lampp/htdocs/pinshot/application/classes/Controller/Template.php(16): Kohana_Controller_Template->before()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(69): Controller_Template->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php:137
2013-11-04 10:38:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: fd ~ SYSPATH/classes/Kohana/Validation.php [ 102 ] in /opt/lampp/htdocs/pinshot/system/classes/Kohana/Validation.php:102
2013-11-04 10:38:51 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 102, Array)
#1 /opt/lampp/htdocs/pinshot/application/classes/Controller/Pins.php(33): Kohana_Validation->offsetGet('fd')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(84): Controller_Pins->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pins))
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/pinshot/system/classes/Kohana/Validation.php:102
2013-11-04 10:48:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: fd ~ SYSPATH/classes/Kohana/Validation.php [ 102 ] in /opt/lampp/htdocs/pinshot/system/classes/Kohana/Validation.php:102
2013-11-04 10:48:38 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 102, Array)
#1 /opt/lampp/htdocs/pinshot/application/classes/Controller/Ajax.php(19): Kohana_Validation->offsetGet('fd')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/pinshot/system/classes/Kohana/Validation.php:102
2013-11-04 11:13:04 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-11-04 11:13:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-04 11:13:16 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-11-04 11:13:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-04 11:18:34 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT//uploads/6 must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /opt/lampp/htdocs/pinshot/application/classes/Controller/Ajax.php:22
2013-11-04 11:18:34 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/application/classes/Controller/Ajax.php(22): Kohana_Upload::save(Array, NULL, '/opt/lampp/htdo...')
#1 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/pinshot/application/classes/Controller/Ajax.php:22
2013-11-04 11:46:17 --- EMERGENCY: Kohana_Exception [ 0 ]: The price property does not exist in the Model_Pin class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-11-04 11:46:17 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price')
#1 /opt/lampp/htdocs/pinshot/application/views/pins/mylist.php(66): Kohana_ORM->__get('price')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/pinshot/application/views/template/template.php(73): Kohana_View->__toString()
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pins))
#12 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-11-04 11:46:23 --- EMERGENCY: Kohana_Exception [ 0 ]: The price property does not exist in the Model_Pin class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-11-04 11:46:23 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price')
#1 /opt/lampp/htdocs/pinshot/application/views/pins/mylist.php(66): Kohana_ORM->__get('price')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/pinshot/application/views/template/template.php(73): Kohana_View->__toString()
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pins))
#12 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-11-04 11:46:53 --- EMERGENCY: Kohana_Exception [ 0 ]: The price property does not exist in the Model_Pin class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-11-04 11:46:53 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price')
#1 /opt/lampp/htdocs/pinshot/application/views/pins/mylist.php(66): Kohana_ORM->__get('price')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/pinshot/application/views/template/template.php(73): Kohana_View->__toString()
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pins))
#12 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-11-04 11:47:43 --- EMERGENCY: Kohana_Exception [ 0 ]: The price property does not exist in the Model_Pin class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-11-04 11:47:43 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price')
#1 /opt/lampp/htdocs/pinshot/application/views/pins/mylist.php(66): Kohana_ORM->__get('price')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/pinshot/application/views/template/template.php(73): Kohana_View->__toString()
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pins))
#12 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-11-04 11:47:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The price property does not exist in the Model_Pin class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-11-04 11:47:44 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price')
#1 /opt/lampp/htdocs/pinshot/application/views/pins/mylist.php(66): Kohana_ORM->__get('price')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/pinshot/application/views/template/template.php(73): Kohana_View->__toString()
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pins))
#12 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-11-04 11:47:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The price property does not exist in the Model_Pin class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-11-04 11:47:44 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price')
#1 /opt/lampp/htdocs/pinshot/application/views/pins/mylist.php(66): Kohana_ORM->__get('price')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/pinshot/application/views/template/template.php(73): Kohana_View->__toString()
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pins))
#12 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-11-04 11:47:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The price property does not exist in the Model_Pin class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-11-04 11:47:44 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price')
#1 /opt/lampp/htdocs/pinshot/application/views/pins/mylist.php(66): Kohana_ORM->__get('price')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/pinshot/application/views/template/template.php(73): Kohana_View->__toString()
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/pinshot/system/classes/Kohana/View.php(348): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pins))
#12 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#15 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-11-04 12:12:40 --- EMERGENCY: Kohana_Exception [ 0 ]: The path property does not exist in the Model_Pin class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-11-04 12:12:40 --- DEBUG: #0 /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('path')
#1 /opt/lampp/htdocs/pinshot/application/classes/Controller/Pins.php(245): Kohana_ORM->__get('path')
#2 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Controller.php(84): Controller_Pins->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pins))
#5 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/pinshot/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/pinshot/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/pinshot/modules/orm/classes/Kohana/ORM.php:603
2013-11-04 12:40:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/Controller/Ajax.php [ 10 ] in file:line
2013-11-04 12:40:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-04 12:41:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/Controller/Ajax.php [ 10 ] in file:line
2013-11-04 12:41:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-04 12:41:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/Controller/Ajax.php [ 10 ] in file:line
2013-11-04 12:41:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-04 12:41:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/Controller/Ajax.php [ 10 ] in file:line
2013-11-04 12:41:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-04 12:41:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/Controller/Ajax.php [ 10 ] in file:line
2013-11-04 12:41:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-04 12:42:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/Controller/Ajax.php [ 10 ] in file:line
2013-11-04 12:42:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line