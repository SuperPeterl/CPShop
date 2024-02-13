<?php
/* Smarty version 4.3.4, created on 2024-02-13 15:31:47
  from '/var/www/html/themes/classic/templates/checkout/_partials/address-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb28f347a3f0_80890591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a452bce3c118a0dd54bdb83e8cf33c4b0e7dee6e' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/_partials/address-form.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb28f347a3f0_80890591 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'am here ','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71656117465cb28f34743a7_61275205', 'form_field');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20065333565cb28f34759e3_69497594', "address_form_url");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54209464565cb28f3476c32_52684235', 'form_fields');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50931100065cb28f3477bf5_00461644', 'form_buttons');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/_partials/address-form.tpl');
}
/* {block 'form_field'} */
class Block_71656117465cb28f34743a7_61275205 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field' => 
  array (
    0 => 'Block_71656117465cb28f34743a7_61275205',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['field']->value['name'] == "alias" && $_smarty_tpl->tpl_vars['customer']->value['is_guest']) {?>
      <?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php }
}
}
/* {/block 'form_field'} */
/* {block "address_form_url"} */
class Block_20065333565cb28f34759e3_69497594 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'address_form_url' => 
  array (
    0 => 'Block_20065333565cb28f34759e3_69497594',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form
      method="POST"
      action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['id_address']->value)),$_smarty_tpl ) );?>
"
      data-id-address="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_address']->value, ENT_QUOTES, 'UTF-8');?>
"
      data-refresh-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('ajax'=>1,'action'=>'addressForm')),$_smarty_tpl ) );?>
"
    >
<?php
}
}
/* {/block "address_form_url"} */
/* {block 'form_fields'} */
class Block_54209464565cb28f3476c32_52684235 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_fields' => 
  array (
    0 => 'Block_54209464565cb28f3476c32_52684235',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <input type="hidden" name="saveAddress" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['type']->value === "delivery") {?>
    <div class="form-group row"hidden>
      <div class="col-md-9 col-md-offset-3">
        <input name = "use_same_address" id="use_same_address" type = "checkbox" value = "1" <?php if ($_smarty_tpl->tpl_vars['use_same_address']->value) {?> checked <?php }?>>
        <label for="use_same_address"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use this address for invoice too','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</label>
      </div>
    </div>
  <?php }
}
}
/* {/block 'form_fields'} */
/* {block 'form_buttons'} */
class Block_50931100065cb28f3477bf5_00461644 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_50931100065cb28f3477bf5_00461644',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <?php if (!$_smarty_tpl->tpl_vars['form_has_continue_button']->value) {?>
    <button type="submit" class="btn btn-primary float-xs-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
    <a class="js-cancel-address cancel-address float-xs-right" href="<?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable43 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('cancelAddress'=>$_prefixVariable43)),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
  <?php } else { ?>
    <form>
      <button type="submit" class="continue btn btn-primary float-xs-right" name="confirm-addresses" value="1">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </button>
      <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['customer']->value['addresses']) > 0) {?>
        <a class="js-cancel-address cancel-address float-xs-right" href="<?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable44 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('cancelAddress'=>$_prefixVariable44)),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
      <?php }?>
    </form>
  <?php }
}
}
/* {/block 'form_buttons'} */
}