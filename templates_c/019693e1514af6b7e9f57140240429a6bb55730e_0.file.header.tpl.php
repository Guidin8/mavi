<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-23 22:45:11
  from 'C:\xampp\htdocs\MAVI\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fe3ba6741a4b2_30346900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '019693e1514af6b7e9f57140240429a6bb55730e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MAVI\\templates\\header.tpl',
      1 => 1608759908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
  ),
),false)) {
function content_5fe3ba6741a4b2_30346900 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <img src="img\favicon-32x32.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <a class="navbar-brand disabled mr-2 ml-2">MAVI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link active font-weight-bold " href="#">Inicio <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link font-weight-bold" href="inscripcioninicial">Inscripcion Inicial</a>
            <a class="nav-item nav-link font-weight-bold" href="transferencia">Transferencia</a>
            <a class="nav-item nav-link font-weight-bold" href="bienesmueblesnoregistrables">Registro Prendario</a>
            </div>
        </div>
    </nav>
    <main class='row m-0 overflow-auto'>
          



<?php }
}
