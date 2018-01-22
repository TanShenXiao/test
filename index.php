<?php
require_once "./vendor/autoload.php";

$app=new vendor\tsx\Aplication();
$route=require_once(__DIR__."/config/Route.php");
$app->Router=$route;
/**
 * 启动Eloquent构建器
 */
$database = [
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'test',
    'username'  => 'root',
    'password'  => 'root',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
];

use Illuminate\Database\Capsule\Manager as Capsule;//如果你不喜欢这个名称，as DB;就好

$capsule = new Capsule;
// 创建链接
$capsule->addConnection($database);
// 设置全局静态可访问
$capsule->setAsGlobal();
// 启动Eloquent
$capsule->bootEloquent();

$app->run();
?>


