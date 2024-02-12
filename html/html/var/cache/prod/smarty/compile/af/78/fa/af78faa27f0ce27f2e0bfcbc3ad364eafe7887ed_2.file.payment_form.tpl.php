<?php
/* Smarty version 4.3.4, created on 2024-02-12 03:25:57
  from '/var/www/html/modules/custompayment/views/templates/front/payment_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65c92d55e49ee1_62114819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af78faa27f0ce27f2e0bfcbc3ad364eafe7887ed' => 
    array (
      0 => '/var/www/html/modules/custompayment/views/templates/front/payment_form.tpl',
      1 => 1707704194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c92d55e49ee1_62114819 (Smarty_Internal_Template $_smarty_tpl) {
?><p>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'V101:','d'=>'Modules.Custompayment'),$_smarty_tpl ) );?>

</p>

<p>
    Module Directory: <?php echo htmlspecialchars((string) _PS_MODULE_DIR_, ENT_QUOTES, 'UTF-8');?>
custompayment/
</p>

<p>
    Your Account Number: 0645544205 (พร้อมเพย์)
</p>
<p>
    <img src="https://www.i-pic.info/i/LsBi651476.png" alt="QR Code" style="width: 400px; height: auto;">
</p>


<form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getModuleLink('custompayment','validation',array(),true), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data">
    <input type="file" name="payment_slip" required>
    <button type="submit"name="submitPaymentSlip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload Slip','d'=>'Modules.Custompayment'),$_smarty_tpl ) );?>
</button>
</form><?php }
}
