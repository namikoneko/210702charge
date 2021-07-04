<?php
/* Smarty version 3.1.39, created on 2021-07-04 08:49:36
  from '/Library/WebServer/Documents/210702charge/templates/posts2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e0f790a914d6_47665815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7696f1f02e2d32d3a504c85034e49bb7dc520ff' => 
    array (
      0 => '/Library/WebServer/Documents/210702charge/templates/posts2.tpl',
      1 => 1625355384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e0f790a914d6_47665815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33935025860e0f790a7e535_40565018', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_33935025860e0f790a7e535_40565018 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_33935025860e0f790a7e535_40565018',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="/210702charge/postinsexe2" method="post">
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
<div>
    <a href="/210702charge/postfindtitle/<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a>
</div>
<div><?php echo $_smarty_tpl->tpl_vars['row']->value['ttl2'];?>
</div>
<div><?php echo $_smarty_tpl->tpl_vars['row']->value['start'];?>
</div>
<div>
    <a href="/210702charge/postupdstart2/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
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
<div class="tags-text"><?php echo $_smarty_tpl->tpl_vars['row']->value['text'];?>
</div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<div class=""><?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
</div>

<?php
}
}
/* {/block "body"} */
}
