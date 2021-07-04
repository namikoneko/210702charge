{extends file="layout.tpl"} 
{block "body"}

<a href="/210702charge/posts">go to posts</a>
{if $title != "all"}
<a href="/210702charge/postsum/{$title}">go to sum</a>
{/if}

<form action="/210702charge/postinsexe" method="post">
  <div class="flex flex-row gap-2">
    <input type="text" name="title">
    <input type="text" name="ttl2">
    <input type="submit" value="send">
  </div>
</form>

<div class="grid grid-cols-10 gap-1">
  {foreach $rows as $row}
<div>
    <a href="/210702charge/postcp/{$row.id}/{$row.title}">copy</a>
</div>
<div>{$row.date}</div>
<div>
    <a href="/210702charge/postfindtitle/{$row.title}">{$row.title}</a>
</div>
<div>{$row.ttl2}</div>
<div>
      
    <a href="/210702charge/postupdstart/{$row.id}/{$row.title}">
      {if $row.start eq ""}---{else}{$row.start}{/if} 
    </a>
</div>
<div>
    <a href="/210702charge/postupdend/{$row.id}/{$row.title}">
      {if $row.end eq ""}---{else}{$row.end}{/if} 
    </a>
</div>
<div>{$row.diff}</div>
<div>{$row.cnt}</div>
<div>
    <a href="/210702charge/postupd/{$row.id}/{$title}">update</a>
</div>
<div class="tags-text">{$row.text}</div>
  {/foreach}
</div>

{if $title == "all"}
  {if 0 < $p}
    <a href="/210702charge/posts?p={$p-1}">privious</a>
  {/if}
  {if $rowcnt > ($p+1)*($num)}
    <a href="/210702charge/posts?p={$p+1}">next</a>
  {/if}
{else}
  {if 0 < $p}
    <a href="/210702charge/postfindtitle/{$title}?p={$p-1}">privious</a>
  {/if}
  {if $rowcnt > ($p+1)*($num)}
    <a href="/210702charge/postfindtitle/{$title}?p={$p+1}">next</a>
  {/if}
{/if}

<div class="">{$sum}</div>

{*
    <a href="/210702charge/postupdstart/{$row.id}/{if $row.title eq ""}all{else}{$row.title}{/if}">
<div>{$row.start}</div>
<div>{$row.title}</div>
    <a href="tag/{$row.id}">{$row.title}</a>
*}
{/block}
