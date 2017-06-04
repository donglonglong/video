<?php
//中间件配置
return [
    /*
    |--------------------------------------------------------------------------
    | 全局中间件
    |--------------------------------------------------------------------------
    | 全局中间件系统会自动执行不需要人为调用
    | 会在路由解析前执行
    */
    'global'     => [],
    /*
    |--------------------------------------------------------------------------
    | 系统中间件
    |--------------------------------------------------------------------------
    | 在框架解析过程中不同节点执行的中间件
    | 不需要人为调用系统自动执行
    | 以下中间件排前面的先执行
    */
    'system'     => [],
    /*
    |--------------------------------------------------------------------------
    | 控制器中间件
    |--------------------------------------------------------------------------
    | 在控制器的构造函数中可以设置或取消执行某个中间件
    */
    'controller' => [],

    /*
    |--------------------------------------------------------------------------
    | 应用中间件
    |--------------------------------------------------------------------------
    | 根据业务需要可以在任何位置执行的中间件
    */
    'web'        => [],
];