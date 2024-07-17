<?php 

$routes = [
 
     '/' => [
       'controller' => 'BlogController@index'
     ],
     '/blog' => [
       'controller' => 'BlogController@blog'
     ],
     '/equipe' => [
       'controller' => 'BlogController@equipe'
     ],
     '/blogdetail' => [
       'controller' => 'BlogController@detail'
     ],
     'blogdetail2' => [
       'controller' => 'BlogController@detail2'
     ]
];
