<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-19 23:26:05
  from 'C:\xampp\htdocs\mavi\templates\vue\cotizador.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60ce60edcfd703_16376720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5352df968fdff997f34141f9cf48a530ed73290' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mavi\\templates\\vue\\cotizador.vue',
      1 => 1624137807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ce60edcfd703_16376720 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id='totalcotizacion'>
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
                     <tr v-if='placaMet!=0'>
                        <th scope="row">Placa Metalica</th>
                        <td>{{placaMet}}</td>
                    </tr>
                    <tr v-if='certfirma!=0'>
                        <th scope="row">Cert. Firma</th>
                        <td>{{certfirma}}</td>
                    </tr>
                    <tr v-if='persjur!=0'>
                        <th scope="row">Recargo Pers. Juridica</th>
                        <td>{{persjur}}</td>
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
        </div>
        <a class='btn btn-primary' href='inscripcioninicial'>Volver</a>
    </div> 
    
</section>  

<?php }
}
