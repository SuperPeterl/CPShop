<?php
/* Smarty version 4.3.4, created on 2024-02-13 15:31:47
  from '/var/www/html/modules/custompayment/views/templates/front/payment_form1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb28f3602ff1_68435827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95008b58c23be99c94800d908debf818336015c3' => 
    array (
      0 => '/var/www/html/modules/custompayment/views/templates/front/payment_form1.tpl',
      1 => 1707794520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb28f3602ff1_68435827 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['errors']->value)) && $_smarty_tpl->tpl_vars['errors']->value) {?>
    <div class="alert alert-danger">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                <li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
<?php }?>

<p>
    Store Account Number: 06455442xxxxx (Kasikorn Bank)
    <br>
    Store Account Name: นาย สมชาย ใจดี
    <br>
    Store Account Type: Savings
    <br>
    Store Account Branch: สาขา สุราษฎร์ธานี
    <br>
    เมื่อโอนเงินเรียบร้อยแล้ว กรุณาอัพโหลดสลิปการโอนเงิน
</p>



<form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getModuleLink('custompayment','validation',array(),true), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data">
    <input type="file" name="payment_slip" required>
    <button type="submit"name="submitPaymentSlip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload Slip','d'=>'Modules.Custompayment'),$_smarty_tpl ) );?>
</button>
</form><?php }
}
