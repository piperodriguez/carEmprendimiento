<?php
/* Smarty version 3.1.39, created on 2023-08-09 21:34:46
  from '/Applications/MAMP/htdocs/ecomerce/admin738bskvcx/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64d44cc609d699_05332008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9df527f68fcfce0b9a2c6c79613445101de6cd06' => 
    array (
      0 => '/Applications/MAMP/htdocs/ecomerce/admin738bskvcx/themes/default/template/content.tpl',
      1 => 1691632550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d44cc609d699_05332008 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
