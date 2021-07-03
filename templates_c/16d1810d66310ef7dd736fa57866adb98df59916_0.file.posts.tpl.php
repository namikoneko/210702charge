<?php
/* Smarty version 3.1.39, created on 2021-07-03 19:06:53
  from '/Library/WebServer/Documents/210702charge/templates/posts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e036bda4a006_88428568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16d1810d66310ef7dd736fa57866adb98df59916' => 
    array (
      0 => '/Library/WebServer/Documents/210702charge/templates/posts.tpl',
      1 => 1625306811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e036bda4a006_88428568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132514874560e036bda3d2b2_30899558', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_132514874560e036bda3d2b2_30899558 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_132514874560e036bda3d2b2_30899558',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="/210702charge/postinsexe" method="post">
  <div class="flex flex-row gap-2">
    <input type="text" name="title">
    <input type="text" name="ttl2">
    <input type="submit" value="send">
  </div>
</form>

<div class="grid grid-cols-12 gap-1">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
<div>
    <a href="/210702charge/postcp/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">copy</a>
</div>
<div><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</div>
<div><?php echo $_smarty_tpl->tpl_vars['row']->value['ttl2'];?>
</div>
<div><?php echo $_smarty_tpl->tpl_vars['row']->value['start'];?>
</div>
<div>
    <a href="/210702charge/postupdstart/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">start</a>
</div>
<div><?php echo $_smarty_tpl->tpl_vars['row']->value['end'];?>
</div>
<div>
    <a href="/210702charge/postupdend/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">end</a>
</div>
<div><?php echo $_smarty_tpl->tpl_vars['row']->value['diff'];?>
</div>
<div><?php echo $_smarty_tpl->tpl_vars['row']->value['cnt'];?>
</div>
<div>
    <a href="/210702charge/postupd/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">update</a>
</div>
<div>
</div>
<div><?php echo $_smarty_tpl->tpl_vars['row']->value['text'];?>
</div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php
}
}
/* {/block "body"} */
}
