<?php
/* Smarty version 3.1.39, created on 2021-07-03 19:21:43
  from '/Library/WebServer/Documents/210702charge/templates/postupd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e03a37da3aa8_31486301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a8219dce4b090c7d4d2a0ddf0be662a10ed3e94' => 
    array (
      0 => '/Library/WebServer/Documents/210702charge/templates/postupd.tpl',
      1 => 1625307680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e03a37da3aa8_31486301 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144542308360e03a37d9c1c0_39381142', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_144542308360e03a37d9c1c0_39381142 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_144542308360e03a37d9c1c0_39381142',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<br>
<form action="/210702charge/postupdexe" method="post">
  <input type="hidden" name="postid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">

  <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
">
  <input type="text" name="cnt" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['cnt'];?>
">
  <input type="text" name="ttl2" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['ttl2'];?>
">
  <input type="text" name="cnt" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['cnt'];?>
">
  <textarea name="text"><?php echo $_smarty_tpl->tpl_vars['row']->value['text'];?>
</textarea>
  <input type="submit" value="send">
  <a href="/210702charge/postdel/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">delete</a>
</form>

<?php
}
}
/* {/block "body"} */
}
