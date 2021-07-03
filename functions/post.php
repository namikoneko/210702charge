<?php
 
function postdel($postid){
    $row = ORM::for_table('post')->find_one($postid);
    $row->delete();
  Flight::redirect('/posts/');
}

function postcp($postid){
  $row = ORM::for_table('post')->create();
  $rowcp = ORM::for_table('post')->find_one($postid);
  $row->title = $rowcp->title;
  $row->save();
  Flight::redirect('/posts');
}

function postinsexe(){
    $row = ORM::for_table('post')->create();
    $row->title = Flight::request()->data->title;
    $row->ttl2 = Flight::request()->data->ttl2;
    $row->date = date('Y-m-d');
    $row->updated = time();
    $row->save();
    Flight::redirect('/posts');
}

function postupdexe(){
  $postid = Flight::request()->data->postid;
  $row = ORM::for_table('post')->find_one($postid);
  $row->title = Flight::request()->data->title;
  $row->ttl2 = Flight::request()->data->ttl2;
  $row->cnt = Flight::request()->data->cnt;
  $row->text = Flight::request()->data->text;
  $row->save();
  Flight::redirect('/posts/');
}

function postupd($postid){
  $row = ORM::for_table('post')->find_one($postid);
  Flight::view()->assign('row', $row);
  Flight::view()->display('postupd.tpl');
}

function postupdend($postid){
  $row = ORM::for_table('post')->find_one($postid);
  $row->end = time();
  $row->save();
  Flight::redirect('/posts/');
}

function postupdstart($postid){
  $row = ORM::for_table('post')->find_one($postid);
  $row->start = time();
  $row->save();
  Flight::redirect('/posts/');
}

//  Flight::view()->assign('row', $row);
//    $row = ORM::for_table('post')->create();
//    //$row->title = Flight::request()->data->title;
//    $row->text = Flight::request()->data->text;
//    $row->date = time();
//    $row->save();
//    $row = ORM::for_table('map')->create();//map insert
//    $row->tagid = $tagid;
//    $row->postid = ORM::for_table('post')->max('id');
//    $row->save();
//    Flight::redirect('/tag/' . $tagid);
//}

function posts(){
//  $rows = ORM::for_table('post')->find_array();
$sql = <<<EOD
  SELECT *, (end - start) as diff
  FROM post 
  order by updated desc
EOD;
  //$rows = ORM::for_table('post')->raw_query($sql)->find_array();
  $rows = ORM::for_table('post')->raw_query($sql)->find_many();
  //flight::json($rows);

  //echo($rows[1]['title']);
//  $rows = ORM::for_table('post')->find_many();
//  //$i = 0;
  foreach($rows as $row){
  //echo($row['start']);
//  echo(date("H:i:s",$row['start']));
//  echo("<br>");
//    $rows2[$i]["start"] = date("H:i:s", $row["start"]);
    $row["start"] = date("H:i", $row["start"]);
    if($row["start"] == "09:00"){ $row["start"] = "-"; }
    $row["end"] = date("H:i", $row["end"]);
    if($row["end"] == "09:00"){ $row["end"] = "-"; }
    $row["diff"] = floor($row["diff"] / 60);
//    //$row["diff"] = ((($row["end"]) - ($row["start"])));///60
//    //$row["start"] = time();
    //$i++;
    //echo $i;
  }
//  flight::json($rows);
  Flight::view()->assign('rows', $rows);
  Flight::view()->display('posts.tpl');
// //echo $i;
}
