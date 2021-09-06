<?php
/* Smarty version 3.1.39, created on 2021-08-25 15:10:00
  from 'C:\wamp64\www\prestashop\modules\ps_checkout\views\templates\admin\configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61264128d622f9_99968556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0a9341698489018b48cb4bfa3591dc9f68f4482' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ps_checkout\\views\\templates\\admin\\configuration.tpl',
      1 => 1629726685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61264128d622f9_99968556 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="app"></div>

<style>
  /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
  #content.nobootstrap div.bootstrap.panel {
    display: none;
  }
</style>
<?php }
}
