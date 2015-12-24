<?php


return array(
    'URL_CASE_INSENSITIVE'  =>  true,   // 默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_MODEL'             =>  0,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    'VAR_MODULE'            =>  'module',     // 默认模块获取变量
    'VAR_CONTROLLER'        =>  'controller',    // 默认控制器获取变量
    'VAR_ACTION'            =>  'action',    // 默认操作获取变量
	//'配置项'=>'配置值'
);