<?php
/* Smarty version 3.1.39, created on 2021-08-26 05:10:46
  from 'C:\wamp64\www\prestashop\modules\ps_checkout\views\templates\hook\displayProductPriceBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6127063656dd43_37451059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64e8fb34ee7bb51f35b276d64241459ec205f911' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ps_checkout\\views\\templates\\hook\\displayProductPriceBlock.tpl',
      1 => 1629726685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6127063656dd43_37451059 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['totalCartPrice']->value)) && $_smarty_tpl->tpl_vars['payIn4XisProductPageEnabled']->value == true) {?>
  <?php if (!(isset($_smarty_tpl->tpl_vars['content_only']->value)) || $_smarty_tpl->tpl_vars['content_only']->value === 0) {?>
    <div
      data-pp-message
      data-pp-placement="product"
      data-pp-style-layout="text"
      data-pp-style-logo-type="inline"
      data-pp-style-text-color="black"
      data-pp-amount="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['totalCartPrice']->value, ENT_QUOTES, 'UTF-8');?>
"
    ></div>
    <?php echo '<script'; ?>
>
      window.ps_checkoutPayPalSdkInstance
        && window.ps_checkoutPayPalSdkInstance.Messages
        && window.ps_checkoutPayPalSdkInstance.Messages().render('[data-pp-message]');
    <?php echo '</script'; ?>
>
  <?php }
}
}
}
