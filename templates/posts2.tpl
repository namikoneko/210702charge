{extends file="layout.tpl"} 
{block "body"}

<form action="/210702charge/postinsexe2" method="post">
  <div class="flex flex-row gap-2">
    <input type="text" name="title">
    <input type="text" name="ttl2">
    <input type="submit" value="send">
  </div>
</form>

<div class="grid grid-cols-13 gap-1">
  {foreach $rows as $row}
<div>
    <a href="/210702charge/postcp/{$row.id}">copy</a>
</div>
<div>
    <a href="/210702charge/postfindtitle/{$row.title}">{$row.title}</a>
</div>
<div>{$row.ttl2}</div>
<div>{$row.start}</div>
<div>
    <a href="/210702charge/postupdstart2/{$row.id}">start</a>
</div>
<div>{$row.end}</div>
<div>
    <a href="/210702charge/postupdend/{$row.id}">end</a>
</div>
<div>{$row.diff}</div>
<div>{$row.cnt}</div>
<div>
    <a href="/210702charge/postupd/{$row.id}">update</a>
</div>
<div>
</div>
<div class="tags-text">{$row.text}</div>
  {/foreach}
</div>

<div class="">{$sum}</div>

{*
<div>{$row.title}</div>
    <a href="tag/{$row.id}">{$row.title}</a>
*}
{/block}
