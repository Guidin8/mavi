'use strict';
document.addEventListener("DOMContentLoaded", initprendario());
const certfirma=465;
const certfirmapers=590;
const persjur = 390;


const cotizacion = new Vue({
    el:'#totalcotizacionprendario',
    data:{
        arancel: 0,
        certfirma:0,
        total:0,
        visible:false,
    },
    methods:{

    },

});
function initprendario(){
    let btncalcular=document.querySelector('#calcular');
    let opcion=document.querySelector('#tipotramite');

   
    opcion.addEventListener('change',function(e){
        switch (opcion.value){
            case 'Inscripcion de Prenda':
                inscripciondeprenda();
                break;
            case 'Cancelacion de Prenda':
                cancelacionprenda();
                break;
            case 'Liberacion de Bienes':
                liberacionbienes();
                break;
            case 'Resfuerzo de Garantias':
                resfuerzogarantias();
                break;
            case 'Inscripcion de Oficios Judiciales':
                oficiojudicial();
                break;
            case 'Endoso de Prenda':
                endosoprenda();
                break;
            case 'Ampliacion de Prenda':
                ampliacionprenda();
                break;
        }
    });
    btncalcular.addEventListener('click', function(e){
        e.preventDefault();        
        calcular(opcion.value);
        calcularotros();
        calculartotal();
    });
   
    
}



function inscripciondeprenda(){
    let result=document.querySelector('#tipodetramite');
    result.innerHTML='';
    result.innerHTML+='<p>Ingrese el monto de la prenda</p>'    
    result.innerHTML+='<input class="form-control" type="number" placeholder="Monto de la Prenda" id="montoPrenda" min="0" required></input>';
    
}
function cancelacionprenda(){
    let result=document.querySelector('#tipodetramite');
    result.innerHTML='';
    result.innerHTML+='<p>Ingrese el monto de la prenda</p>'    
    result.innerHTML+='<input class="form-control" type="number" placeholder="Monto de la Prenda" id="montoPrenda" min="0" required></input>';
    
}
function oficiojudicial(){
    let result=document.querySelector('#tipodetramite');
    result.innerHTML='';
    result.innerHTML+='<p>Ingrese el monto que indica el oficio más intereses y costas</p>'    
    result.innerHTML+='<input class="form-control" type="number" placeholder="Monto que indica el oficio" id="montoPrenda" min="0" required></input>';
    
}
function endosoprenda(){
    let result=document.querySelector('#tipodetramite');
    result.innerHTML='';
    result.innerHTML+='<p>Ingrese el monto de la prenda</p>'    
    result.innerHTML+='<input class="form-control" type="number" placeholder="Monto de la Prenda" id="montoPrenda" min="0" required></input>';
    
}
function ampliacionprenda(){
    let result=document.querySelector('#tipodetramite');
    result.innerHTML='';
    result.innerHTML+='<p>Ingrese el monto por el cual se amplia la prenda</p>'    
    result.innerHTML+='<input class="form-control" type="number" placeholder="Monto por el cual se amplia la prenda" id="montoPrenda" min="0" required></input>';
}
function liberacionbienes(){
    let result=document.querySelector('#tipodetramite');
    result.innerHTML='';
    result.innerHTML+='<p>Ingrese la cantidad de bienes que se liberan (máximo 10)</p>'    
    result.innerHTML+='<input class="form-control" type="number" placeholder="Ingrese la cantidad de bienes que se liberan (máximo 10)" id="montoPrenda" min="0" required></input>';
}
function resfuerzogarantias(){
    let result=document.querySelector('#tipodetramite');
    result.innerHTML='';
    result.innerHTML+='<p>Ingrese la cantidad de bienes se agregan como resfuerzo de garantias (máximo 10)</p>'    
    result.innerHTML+='<input class="form-control" type="number" placeholder="Ingrese la cantidad de bienes se agregan como resfuerzo de garantias (máximo 10) min="0" id="montoPrenda" required></input>';
}


function calcular(opcion){
    let result=document.querySelector('#tipodetramite');

    switch (opcion){
        case 'Inscripcion de Prenda':
            let monto=document.querySelector('#montoPrenda').value;
            if(monto<0){
                result.innerHTML+='<p> El monto no puede ser negativo</p>';
            }
            if (monto>70000000){
                monto=70000000;
            }
            monto=(monto*2) /1000;
            if(monto<1750){
                monto=1750;
            }
            cotizacion.arancel=monto;
            break;
        case 'Cancelacion de Prenda':
            let montoprenda=document.querySelector('#montoPrenda').value;
            if(montoprenda<0){
                result.innerHTML+='<p> El monto no puede ser negativo</p>';
            }
            if (montoprenda>70000000){
                montoprenda=70000000;
            }
            montoprenda=(montoprenda*1) /1000;
            if(montoprenda<840){
                montoprenda=840;
            }
            cotizacion.arancel=montoprenda;
            break;
        case 'Liberacion de Bienes':
            let cantliberacion=document.querySelector('#montoPrenda').value;
            if(cantliberacion<0){
                result.innerHTML+='<p> El numero no puede ser negativo</p>';
            }
            if(cantliberacion>10){
                cantliberacion=10;
            }
            cantliberacion=cantliberacion*440;
            cotizacion.arancel=cantliberacion;
            break;
        case 'Resfuerzo de Garantias':
            let cantresfuerzo=document.querySelector('#montoPrenda').value;
            if(cantresfuerzo<0){
                result.innerHTML+='<p> El numero no puede ser negativo</p>';
            }
            if(cantresfuerzo>10){
                cantresfuerzo=10;
            }
            cantresfuerzo=cantresfuerzo*440;
            cotizacion.arancel=cantresfuerzo;
            break;
        case 'Inscripcion de Oficios Judiciales':
            let montooficio=document.querySelector('#montoPrenda').value;
            if(montooficio<0){
                result.innerHTML+='<p> El monto no puede ser negativo</p>';
            }
            montooficio=(montooficio*2) /1000;
            if(montooficio<1105){
                montooficio=1105;
            }
            cotizacion.arancel=montooficio;
            break;
        case 'Endoso de Prenda':
            let montoendoso=document.querySelector('#montoPrenda').value;
            if(montoendoso<0){
                result.innerHTML+='<p> El monto no puede ser negativo</p>';
            }
            if (montoendoso>70000000){
                montoendoso=70000000;
            }
            montoendoso=(montoendoso*2) /1000;
            if(montoendoso<1500){
                montoendoso=1500;
            }
            cotizacion.arancel=montoendoso;
            break;
        case 'Ampliacion de Prenda':
            let montoampliacion=document.querySelector('#montoPrenda').value;
            if(montoampliacion<0){
                result.innerHTML+='<p> El monto no puede ser negativo</p>';
            }
            if (montoampliacion>70000000){
                montoampliacion=70000000;
            }
            montoampliacion=(montoampliacion*2) /1000;
            if(montoampliacion<1500){
                montoampliacion=1500;
            }
            cotizacion.arancel=montoampliacion;
            break;
    }
}
function calcularotros(){
    let certifirma=document.querySelector('#certifirma');
    let persjur=document.querySelector('#persjuridica');
    if(certifirma.checked){
        cotizacion.certfirma=certfirma;
    }
    if(persjur.checked){
        cotizacion.certfirma=certfirmapers;
    }

    

}
function calculartotal(){
    cotizacion.total=cotizacion.arancel+cotizacion.certfirma;
    console.log(cotizacion.arancel);
    console.log();
    if(cotizacion.arancel>0){
        document.querySelector('#templateprendario').setAttribute('hidden',true);

        cotizacion.visible=true;
    }

}