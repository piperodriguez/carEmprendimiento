<?php
/* Smarty version 3.1.39, created on 2023-08-09 21:34:11
  from '/Applications/MAMP/htdocs/ecomerce/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64d44ca31fca32_18274946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20fa561c3408e1db70052040e4d422afa8d8d938' => 
    array (
      0 => '/Applications/MAMP/htdocs/ecomerce/themes/classic/templates/index.tpl',
      1 => 1691632548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d44ca31fca32_18274946 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16329137464d44ca31fa0c3_03313743', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_69415346764d44ca31fa6f6_04444647 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_22119223664d44ca31fb544_47486433 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_52390264064d44ca31fafa7_59834083 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22119223664d44ca31fb544_47486433', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16329137464d44ca31fa0c3_03313743 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_16329137464d44ca31fa0c3_03313743',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_69415346764d44ca31fa6f6_04444647',
  ),
  'page_content' => 
  array (
    0 => 'Block_52390264064d44ca31fafa7_59834083',
  ),
  'hook_home' => 
  array (
    0 => 'Block_22119223664d44ca31fb544_47486433',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69415346764d44ca31fa6f6_04444647', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52390264064d44ca31fafa7_59834083', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
