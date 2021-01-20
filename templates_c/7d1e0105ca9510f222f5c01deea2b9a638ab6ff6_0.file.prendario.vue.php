<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-24 01:07:05
  from 'C:\xampp\htdocs\MAVI\templates\vue\prendario.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fe3dba943ed50_41565637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d1e0105ca9510f222f5c01deea2b9a638ab6ff6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MAVI\\templates\\vue\\prendario.vue',
      1 => 1608768422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe3dba943ed50_41565637 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id='totalcotizacionprendario'>
    <div v-show="visible==true" > 
        <h5 class="bg-ligth text-green py-2 text-center m-3" v-bind:id='arancel'> Estimador de Costosde Prenda de un  Bien Mueble NO Registrable</h5>  
        
        <div id='imprimirdetalle'>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Monto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Arancel</th>
                        <td>{{arancel}}</td>
                    </tr>                    
                    <tr v-if='certfirma!=0'>
                        <th scope="row">Cert. Firma</th>
                        <td>{{certfirma}}</td>
                    </tr>        
                    
                    <tr>
                        <th scope="row">Total</th>
                        <td>{{total}}</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        <a class='btn btn-primary' href='bienesmueblesnoregistrables'>Volver</a>
    </div> 
    
</section>  

<?php }
}
