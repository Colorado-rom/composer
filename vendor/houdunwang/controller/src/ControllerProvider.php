<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/
namespace houdunwang\controller;

use houdunwang\framework\build\Provider;

/**
 * Class DbProvider
 * @package hdphp\db
 */
class ControllerProvider extends Provider {
	//延迟加载
	public $defer = true;

	public function boot() {

	}

	public function register() {
		$this->app->single( 'Controller', function () {
			return new Controller();
		} );
	}
}