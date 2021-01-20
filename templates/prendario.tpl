{include 'header.tpl'}
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
    {include file='vue/prendario.vue'}
</div>
  <script type="text/javascript" src='js/prendario.js'></script>
{include 'footer.tpl'}