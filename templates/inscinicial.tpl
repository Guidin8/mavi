{include 'header.tpl'}
<div class="container" id='templatecotizacion'>
    <div class="alert alert-success" role="alert">
        

        <h4 class="alert-heading">Estimador de Costo Inscripcion Inicial</h4>
        <hr>
        <form>
            <div class="row">
                <div class="col-5">
                    <label for="formGroupExampleInput">Monto de la Factura</label>
                    {* MONTO DE LA FACTURA *}
                    <input class="form-control" type="number" placeholder="Monto de factura" id='montofact' required>            
                </div>  
                <div class="form-group col-5">
                    <label for="inputState">Origen</label>
                    {* NACIONAL O IMPORTADO *}
                    <select id="nacimp" class="form-control">
                        <option selected>Nacional</option>
                        <option>Importada</option>
                    </select>
                </div>
                     
            </div>
            <hr>
            <div class='row'>
                <div class='col-3'>
                    {* FACTURA EN PESOS O EN DOLARES *}
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
                {* MONTO DEL DOLAR EN FACTURA *}
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
                {* MONTO DE LA PRENDA *}
                    <label for="formGroupExampleInput">Monto de la Prenda</label>
                    <input class="form-control" type="number" placeholder="Monto de la Prenda" id='montoprenda' required>            
                </div> 
                
                <div class="form-group col-5">
                {* PRENDA EN DOLARES O PESOS *}
                    <label for="inputState">Divisa</label>
                    <select id="divisaprenda" class="form-control">
                        <option selected>Pesos</option>
                        <option>Dolares</option>
                    </select>
                </div>            
                {* MONTO DEL DOLAR *}
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
            <button type='submit' class="btn btn-primary" id='calcular'>Calcular</button>
        </form>

    </div>
</div>
<div class='container'>
    {include file='vue/cotizador.vue'}
</div>
  <script type="text/javascript" src='js/inscini.js'></script>
{include 'footer.tpl'}