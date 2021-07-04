<?php
/* Smarty version 3.1.39, created on 2021-07-04 07:20:40
  from '/Library/WebServer/Documents/210702charge/templates/postupd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e1614817e3f3_27482661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a8219dce4b090c7d4d2a0ddf0be662a10ed3e94' => 
    array (
      0 => '/Library/WebServer/Documents/210702charge/templates/postupd.tpl',
      1 => 1625383237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e1614817e3f3_27482661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72895279360e16148176f65_92542703', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_72895279360e16148176f65_92542703 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_72895279360e16148176f65_92542703',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<a href="/210702charge/postfindtitle/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">go to <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>

<br>
<form action="/210702charge/postupdexe/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" method="post">
  <input type="hidden" name="postid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
  <input type="text" name="date" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
">
  <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
">
  <input type="text" name="ttl2" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['ttl2'];?>
">
  cnt: <input type="text" name="cnt" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['cnt'];?>
">
  <textarea name="text"><?php echo $_smarty_tpl->tpl_vars['row']->value['text'];?>
</textarea>
  <input type="submit" value="send">
  <a href="/210702charge/postdel/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">delete</a>
</form>

<?php
}
}
/* {/block "body"} */
}
