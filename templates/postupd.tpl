{extends file="layout.tpl"} 
{block "body"}

<a href="/210702charge/postfindtitle/{$title}">go to {$title}</a>

<br>
<form action="/210702charge/postupdexe/{$title}" method="post">
  <input type="hidden" name="postid" value="{$row.id}">
  <input type="text" name="date" value="{$row.date}">
  <input type="text" name="title" value="{$row.title}">
  <input type="text" name="ttl2" value="{$row.ttl2}">
  cnt: <input type="text" name="cnt" value="{$row.cnt}">
  <textarea name="text">{$row.text}</textarea>
  <input type="submit" value="send">
  <a href="/210702charge/postdel/{$row.id}/{$title}">delete</a>
</form>

{*
  <input type="text" name="title" value="{$title}">
*}
{/block}
