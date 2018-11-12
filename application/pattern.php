<?php

class Site
{
    // 属性
    public $siteName;
    // 本类静态实例
    protected static $instance = null;
    // 禁用掉构造器
    private  function __construct($siteName)
    {
        $this->siteName = $siteName;
    }
    // 获取本类唯一实例
    public static function getInstance($siteName='ALan的tp5项目')
    {
        if(!self::$instance instanceof self){
            self::$instance = new self($siteName);
        }
        return self::$instance;
    }
}

// 工厂模式：生成本类单一实例
class Factory
{
    // 创建指定类的实例
    public static function create()
    {
        return Site::getInstance('ALanGOGOGO')
    }
}

// 对象注册树

/* 
    注册:set()
    获取:get()
    注销:_unset()
*/
class Register
{
    // 创建对象池：数组
    protected static $objects = [];
    // 生成对象并上树
    public static function set($alias,$object){
        self::$objects[$alias] = $object;
    }
    // 从树上面取下对象
    public static function get($alias){
        return self::$objecs[$alias];
    }
    // 把树上的对象吃掉
    public static function _unset($alias){
        unset(self::$objecs[$alias]);
    }
}
// 将Site类实例上树，放到对象池
Register::set('hellosite',Factory::create());
// 从树上取一个对象下来
$obj = Register::get('hellosite');
