<?php
//配置文件
class config
{
	private $config;
	
	public function __construct($re_config = array())
	{
		$config = $this->set_config();
		$this->config = $this->reset_config($config,$re_config);
	}
	
	public function get_config()
	{
		return $this->config;
	}
	
	private function set_config()
	{
		$config = array();
		$config['S_WEBSITE_ID'] = 'igwplotloqmcnhxtwdvvayvnlpfxfjnd';
		$config['S_PROJECT'] = 'index';
		$config['S_TPL_PATH'] = 'templates/default/';
		$config['S_LANG'] = 'zh-cn';
		$config['S_URL_PREFIX'] = '?/';
		$config['S_URL_SUFFIX'] = 'index.html';
		$config['S_URL_REWRITE'] = 0;
		$config['S_HALF_STATIC'] = 0;
		$config['S_SHAM_STATIC'] = 0;
		$config['S_PURE_STATIC'] = 0;
		$config['S_FLASH'] = 0;
		$config['S_MULTILINGUAL'] = 0;
			
		$config['S_ROOT'] = get_root('../');
		$config['S_SESSION_ID'] = session_id();
		$config['S_FRONT_URL'] = 'http://' . ($_SERVER['SERVER_PORT'] == '80'?$_SERVER['SERVER_NAME']:$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT']) . $config['S_ROOT']; 
		$config['S_SERVER_URL'] = 'http://server.sinsiu.net/';
		
		return $config;
	}
	
	private function reset_config($config,$re_config = array())
	{
		foreach($re_config as $key => $value)
		{
			$config[$key] = $value;
		}
		foreach($config as $key => $value)
		{
			define($key,$value);
		}
		return $config;
	}
}
//新秀
?>