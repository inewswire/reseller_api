<?php namespace Iella;

class Request {
	
	public $secret;
	public $data;
	public $response;
	public $raw_response;
	public $url;
	
	public function __construct()
	{
		$this->data = new \stdClass();
	}
	
	public function send()
	{
		$http_request = new HTTP_Request();
		$http_request->url = $this->url;
		$http_request->data = array();
		$http_request->data['iella-user-secret'] = $this->secret;
		$http_request->data['iella-in'] = json_encode($this->data);
		$this->raw_response = $http_request->post();
		$this->response = json_decode($this->raw_response->data);
		if (!$this->response) return $this->raw_response;
		return $this->response;
	}
	
}

class Client {
	
	protected $secret;
	protected $base;
	protected $host;
	
	public function set_host($host)
	{
		$this->host = $host;
	}
	
	public function set_base($base)
	{
		$this->base = $base;
	}
	
	public function set_secret($secret)
	{
		$this->secret = $secret;
	}
	
	public function create_request($method)
	{
		$request = new Request();
		$request->secret = $this->secret;
		$request->url = $this->construct_url($method);
		return $request;
	}
	
	protected function construct_url($method)
	{
		$host = $this->host;
		$base = $this->base;
		$url = sprintf('%s/%s/%s', $host, $base, $method);
		$url = preg_replace('#//#', '/', $url);
		$url = sprintf('https://%s', $url);
		return $url;
	}
	
}

// ------------------------------
// ------------------------------
// ------------------------------

class HTTP_Request {
	
	const METHOD_POST = 'POST';
	const METHOD_GET  = 'GET';

	public $url;
	public $data;
	
	protected $headers;
		
	public function __construct($url = null)
	{
		$this->url = $url;
		$this->headers = array();
		$this->data = array();
	}
	
	public function set_header($name, $value)
	{
		$header = "{$name}: {$value}";
		$lower_name = strtolower($name);
		$this->headers[$lower_name] = $header;
	}
	
	public function post()
	{
		return $this->exec(static::METHOD_POST);
	}
	
	public function get()
	{
		return $this->exec(static::METHOD_GET);
	}
	
	protected function exec($method)
	{
		$headers =& $this->headers;
		foreach ($headers as $k => $v)
		{
			$headers[$k] = str_replace("\r", '', $headers[$k]);
			$headers[$k] = str_replace("\n", '', $headers[$k]);
		}
		
		if (is_array($this->data))
		{			
			if ($method === static::METHOD_GET)
			{
				$data = http_build_query($this->data);
				$this->url = "{$this->url}?{$data}";
				$this->data = null;
			}	
			else
			{
				$this->data = http_build_query($this->data);
				$this->set_header('Content-Type', 
					'application/x-www-form-urlencoded');
			}	
		}
		
		if ($len = strlen($this->data))
		{
			if (!isset($headers['content-type']))
				$this->set_header('Content-Type', 'text/plain');
			$this->set_header('Content-Length', $len);
		}
		
		$context_o = array();
		$context_o['http'] = array();
		$context_o['http']['method'] = $method;
		$context_o['http']['header'] = implode("\r\n", $headers);
		$context_o['http']['content'] = $this->data;
		
		$context = stream_context_create($context_o);
		$handle = fopen($this->url, 'b', false, $context);
		if ($handle === false) return;
		
		$res = new HTTP_Response();
		$meta = stream_get_meta_data($handle);
		$res->headers = $meta['wrapper_data'];
		$res->data = stream_get_contents($handle);
		fclose($handle);

		return $res;
	}
	
}

class HTTP_Response {
	
	public $headers;
	public $data;
	
}
