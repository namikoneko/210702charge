<?php
/* Smarty version 3.1.39, created on 2021-07-04 09:01:12
  from '/Library/WebServer/Documents/210702charge/templates/posts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e178d85b48a8_97318296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16d1810d66310ef7dd736fa57866adb98df59916' => 
    array (
      0 => '/Library/WebServer/Documents/210702charge/templates/posts.tpl',
      1 => 1625389267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e178d85b48a8_97318296 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94211529460e178d85966f4_39263066', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_94211529460e178d85966f4_39263066 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_94211529460e178d85966f4_39263066',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<a href="/210702charge/posts">go to posts</a>
<?php if ($_smarty_tpl->tpl_vars['title']->value != "all") {?>
<a href="/210702charge/postsum/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">go to sum</a>
<?php }?>

<form action="/210702charge/postinsexe" method="post">
  <div class="flex flex-row gap-2">
    <input type="text" name="title">
    <input type="text" name="ttl2">
    <input type="submit" value="send">
  </div>
</form>

<div class="grid grid-cols-10 gap-1">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
<div>
    <a href="/210702charge/postcp/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
">copy</a>
</div>
<div><?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</div>
<div>
    <a href="/210702charge/postfindtitle/<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a>
</div>
<div><?php echo $_smarty_tpl->tpl_vars['row']->value['ttl2'];?>
</div>
<div>
      
    <a href="/210702charge/postupdstart/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
">
      <?php if ($_smarty_tpl->tpl_vars['row']->value['start'] == '') {?>---<?php } else {
echo $_smarty_tpl->tpl_vars['row']->value['start'];
}?> 
    </a>
</div>
<div>
    <a href="/210702charge/postupdend/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
">
      <?php if ($_smarty_tpl->tpl_vars['row']->value['end'] == '') {?>---<?php } else {
echo $_smarty_tpl->tpl_vars['row']->value['end'];
}?> 
    </a>
</div>
<div><?php echo $_smarty_tpl->tpl_vars['row']->value['diff'];?>
</div>
<div><?php echo $_smarty_tpl->tpl_vars['row']->value['cnt'];?>
</div>
<div>
    <a href="/210702charge/postupd/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">update</a>
</div>
<div class="tags-text"><?php echo $_smarty_tpl->tpl_vars['row']->value['text'];?>
</div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php if ($_smarty_tpl->tpl_vars['title']->value == "all") {?>
  <?php if (0 < $_smarty_tpl->tpl_vars['p']->value) {?>
    <a href="/210702charge/posts?p=<?php echo $_smarty_tpl->tpl_vars['p']->value-1;?>
">privious</a>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['rowcnt']->value > ($_smarty_tpl->tpl_vars['p']->value+1)*($_smarty_tpl->tpl_vars['num']->value)) {?>
    <a href="/210702charge/posts?p=<?php echo $_smarty_tpl->tpl_vars['p']->value+1;?>
">next</a>
  <?php }
} else { ?>
  <?php if (0 < $_smarty_tpl->tpl_vars['p']->value) {?>
    <a href="/210702charge/postfindtitle/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
?p=<?php echo $_smarty_tpl->tpl_vars['p']->value-1;?>
">privious</a>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['rowcnt']->value > ($_smarty_tpl->tpl_vars['p']->value+1)*($_smarty_tpl->tpl_vars['num']->value)) {?>
    <a href="/210702charge/postfindtitle/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
?p=<?php echo $_smarty_tpl->tpl_vars['p']->value+1;?>
">next</a>
  <?php }
}?>

<div class=""><?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
</div>

<?php
}
}
/* {/block "body"} */
}
