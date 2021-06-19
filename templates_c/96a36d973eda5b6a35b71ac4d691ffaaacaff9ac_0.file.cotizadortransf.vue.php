<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-19 23:54:43
  from 'C:\xampp\htdocs\mavi\templates\vue\cotizadortransf.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60ce67a3dbe488_35784328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96a36d973eda5b6a35b71ac4d691ffaaacaff9ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mavi\\templates\\vue\\cotizadortransf.vue',
      1 => 1624139363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ce67a3dbe488_35784328 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id='totalcotizaciontransferencia'>
    <div v-show="visible==true" > 
        <h5 class="bg-ligth text-green py-2 text-center m-3" v-bind:id='arancel'> Estimador de Costos </h5>  
        
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
                    <tr>
                        <th scope="row">Titulo</th>
                        <td>{{titulo}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Cedula</th>
                        <td>{{cedula}}</td>
                    </tr>
                    <tr v-if='certfirma!=0'>
                        <th scope="row">Cert. Firma</th>
                        <td>{{certfirma}}</td>
                    </tr>
                    <tr v-if='persjur!=0'>
                        <th scope="row">Recargo Pers. Juridica</th>
                        <td>{{persjur}}</td>
                    </tr>
                    <tr v-if='rehabParaCirc!=0'>
                        <th scope="row">Rehab. Para Circular</th>
                        <td>{{rehabParaCirc}}</td>
                    </tr>
                    <tr v-if='moraCert!=0'>
                        <th scope="row">Mora Cert. de Firma</th>
                        <td>{{moraCert}}</td>
                    </tr>
                    <tr v-if='arancelprenda!=0'>
                        <th scope="row">Arancel Prenda</th>
                        <td>{{arancelprenda}}</td>
                    </tr>
                    <tr v-if='condicionamiento!=0'>
                        <th scope="row">Condicionamiento</th>
                        <td>{{condicionamiento}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Total</th>
                        <td>{{total}}</td>
                    </tr>
                    
                </tbody>
            </table>
            <p>Detraccion = {{detraccion}}</p>
        </div>
        <a class='btn btn-primary' href='transferencia'>Volver</a>
    </div> 
    
</section>  

<?php }
}
