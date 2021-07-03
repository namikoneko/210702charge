<?php
use Michelf\MarkdownExtra;

function tags(){
  $rows = ORM::for_table('tag')->find_array();
  Flight::view()->assign('rows', $rows);
  Flight::view()->display('tags.tpl');
//  flight::json($rows);
}
