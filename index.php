<?php
ini_set('display_errors', 1);
date_default_timezone_set('Asia/Tokyo');
require_once '../libs/flight/Flight.php';
require_once '../libs/Michelf/MarkdownExtra.inc.php';

require_once './routing.php';
//require_once './functions/tag.php';
require_once './functions/post.php';


//idiormの設定
require_once '../libs/idiorm.php';
ORM::configure('sqlite:./data.db');
ORM::configure('return_result_sets', true); // returns result sets

//smartyの設定
require_once('../smarty-master/libs/Smarty.class.php');
Flight::register('view', 'Smarty', array(), function($smarty){
    $smarty->template_dir = './templates/';
    $smarty->compile_dir = './templates_c/';
    $smarty->config_dir = './config/';
    $smarty->cache_dir = './cache/';
});

function test(){
  echo "tags!";
//  $rows = ORM::for_table('tag')
//    ->table_alias('p1')
//    //->select('p1.*')
//    //->select('p2.name', 'parent_name')
//    //->select('p2.*')
//    ->join('post', array('p1.id', '=', 'p2.tagid'), 'p2')
//    ->find_array();
//    //->find_many();
$sql = <<<EOD
  SELECT tag.id as tid,tag.title as tagtitle,
  post.id as postid,post.title as posttitle,post.text as posttext,post.tagid as posttagid
  FROM tag 
  join post 
  ON tid = posttagid 
EOD;
  //where tagid = $tagid
  $rows = ORM::for_table('post')->raw_query($sql)->find_array();
  echo(Flight::json($rows));
}

Flight::start();
