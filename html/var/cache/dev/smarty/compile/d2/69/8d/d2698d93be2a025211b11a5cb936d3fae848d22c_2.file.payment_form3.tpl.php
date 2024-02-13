<?php
/* Smarty version 4.3.4, created on 2024-02-13 15:31:47
  from '/var/www/html/modules/custompayment/views/templates/front/payment_form3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb28f3609af5_85792582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2698d93be2a025211b11a5cb936d3fae848d22c' => 
    array (
      0 => '/var/www/html/modules/custompayment/views/templates/front/payment_form3.tpl',
      1 => 1707794514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb28f3609af5_85792582 (Smarty_Internal_Template $_smarty_tpl) {
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
    Account Number: 0645544205 (พร้อมเพย์)
    <br>
    Account Name: นาย ธนาธร สุขสวัสดิ์
    <br>
    หากท่านโอนเงินเรียบร้อยแล้ว กรุณาอัพโหลดสลิปการโอนเงินเพื่อยืนยันการชำระเงิน
</p>


<form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getModuleLink('custompayment','validation',array(),true), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data">
    <input type="file" name="payment_slip" required>
    <button type="submit"name="submitPaymentSlip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload Slip','d'=>'Modules.Custompayment'),$_smarty_tpl ) );?>
</button>
</form><?php }
}
