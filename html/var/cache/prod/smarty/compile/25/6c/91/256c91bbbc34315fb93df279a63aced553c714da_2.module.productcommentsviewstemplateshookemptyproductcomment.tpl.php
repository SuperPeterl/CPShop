<?php
/* Smarty version 4.3.4, created on 2024-02-13 00:52:48
  from 'module:productcommentsviewstemplateshookemptyproductcomment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65ca5af0354af8_41260825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '256c91bbbc34315fb93df279a63aced553c714da' => 
    array (
      0 => 'module:productcommentsviewstemplateshookemptyproductcomment.tpl',
      1 => 1693383296,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ca5af0354af8_41260825 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="empty-product-comment" class="product-comment-list-item">
  <?php if ($_smarty_tpl->tpl_vars['post_allowed']->value) {?>
    <button class="btn btn-comment btn-comment-big post-product-comment">
      <i class="material-icons edit" data-icon="edit"></i>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Be the first to write your review','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

    </button>
  <?php } else { ?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No customer reviews for the moment.','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

  <?php }?>
</div>
<?php }
}
