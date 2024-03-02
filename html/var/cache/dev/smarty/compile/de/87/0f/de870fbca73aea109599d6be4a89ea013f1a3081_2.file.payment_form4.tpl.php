<?php
/* Smarty version 4.3.4, created on 2024-02-28 01:29:14
  from '/var/www/html/modules/custompayment/views/templates/front/payment_form4.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65de29fa770196_69649553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de870fbca73aea109599d6be4a89ea013f1a3081' => 
    array (
      0 => '/var/www/html/modules/custompayment/views/templates/front/payment_form4.tpl',
      1 => 1707869682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65de29fa770196_69649553 (Smarty_Internal_Template $_smarty_tpl) {
?><p>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' ','d'=>'Modules.Custompayment'),$_smarty_tpl ) );?>

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

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"><?php echo '</script'; ?>
>
<div class="barcode-container">
    <svg id="barcode"></svg>
</div>

<?php echo '<script'; ?>
>
    function generateRandomNumber() {
        const randomDigits = Math.floor(Math.random() * 1000000000000); // 13 digits
        return randomDigits.toString().padStart(13, '0');
    }

    const prefix = "885"; // Fixed 3-digit prefix
    const randomNumber = generateRandomNumber();
    const barcodeNumber = prefix + randomNumber;

    JsBarcode("#barcode", barcodeNumber, {
      format: "code128b",
      displayValue: true,
      fontSize: 20
    });
  <?php echo '</script'; ?>
>


<form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getModuleLink('custompayment','validation',array(),true), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data">
    <input type="file" name="payment_slip" required>
    <button style="background-color: #24b9d7;  border: none; color: white;padding: 5px 15px; margin-bottom: 15px; border-radius: 5px;" type="submit"name="submitPaymentSlip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload Slip','d'=>'Modules.Custompayment'),$_smarty_tpl ) );?>
</button>
</form><?php }
}
