<?php
/* Smarty version 3.1.39, created on 2023-08-09 21:34:11
  from '/Applications/MAMP/htdocs/ecomerce/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64d44ca3205f91_97974360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1b45589d491dce14490dcccab65446af4861ed1' => 
    array (
      0 => '/Applications/MAMP/htdocs/ecomerce/themes/classic/templates/page.tpl',
      1 => 1691632548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d44ca3205f91_97974360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86203207264d44ca32004d7_97451834', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_195105083264d44ca3201258_42635309 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_117605812064d44ca3200ac5_84077350 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195105083264d44ca3201258_42635309', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_132506196264d44ca3203812_49997380 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_205339989064d44ca3204005_36997284 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_179698131264d44ca3203253_35584077 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132506196264d44ca3203812_49997380', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205339989064d44ca3204005_36997284', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_141149670864d44ca32051b9_38755602 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_12445855464d44ca3204c21_22309452 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141149670864d44ca32051b9_38755602', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_86203207264d44ca32004d7_97451834 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_86203207264d44ca32004d7_97451834',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_117605812064d44ca3200ac5_84077350',
  ),
  'page_title' => 
  array (
    0 => 'Block_195105083264d44ca3201258_42635309',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_179698131264d44ca3203253_35584077',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_132506196264d44ca3203812_49997380',
  ),
  'page_content' => 
  array (
    0 => 'Block_205339989064d44ca3204005_36997284',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_12445855464d44ca3204c21_22309452',
  ),
  'page_footer' => 
  array (
    0 => 'Block_141149670864d44ca32051b9_38755602',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117605812064d44ca3200ac5_84077350', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179698131264d44ca3203253_35584077', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12445855464d44ca3204c21_22309452', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
