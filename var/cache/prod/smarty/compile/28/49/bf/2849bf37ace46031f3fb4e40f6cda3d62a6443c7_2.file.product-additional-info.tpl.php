<?php
/* Smarty version 3.1.39, created on 2023-08-14 19:05:28
  from '/Applications/MAMP/htdocs/ecomerce/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64dac148ee9dd8_49776128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2849bf37ace46031f3fb4e40f6cda3d62a6443c7' => 
    array (
      0 => '/Applications/MAMP/htdocs/ecomerce/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1691632548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64dac148ee9dd8_49776128 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}