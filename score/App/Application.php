<?php

namespace Swoolefy\App;

use Swoolefy\Core\App;

defined('SW_DEBUG') or define('SW_DEBUG', true);
defined('SW_ENV') or define('SW_ENV', 'dev');

class Application implements \Swoolefy\Core\AppInterface{
	// 初始化配置
	public static function init() {
		// 完成App应用层的命名空间的自动注册
		include(__DIR__.'/autoloader.php');
		
		require(__DIR__.'/../Core/Swfy.php');

		require(__DIR__."/Config/defines.php");

		// 加载App应用层配置
		$config = require(__DIR__."/Config/config.php");
		return $config;
	}

	// 获取应用实例，完成各种配置以及初始化，不涉及具体业务
	public static function getInstance(array $config=[]) {
		return new App($config);
	}
}
