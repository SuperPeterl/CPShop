<?php
/* Smarty version 4.3.4, created on 2024-02-28 01:29:14
  from '/var/www/html/modules/custompayment/views/templates/front/payment_form1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65de29fa0047c2_36329919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95008b58c23be99c94800d908debf818336015c3' => 
    array (
      0 => '/var/www/html/modules/custompayment/views/templates/front/payment_form1.tpl',
      1 => 1707854166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65de29fa0047c2_36329919 (Smarty_Internal_Template $_smarty_tpl) {
?>

<p style="margin-bottom: 10px;">
    Store Account Number: 06455442xxxxx (Kasikorn Bank)
    <br>
    Store Account Name: นาย สมชาย ใจดี
    <br>
    Store Account Type: Savings
    <br>
    Store Account Branch: สาขา เซ็นทรัลขอนแก่น
    <br>
    เมื่อโอนเงินเรียบร้อยแล้ว กรุณาอัพโหลดสลิปการโอนเงิน
</p>



<form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getModuleLink('custompayment','validation',array(),true), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data">
    <input type="file" name="payment_slip" required>
    <button style="background-color: #24b9d7;  border: none; color: white;padding: 5px 15px; margin-bottom: 15px; border-radius: 5px;" type="submit"name="submitPaymentSlip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload Slip','d'=>'Modules.Custompayment'),$_smarty_tpl ) );?>
</button>
</form>
<?php }
}
