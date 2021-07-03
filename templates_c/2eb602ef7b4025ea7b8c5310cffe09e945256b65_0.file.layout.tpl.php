<?php
/* Smarty version 3.1.39, created on 2021-07-03 07:00:29
  from '/Library/WebServer/Documents/210702charge/templates/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e00b0d2dd402_50230701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2eb602ef7b4025ea7b8c5310cffe09e945256b65' => 
    array (
      0 => '/Library/WebServer/Documents/210702charge/templates/layout.tpl',
      1 => 1625295625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e00b0d2dd402_50230701 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body>

<div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133265967460e00b0d2db8a9_08608393', "body");
?>

</div>

</body>
</html>
<?php }
/* {block "body"} */
class Block_133265967460e00b0d2db8a9_08608393 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_133265967460e00b0d2db8a9_08608393',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default body<?php
}
}
/* {/block "body"} */
}
