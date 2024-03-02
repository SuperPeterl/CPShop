<?php
/* Smarty version 4.3.4, created on 2024-02-28 01:17:17
  from '/var/www/html/pdf/invoice.addresses-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65de272d0e70a2_69231914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bc539b71ecea8f26d2f2311fd8c643b24dd93ab' => 
    array (
      0 => '/var/www/html/pdf/invoice.addresses-tab.tpl',
      1 => 1708967018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65de272d0e70a2_69231914 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="addresses-tab" cellspacing="0" cellpadding="0">
	
	<tr>
        <td width="50%"><span class="bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My store','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</span><br/><br/>
            <tr width="20%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'123 Vidhayavibaj Building,','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</tr><br>
            <tr width="20%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mitraparp road Muang District,','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</tr><br>
            <tr width="20%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Khon Kaen 40002','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</tr><br>
			<tr width="20%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tel : 0899999999','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</tr><br>
            <tr width="20%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'VAT No. : 1092300098712','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</tr>
        </td>

        <td width="50%"><span class="bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bill to','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</span><br/><br/>
            <?php echo $_smarty_tpl->tpl_vars['invoice_address']->value;?>

        </td>
    </tr>
</table>
<?php }
}
