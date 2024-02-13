<?php
/* Smarty version 4.3.4, created on 2024-02-13 00:53:01
  from '/var/www/html/modules/custompayment/views/templates/front/payment_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65ca5afde38ed6_48416151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af78faa27f0ce27f2e0bfcbc3ad364eafe7887ed' => 
    array (
      0 => '/var/www/html/modules/custompayment/views/templates/front/payment_form.tpl',
      1 => 1707785096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ca5afde38ed6_48416151 (Smarty_Internal_Template $_smarty_tpl) {
?><p>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'V101:','d'=>'Modules.Custompayment'),$_smarty_tpl ) );?>

</p>

<?php if ((isset($_smarty_tpl->tpl_vars['errors']->value)) && $_smarty_tpl->tpl_vars['errors']->value) {?>
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
    Cart ID: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_id']->value, ENT_QUOTES, 'UTF-8');?>

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
