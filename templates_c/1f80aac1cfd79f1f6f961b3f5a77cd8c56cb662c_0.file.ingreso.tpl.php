<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-19 22:28:30
  from 'C:\xampp\htdocs\mavi\templates\ingreso.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60ce536e995888_74373025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f80aac1cfd79f1f6f961b3f5a77cd8c56cb662c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mavi\\templates\\ingreso.tpl',
      1 => 1624134507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:vue/ingreso.vue' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60ce536e995888_74373025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container" id='templateprendario'>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Ingreso</h4>
        
       

    </div>   


    <?php $_smarty_tpl->_subTemplateRender('file:vue/ingreso.vue', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
  <!--<?php echo '<script'; ?>
 type="text/javascript" src='js/ingreso.js'><?php echo '</script'; ?>
>-->
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
