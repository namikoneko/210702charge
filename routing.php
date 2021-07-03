<?php

//routing

Flight::route('/postdel/@postid', "postdel");//
Flight::route('/postcp/@postid', "postcp");//
Flight::route('/postinsexe', "postinsexe");//
Flight::route('/postupdexe', "postupdexe");//
Flight::route('/postupd/@id', "postupd");//
Flight::route('/postupdend/@id', "postupdend");//
Flight::route('/postupdstart/@id', "postupdstart");//
Flight::route('/posts', "posts");//read
Flight::route('/test', "test");//read

//Flight::route('/tagrm/@tagid/@postid/@tagidcur', "tagrm");//
//Flight::route('/tagaddexe', "tagaddexe");//
//Flight::route('/post/@tagid/@postid', "post");//
//Flight::route('/postupd/@tagid/@postid', "postupd");//
//Flight::route('/tagdel/@tagid', "tagdel");//
//Flight::route('/tagupdexe', "tagupdexe");//
//Flight::route('/tagupd/@tagid', "tagupd");//
//Flight::route('/taginsexe', "taginsexe");//insert
//Flight::route('/tag/@id', "tag");//read
//Flight::route('/tags', "tags");//read
//Flight::route('/postins/@tagid/@date', "postins");//
//Flight::route('/tagname/@id', "tagname");//
//Flight::route('/tag/@id/@y/@m', "tag");//read

