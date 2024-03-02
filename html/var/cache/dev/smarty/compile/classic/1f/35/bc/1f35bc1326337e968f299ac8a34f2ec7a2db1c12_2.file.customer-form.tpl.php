<?php
/* Smarty version 4.3.4, created on 2024-02-28 01:28:56
  from '/var/www/html/themes/classic/templates/customer/_partials/customer-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65de29e8301e10_38700759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f35bc1326337e968f299ac8a34f2ec7a2db1c12' => 
    array (
      0 => '/var/www/html/themes/classic/templates/customer/_partials/customer-form.tpl',
      1 => 1709057613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_65de29e8301e10_38700759 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12263051465de29e8263aa9_18642343', 'customer_form');
?>


<?php echo '<script'; ?>
>
  document.addEventListener("DOMContentLoaded", function() {
  
    var checkbox = document.getElementById("needinvoice");
    var form = document.getElementById("xform");
    var checkbox1 = document.querySelector('input[name="psgdpr"]');
    var checkbox2 = document.querySelector('input[name="customer_privacy"]');
    var f1 = document.querySelector('input[name="firstname"]');
    var l1 = document.querySelector('input[name="lastname"]');
    var e1 = document.querySelector('input[name="email"]');

    // Hide the form initially
    form.style.display = "none";
    checkbox1.checked = true;
    checkbox2.checked = true;
    f1.value = "quest";
    l1.value = "quest";
    e1.value = "quest@gmail.com";

    // Add event listener to the checkbox
    checkbox.addEventListener("change", function() {
        if (checkbox.checked) {
            // If checkbox is checked, show the form
            form.style.display = "block";
            checkbox1.checked = false;
            checkbox2.checked = false;
            f1.value = "";
            l1.value = "";
            e1.value = "";
        } else {
            // If checkbox is unchecked, hide the form
            form.style.display = "none";
            checkbox1.checked = true;
            checkbox2.checked = true;
            f1.value = "quest";
            l1.value = "quest";
            e1.value = "quest@gmail.com";
        }
    });
});
<?php echo '</script'; ?>
><?php }
/* {block 'customer_form_errors'} */
class Block_145297663765de29e82640a4_80510485 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
  <?php
}
}
/* {/block 'customer_form_errors'} */
/* {block 'customer_form_actionurl'} */
class Block_118018810065de29e8265298_66879264 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'customer_form_actionurl'} */
/* {block 'needinvoice'} */
class Block_81183446665de29e8265d25_68408537 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="form-group row">
          <div class="col-md-9 col-md-offset-3">
            <input name = "needinvoice" id="needinvoice" type = "checkbox" value = "1" >
            <label for="needinvoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'need invoice','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</label>
          </div>
        </div>
    <?php
}
}
/* {/block 'needinvoice'} */
/* {block "form_field"} */
class Block_60969932765de29e82e5ed2_12425723 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] === "password") {?>
            <div class="field-password-policy">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

            </div>
          <?php } else { ?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

          <?php }?>
        <?php
}
}
/* {/block "form_field"} */
/* {block "form_fields"} */
class Block_51119396865de29e8266ac5_88167590 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
      <?php if ($_smarty_tpl->tpl_vars['field']->value['name'] == "id_gender") {
continue 1;
}?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60969932765de29e82e5ed2_12425723', "form_field", $this->tplIndex);
?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php echo $_smarty_tpl->tpl_vars['hook_create_account_form']->value;?>

    <?php
}
}
/* {/block "form_fields"} */
/* {block "form_buttons"} */
class Block_97116467865de29e8300a74_91417134 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <button class="btn btn-primary form-control-submit float-xs-right" data-link-action="save-customer" type="submit">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </button>
      <?php
}
}
/* {/block "form_buttons"} */
/* {block 'customer_form_footer'} */
class Block_147208850465de29e83004b0_44077933 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer class="form-footer clearfix">
      <input type="hidden" name="submitCreate" value="1">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97116467865de29e8300a74_91417134', "form_buttons", $this->tplIndex);
?>

    </footer>
  <?php
}
}
/* {/block 'customer_form_footer'} */
/* {block 'customer_form'} */
class Block_12263051465de29e8263aa9_18642343 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customer_form' => 
  array (
    0 => 'Block_12263051465de29e8263aa9_18642343',
  ),
  'customer_form_errors' => 
  array (
    0 => 'Block_145297663765de29e82640a4_80510485',
  ),
  'customer_form_actionurl' => 
  array (
    0 => 'Block_118018810065de29e8265298_66879264',
  ),
  'needinvoice' => 
  array (
    0 => 'Block_81183446665de29e8265d25_68408537',
  ),
  'form_fields' => 
  array (
    0 => 'Block_51119396865de29e8266ac5_88167590',
  ),
  'form_field' => 
  array (
    0 => 'Block_60969932765de29e82e5ed2_12425723',
  ),
  'customer_form_footer' => 
  array (
    0 => 'Block_147208850465de29e83004b0_44077933',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_97116467865de29e8300a74_91417134',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145297663765de29e82640a4_80510485', 'customer_form_errors', $this->tplIndex);
?>




<form action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118018810065de29e8265298_66879264', 'customer_form_actionurl', $this->tplIndex);
?>
" id="customer-form" class="js-customer-form" method="post">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81183446665de29e8265d25_68408537', 'needinvoice', $this->tplIndex);
?>


  

  <div id = "xform">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51119396865de29e8266ac5_88167590', "form_fields", $this->tplIndex);
?>

  </div>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147208850465de29e83004b0_44077933', 'customer_form_footer', $this->tplIndex);
?>


</form>
<?php
}
}
/* {/block 'customer_form'} */
}
