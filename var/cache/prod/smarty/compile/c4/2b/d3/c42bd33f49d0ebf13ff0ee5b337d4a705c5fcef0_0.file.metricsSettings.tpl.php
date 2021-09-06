<?php
/* Smarty version 3.1.39, created on 2021-08-24 20:03:26
  from 'C:\wamp64\www\prestashop\modules\ps_metrics\views\templates\admin\metricsSettings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6125346e91f0f1_45077195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c42bd33f49d0ebf13ff0ee5b337d4a705c5fcef0' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ps_metrics\\views\\templates\\admin\\metricsSettings.tpl',
      1 => 1629726711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6125346e91f0f1_45077195 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="https://js.chargebee.com/v2/chargebee.js" rel=preload as=script>
<link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathSettingsVendor']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>
<link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathSettingsApp']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>

<div id="settingsApp"></div>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathSettingsVendor']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathSettingsApp']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://js.chargebee.com/v2/chargebee.js"><?php echo '</script'; ?>
>

<style>
  /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
  #content.nobootstrap div.bootstrap.panel {
    display: none;
  }
</style>
<?php }
}
