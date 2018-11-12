<?php
namespace app\admin\controller;
// use think\facade\Config;

class User
{
    public function get()
    {
        // return '123';
        // dump(Config::get('app.'));

        // 获取一级配置项 pull()
        // dump(Config::pull('app'));

        // 获取一级配置项下的二级配置项
        // app是默认的一级配置项前缀，可省略
        dump(Config::get('app.app_debug'));
    }
}
