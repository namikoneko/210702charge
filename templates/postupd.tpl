{extends file="layout.tpl"} 
{block "body"}

<br>
<form action="/210702charge/postupdexe" method="post">
  <input type="hidden" name="postid" value="{$row.id}">

  <input type="text" name="title" value="{$row.title}">
  <input type="text" name="cnt" value="{$row.cnt}">
  <input type="text" name="ttl2" value="{$row.ttl2}">
  <input type="text" name="cnt" value="{$row.cnt}">
  <textarea name="text">{$row.text}</textarea>
  <input type="submit" value="send">
  <a href="/210702charge/postdel/{$row.id}">delete</a>
</form>

{*
  <input type="text" name="title" value="{$title}">
*}
{/block}
