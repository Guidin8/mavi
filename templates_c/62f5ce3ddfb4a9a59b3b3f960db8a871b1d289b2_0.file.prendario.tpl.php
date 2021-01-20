<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-20 22:30:46
  from 'C:\xampp\htdocs\MAVI\templates\prendario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6008a1060abcc3_45692141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62f5ce3ddfb4a9a59b3b3f960db8a871b1d289b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MAVI\\templates\\prendario.tpl',
      1 => 1611178242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:vue/prendario.vue' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6008a1060abcc3_45692141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container" id='templateprendario'>
    <div class="alert alert-success" role="alert">
        

        <h4 class="alert-heading">Estimador de Costo de Prenda de Bienes muebles no Registrables</h4>
        <hr>
        <form>
            <select class="custom-select col-4" id="tipotramite" required>
                <option selected disabled value="">Elija el tramite a cotizar</option>
                <option>Inscripcion de Prenda</option>
                <option>Cancelacion de Prenda</option>
                <option>Liberacion de Bienes</option>
                <option>Resfuerzo de Garantias</option>
                <option>Inscripcion de Oficios Judiciales</option>
                <option>Endoso de Prenda</option>
                <option>Ampliacion de Prenda</option>
            </select>
            <div class="form-check form-check-inline ml-4">
                <input class="form-check-input" type="checkbox" id="certifirma" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Cert. Firma</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="persjuridica" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">Pers. Juridica</label>
            </div>
            
            <div id='tipodetramite' class='mt-3 col-4'>                
                
            
            </div>
            <hr>
            <button type='submit' class="btn btn-primary" id='calcular'>Calcular</button>
        </form>

    </div>
</div>
<div class='container'>
    <?php $_smarty_tpl->_subTemplateRender('file:vue/prendario.vue', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
  <?php echo '<script'; ?>
 type="text/javascript" src='js/prendario.js'><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
