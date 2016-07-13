<?php

namespace Think\Template\Driver;
/**
* Twig模板引擎驱动
*/
class Twig {

/**
* 渲染模板输出
* @access public
* @param string $templateFile 模板文件名
* @param array $parameters 模板变量
* @return void
*/
public function fetch($templateFile, $parameters) {
// vendor(‘Twig.Autoloader’); // 加载自动加载类
require_once 'vendor/autoload.php';
include 'vendor/twig/twig/lib/Twig/Autoloader.php';
\Twig_Autoloader::register();
$loader = new \Twig_Loader_Filesystem(array(THEME_PATH));
$twig = new \Twig_Environment($loader, array(
// ‘cache’ => CACHE_PATH,
// ‘auto_reload’ => true,
));

$templateFile = substr($templateFile,strlen(THEME_PATH));
$result= $twig->render($templateFile, $parameters);
echo "$result";
exit;
}
}

