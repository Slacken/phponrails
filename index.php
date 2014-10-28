<?php
  $query = explode('/', isset($_GET['q']) ? trim($_GET['q'],'/') : 'home');
  if(!isset($query[1]))$query[1] = 'index';
  
  define('VIEWS',dirname(__FILE__).'/views/');
  define('ACTION',"{$query[0]}/{$query[1]}");
  
  ob_start();
  include VIEWS.'application.php';
  ob_end_flush();
  
  function yield($filename = ACTION){
    $file = VIEWS.$filename.".php"
    if(file_exists($file))include $file;//这里可以使用模板引擎进行编译
    else echo $file.' not found.';
  }