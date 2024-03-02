<?php
/* Smarty version 4.3.4, created on 2024-02-28 01:25:04
  from '/var/www/html/modules/custompayment/views/templates/front/payment_return.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65de2900f39271_67384545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2ceaa305f79bb97bb2e79b979b96dd1134c2fa8' => 
    array (
      0 => '/var/www/html/modules/custompayment/views/templates/front/payment_return.tpl',
      1 => 1707854166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65de2900f39271_67384545 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116472684265de2900e57655_09103350', 'page_content');
?>

<?php }
/* {block 'page_content'} */
class Block_116472684265de2900e57655_09103350 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_116472684265de2900e57655_09103350',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="alert alert-success" role="alert">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Successful!','d'=>'Modules.Custompayment'),$_smarty_tpl ) );?>

    </div>
    <div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thank you for your order.','d'=>'Modules.Custompayment'),$_smarty_tpl ) );?>

    </div>
<?php
}
}
/* {/block 'page_content'} */
}
