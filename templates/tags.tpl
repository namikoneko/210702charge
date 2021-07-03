{extends file="layout.tpl"} 
{block "body"}

  {foreach $rows as $row}
    <a href="tag/{$row.id}">{$row.title}</a>
    <br>
  {/foreach}

{/block}
