<?php
return array(
	//'配置项'=>'配置值'
    'MODULE_ALLOW_LIST'    =>  array('Home','Admin'),//允许访问的模块
    'DEFAULT_MODULE'       =>  'Home',//系统默认模块
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'weimeijuhui201703db',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'web_',    // 数据库表前缀
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'DB_PARAMS'=>array('PDO::ATTR_CASE'=>'PDO::CASE_NATURAL'),//把数据库字段原样输出
);