<?php
/* Smarty version 4.3.4, created on 2024-02-12 03:26:23
  from 'module:custompaymentviewstemplatesfrontpayment_success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65c92d6f467fa2_23058106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c1063c79b0c64a776b741ee9a55c2970a58b7fa' => 
    array (
      0 => 'module:custompaymentviewstemplatesfrontpayment_success.tpl',
      1 => 1707705306,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c92d6f467fa2_23058106 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97927671465c92d6f464e96_61571777', 'page_content');
?>

<?php }
/* {block 'page_content'} */
class Block_97927671465c92d6f464e96_61571777 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_97927671465c92d6f464e96_61571777',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="alert alert-success" role="alert">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Successful!','d'=>'Modules.Custompayment'),$_smarty_tpl ) );?>

    </div>
    <div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thank you for your payment.','d'=>'Modules.Custompayment'),$_smarty_tpl ) );?>

    </div>
    <div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Reference: ','d'=>'Modules.Custompayment'),$_smarty_tpl ) );
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['paymentDetails']->value['order_reference'], ENT_QUOTES, 'UTF-8');?>

    </div>
    <div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amount Paid: ','d'=>'Modules.Custompayment'),$_smarty_tpl ) );
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['paymentDetails']->value['amount_paid'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'USD','d'=>'Modules.Custompayment'),$_smarty_tpl ) );?>

    </div>
    <div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Date: ','d'=>'Modules.Custompayment'),$_smarty_tpl ) );
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['paymentDetails']->value['payment_date'], ENT_QUOTES, 'UTF-8');?>

    </div>
    <div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Uploaded Payment Slip: ','d'=>'Modules.Custompayment'),$_smarty_tpl ) );
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['paymentSlip']->value, ENT_QUOTES, 'UTF-8');?>

    </div>
    <?php
}
}
/* {/block 'page_content'} */
}
