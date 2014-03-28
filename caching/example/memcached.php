<?php 
$host = '';
$port = 11211;	
$session_save_path = "tcp://localhost:11211?persistent=1&weight=2&timeout=2&retry_interval=10,  ,tcp://localhost:11211  ";
ini_set('session.save_handler', 'memcache');
ini_set('session.save_path', $session_save_path);
session_start();

$_SESSION['test'] = 'Hello World';
$_SESSION['test2'] = 'Hello World2';
 
$m = new Memcached();
$m->addServer('localhost', 11211);

foreach($m->getAllKeys() as $key ) {
  printf( '<div>%s</div>', $key );
  var_dump($m->get( $key ) );
}