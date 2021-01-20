{literal}
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

{/literal}