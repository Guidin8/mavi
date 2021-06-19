<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-19 22:21:19
  from 'C:\xampp\htdocs\mavi\templates\vue\prendario.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60ce51bf53e490_50934173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5647fa0a3f2a9622dbda19efbba8b2e02c24290d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mavi\\templates\\vue\\prendario.vue',
      1 => 1608768422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ce51bf53e490_50934173 (Smarty_Internal_Template $_smarty_tpl) {
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
