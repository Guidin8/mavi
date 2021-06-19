<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-19 23:54:43
  from 'C:\xampp\htdocs\mavi\templates\transferencia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60ce67a3cf5fc8_63837387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b39dd88ce5c3b9fc8e7dbb2bffd374e17c20849e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mavi\\templates\\transferencia.tpl',
      1 => 1624139398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:vue/cotizadortransf.vue' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60ce67a3cf5fc8_63837387 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container" id='templatetransferencia'>
    <div class="alert alert-success" role="alert">
        

        <h4 class="alert-heading">Estimador de Costo Transferencia</h4>
        <hr>
        <form>
            <div class="row">
                <div class="col-5">
                    <label for="formGroupExampleInput">Monto de la Factura</label>
                                        <input class="form-control" type="number" placeholder="Monto de factura" id='montofact' required>            
                    <p>Ingrese la fecha de la Inscripcion inicial</p>
                    <input type="date" class='form-control date d-flex ' id="fecha" name="fecha" step="1" min="1989-01-01" max="2020-12-31" >
                </div>
                <div class="form-group col-5">
                    <label for="inputState">Origen</label>
                                        <select id="nacimp" class="form-control">
                        <option selected>Nacional</option>
                        <option>Importada</option>
                    </select>
                </div>
                     
            </div>
            <hr>
            <div class='row'>
                <div class='col-3'>
                                        <fieldset>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="factpesos" value="divisa" checked>
                            <label class="form-check-label" for="divisa">
                                Factura en Pesos
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="factdolares" value="divisa">
                            <label class="form-check-label" for="divisa">
                                Factura en Dolares
                            </label>             
                        </div>
                    </fieldset>
                </div>
                                <div class="col-5 ml-5" id='facturaendolares'>
                    <label for="formGroupExampleInput">Monto del dolar del dia habil anterior al cargo</label>
                    <input class="form-control" type="number" placeholder="Monto del dolar"  id='divisafactura' required>            
                </div> 
            </div>    
            <hr>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="persjur" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Persona Jurídica</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="certfirma" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">Cert. de Firma</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="prenda" value="option3">
                <label class="form-check-label" for="inlineCheckbox3">Prenda</label>
            </div>
            <div id="prendasi" type="hidden">
                <div class="col-5 mt-3">
                                    <label for="formGroupExampleInput">Monto de la Prenda</label>
                    <input class="form-control" type="number" placeholder="Monto de la Prenda" id='montoprenda' required>            
                </div> 
                
                <div class="form-group col-5">
                                    <label for="inputState">Divisa</label>
                    <select id="divisaprenda" class="form-control">
                        <option selected>Pesos</option>
                        <option>Dolares</option>
                    </select>
                </div>            
                                <div class="col-5 ml-0" id='prendadolaress'>
                    <label for="formGroupExampleInput" id='textcotdolarprenda'>Monto del dolar del dia habil anterior al cargo</label>
                    <input class="form-control" type="number" placeholder="Monto del dolar" id= 'cotdolarenprenda' required>            
                </div> 
                <div class="form-check ml-3 mt-3">
                    <input class="form-check-input" type="checkbox" id="prendacondicionada" value="option3">
                    <label class="form-check-label" for="inlineCheckbox3">Prenda Condicionada</label>
                </div>
            </div>
            <hr>
            <div classs="row">
                <div class="col-3">
                                            <label for="inputState">Mora Certificacion de Firma</label>
                        <select id="moraCertFirma" class="form-control">
                            <option selected>0</option>
                            <option>1</option>
                            <option>2</option>
                        </select>
                </div> 
                <div class="form-group col-3">
                                            <label for="inputState">Rehabilitacion para circular</label>
                        <select id="rehabilitacion" class="form-control">
                            <option selected>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                </div>
            </div>    
            <hr>
            <button type='submit' class="btn btn-primary" id='calcular'>Calcular</button>
        </form>

    </div>
</div>
<div class='container'>
    <?php $_smarty_tpl->_subTemplateRender('file:vue/cotizadortransf.vue', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
  <?php echo '<script'; ?>
 type="text/javascript" src='js/transf.js'><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
