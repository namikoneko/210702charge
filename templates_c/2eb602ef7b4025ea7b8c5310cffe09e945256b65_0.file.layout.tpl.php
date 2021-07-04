<?php
/* Smarty version 3.1.39, created on 2021-07-04 08:00:00
  from '/Library/WebServer/Documents/210702charge/templates/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e0ebf0b08867_66087642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2eb602ef7b4025ea7b8c5310cffe09e945256b65' => 
    array (
      0 => '/Library/WebServer/Documents/210702charge/templates/layout.tpl',
      1 => 1625353126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e0ebf0b08867_66087642 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype>
<html>
<head>

<!--
<?php echo '<script'; ?>
 src="https://unpkg.com/vue/dist/vue.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"><?php echo '</script'; ?>
>
-->
<link rel="stylesheet" href="/libs/css/tailwind.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kognise/water.css@latest/dist/dark.min.css">
<link rel="stylesheet" href="/210702charge/templates/style.css">
</head>
<body>

<div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58015506460e0ebf0b07f31_10434043', "body");
?>

</div>

</body>
</html>
<?php }
/* {block "body"} */
class Block_58015506460e0ebf0b07f31_10434043 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_58015506460e0ebf0b07f31_10434043',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default body<?php
}
}
/* {/block "body"} */
}
