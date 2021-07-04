<?php
 
function postsum($title){
  if($title == "all"){
    Flight::redirect('/posts/');
  }else{
$sql = <<<EOD
  SELECT date, ttl2, sum(cnt) as sum
  FROM post 
  where title = "$title"
  group by ttl2
  order by date desc
EOD;
  $rows = ORM::for_table('post')->raw_query($sql)->find_array();
//  flight::json($rows);
  //$rows = ORM::for_table('post')->raw_query($sql)->find_many();
  $cntsum = ORM::for_table('post')->where("title",$title)->sum("cnt");

  Flight::view()->assign('title', $title);
  Flight::view()->assign('cntsum', $cntsum);
  Flight::view()->assign('rows', $rows);
  Flight::view()->display('postsum.tpl');

//    $rows = ORM::for_table('post')
//    ->where("title",$title)->group_by('ttl2')
//    ->sum("cnt");
//    //->find_many();
//    echo $title;
    //Flight::redirect('/postsum/' . $title);
  }

}

function postfindtitle($title){
  require_once './functions/pagenum.php';
  $rowcnt = ORM::for_table('post')->where("title",$title)->count();
  $p = Flight::request()->query->p;
  if(!isset($p)){ $p = 0; }
  $page = $p * $num;
$sql = <<<EOD
  SELECT *,
  time(start,"unixepoch","localtime") as start,
  time(end,"unixepoch","localtime") as end,
   (end - start) as diff
  FROM post 
  where title like "$title"
  order by updated desc
  limit $page, $num
EOD;
  $rows = ORM::for_table('post')->raw_query($sql)->find_many();
//  $rows = ORM::for_table('post')->where("title",$title)->find_many();
  Flight::view()->assign('title', $title);
  foreach($rows as $row){
    $row["diff"] = floor($row["diff"] / 60);
  }
  Flight::view()->assign('rows', $rows);
  $sum = ORM::for_table('post')->where("title",$title)->sum("cnt");
  Flight::view()->assign('sum', $sum);
  Flight::view()->assign('p', $p);
  Flight::view()->assign('rowcnt', $rowcnt);
  Flight::view()->assign('num', $num);
  Flight::view()->display('posts.tpl');
}

function postdel($postid,$title){
    $row = ORM::for_table('post')->find_one($postid);
    $row->delete();
  if($title == "all"){
    Flight::redirect('/posts/');
  }else{
    Flight::redirect('/postfindtitle/' . $title);
  }
}

function postcp($postid,$title){
  $row = ORM::for_table('post')->create();
  $rowcp = ORM::for_table('post')->find_one($postid);
  $row->title = $rowcp->title;
  $row->ttl2 = $rowcp->ttl2;
  $row->date = date('Y-m-d');
  $row->updated = time();
  $row->save();
  if($title == "all"){
    Flight::redirect('/posts/');
  }else{
    Flight::redirect('/postfindtitle/' . $title);
  }
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

function postupdexe($title){
//echo $title;
  $postid = Flight::request()->data->postid;
  $rows = ORM::for_table('post')
  ->where("title",$title)
  ->find_result_set()
  ->set('title', Flight::request()->data->title)
//  ->set('ttl2', Flight::request()->data->ttl2)
  ->save();
  $title = Flight::request()->data->title;//title入れ直し
  $row = ORM::for_table('post')->find_one($postid);
  $row->date = Flight::request()->data->date;
  $row->ttl2 = Flight::request()->data->ttl2;
  $row->cnt = Flight::request()->data->cnt;
  $row->text = Flight::request()->data->text;
  $row->save();
  if($title == "all"){
    Flight::redirect('/posts/');
  }else{
    Flight::redirect('/postfindtitle/' . $title);
  }
}

function postupd($postid,$title){
  $row = ORM::for_table('post')->find_one($postid);
  if($title == ""){ $title = "all"; }
  Flight::view()->assign('title', $title);
  Flight::view()->assign('row', $row);
  Flight::view()->display('postupd.tpl');
}

function postupdend($postid,$title){
  $row = ORM::for_table('post')->find_one($postid);
  $row->end = time();
  $row->save();
  if($title == "all"){
    Flight::redirect('/posts/');
  }else{
    Flight::redirect('/postfindtitle/' . $title);
  }
}

function postupdstart($postid,$title){
  $row = ORM::for_table('post')->find_one($postid);
  $row->start = time();
  $row->save();
  if($title == "all"){
    Flight::redirect('/posts/');
  }else{
    Flight::redirect('/postfindtitle/' . $title);
  }
}

function posts(){
  require_once './functions/pagenum.php';
  $rowcnt = ORM::for_table('post')->count();
  $p = Flight::request()->query->p;
  if(!isset($p)){ $p = 0; }
  $page = $p * $num;
$sql = <<<EOD
  SELECT *,
  time(start,"unixepoch","localtime") as start,
  time(end,"unixepoch","localtime") as end,
   (end - start) as diff
  FROM post 
  order by updated desc
  limit $page, $num
EOD;
  //limit 0,5 
//  echo $page;
//  echo $num;
  $rows = ORM::for_table('post')->raw_query($sql)->find_many();
//  $rows = ORM::for_table('post')->raw_query($sql)->find_array();
//  flight::json($rows);

  foreach($rows as $row){
    $row["diff"] = floor($row["diff"] / 60);
  }
  Flight::view()->assign('title', "all");
  Flight::view()->assign('p', $p);
  Flight::view()->assign('rowcnt', $rowcnt);
  Flight::view()->assign('num', $num);
  Flight::view()->assign('rows', $rows);
  Flight::view()->display('posts.tpl');
}
