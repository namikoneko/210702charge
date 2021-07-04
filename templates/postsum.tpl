{extends file="layout.tpl"} 
{block "body"}

<a href="/210702charge/posts">go to posts</a>
<a href="/210702charge/postfindtitle/{$title}">go to {$title}</a>

<div class="grid grid-cols-3 gap-1">

  {foreach $rows as $row}
<div>{$row.date}</div>
<div>{$row.ttl2}</div>
<div>{$row.sum}</div>
  {/foreach}

</div>


<div class="">合計:{$cntsum}</div>

{*
*}
{/block}
