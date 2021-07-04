<?php
/* Smarty version 3.1.39, created on 2021-07-04 09:14:29
  from '/Library/WebServer/Documents/210702charge/templates/postsum.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e17bf5110928_71319428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5421b079bba5e55b341cd53526afe63f1474c6cf' => 
    array (
      0 => '/Library/WebServer/Documents/210702charge/templates/postsum.tpl',
      1 => 1625390066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e17bf5110928_71319428 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149550363460e17bf5107d89_41452747', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_149550363460e17bf5107d89_41452747 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_149550363460e17bf5107d89_41452747',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<a href="/210702charge/posts">go to posts</a>
<a href="/210702charge/postfindtitle/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">go to <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>

<div class="grid grid-cols-3 gap-1">

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
<div><?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</div>
<div><?php echo $_smarty_tpl->tpl_vars['row']->value['ttl2'];?>
</div>
<div><?php echo $_smarty_tpl->tpl_vars['row']->value['sum'];?>
</div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>


<div class="">合計:<?php echo $_smarty_tpl->tpl_vars['cntsum']->value;?>
</div>

<?php
}
}
/* {/block "body"} */
}
