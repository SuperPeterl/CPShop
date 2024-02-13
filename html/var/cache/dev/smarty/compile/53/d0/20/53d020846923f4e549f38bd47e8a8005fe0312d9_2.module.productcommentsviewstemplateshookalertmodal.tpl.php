<?php
/* Smarty version 4.3.4, created on 2024-02-13 18:35:46
  from 'module:productcommentsviewstemplateshookalertmodal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb541286aea4_03674049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53d020846923f4e549f38bd47e8a8005fe0312d9' => 
    array (
      0 => 'module:productcommentsviewstemplateshookalertmodal.tpl',
      1 => 1693383296,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb541286aea4_03674049 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/modules/productcomments/views/templates/hook/alert-modal.tpl -->
<?php $_smarty_tpl->_assignInScope('icon', (($tmp = $_smarty_tpl->tpl_vars['icon']->value ?? null)===null||$tmp==='' ? 'check_circle' ?? null : $tmp));
$_smarty_tpl->_assignInScope('modal_message', (($tmp = $_smarty_tpl->tpl_vars['modal_message']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>

<?php echo '<script'; ?>
 type="text/javascript">
  document.addEventListener("DOMContentLoaded", function() {
    const alertModal = $('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['modal_id']->value, ENT_QUOTES, 'UTF-8');?>
');
    alertModal.on('hidden.bs.modal', function () {
      alertModal.modal('hide');
    });
  });
<?php echo '</script'; ?>
>

<div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['modal_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="modal fade product-comment-modal" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="h2">
          <i class="material-icons <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8');?>
" data-icon="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i>
          <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['modal_title']->value, ENT_QUOTES, 'UTF-8');?>

        </p>
      </div>
      <div class="modal-body">
        <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['modal_id']->value, ENT_QUOTES, 'UTF-8');?>
-message">
          <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['modal_message']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
        <div class="post-comment-buttons">
          <button type="button" class="btn btn-comment btn-comment-huge" data-dismiss="modal">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end /var/www/html/modules/productcomments/views/templates/hook/alert-modal.tpl --><?php }
}
