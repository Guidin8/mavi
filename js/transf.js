'use strict';
document.addEventListener("DOMContentLoaded", inittransf());
const titulo=350;
const cedula=560;
const certfirma=540;
const certfirmapers=680;
const persjur = 450;
const condicionamiento = 220;
const minimoTTnacional=10200;
const minimoTTimportado=12200;
const rehabilitacion=580;
const moraRehabi=580;//max 3
const moraCertFirma=580;//maximo 2

const cotizacion = new Vue({
    el:'#totalcotizaciontransferencia',
    data:{
        arancel: 0,
        titulo:350,
        cedula:560,
        certfirma:0,
        persjur:0,
        arancelprenda:0,
        condicionamiento:0,
        rehabParaCirc:0,
        moraCert:0,
        total:0,
        detraccion:0,
        visible:false,
    },
    methods:{

    },

});


function inittransf(){
    let calcular= document.querySelector("#calcular");
    let prenda= document.querySelector('#prenda');
    let tieneprenda= document.querySelector('#prendasi');
    let facpesos= document.querySelector('#factpesos');
    let facdolar= document.querySelector('#factdolares');
    let calcfactdolar= document.querySelector('#facturaendolares');
    let montofac=document.querySelector('#montofact');
    let divisa= document.querySelector('#divisafactura') ;
    let dolarenprenda= document.querySelector('#cotdolarenprenda');
    let prendadolar= document.querySelector('#divisaprenda');
   
    calcfactdolar.setAttribute('hidden',true);
    tieneprenda.setAttribute('hidden',true);
    dolarenprenda.setAttribute('hidden',true);
    document.querySelector('#textcotdolarprenda').setAttribute('hidden',true);

    prenda.addEventListener('change', function(e){
        e.preventDefault();
        if(prenda.checked===false){
            tieneprenda.setAttribute('hidden',true);           
        }else{
            tieneprenda.removeAttribute('hidden');
           
        }
    });
    prendadolar.addEventListener('change',function(e){
        console.log(prendadolar.value);
        if (prendadolar.value=='Dolares'){
           dolarenprenda.removeAttribute('hidden');
           document.querySelector('#textcotdolarprenda').removeAttribute('hidden');

        }else{
            dolarenprenda.setAttribute('hidden',true);
            document.querySelector('#textcotdolarprenda').setAttribute('hidden',true);

        }
    });
    facdolar.addEventListener('click', function(e){
        calcfactdolar.removeAttribute('hidden');

    });
    facpesos.addEventListener('click', function(e){
        calcfactdolar.setAttribute('hidden',true);
        
    });

    calcular.addEventListener('click', function(e){
        e.preventDefault();
        document.querySelector('#templatetransferencia').setAttribute('hidden',true);
        

        calculararancel(facdolar, montofac.value,divisa.value)  
        if (prenda.checked) {
            calculararancelprenda()
        }
        calculararancelVarios();
        calcularTotal();
       /*  let imprime = document.querySelector('#imprimir');
        imprime.addEventListener('click',function(e){
            e.preventDefault() ;
            let ficha = document.querySelector('#imprimirdetalle');
            imprimirdetal(ficha);
        }); */
    });


    
}




function calculararancelprenda(){
    let divisaenprenda=document.querySelector('#divisaprenda');
    let cotdolarenprenda=document.querySelector("#cotdolarenprenda");
    let montoprenda=document.querySelector('#montoprenda');
    let totprenda=0;
    if (divisaenprenda.value=='Dolares'){
        totprenda = montoprenda.value * cotdolarenprenda.value;
    }else{
        totprenda=montoprenda.value;
    }
    if (prenda.checked==true){        
        totprenda=(totprenda * 1.5) / 1000;
        totprenda = parseFloat(totprenda.toFixed(2));
        if(totprenda<500){
            totprenda=500;
        }
        cotizacion.arancelprenda=totprenda;
        if (document.querySelector('#prendacondicionada').checked){
            cotizacion.condicionamiento=condicionamiento;
        }
    }
}
function calculararancel(dolares,monto,divisa){
    let fano = document.querySelector("#fecha");
    let fa = fano.value;
    let fhoy = new Date();
    let today = new Date();
    let past = new Date(fano.value);
    let cantanios=calcDate(fano.value);
    console.log(cantanios);
    let nacional=document.querySelector('#nacimp');
    let arancel=0;

    if(dolares.checked){
        monto=monto*divisa;  
    }
    for (let i = 0; i < calcDate(past); i++) {
        monto = (monto * 90) / 100;

    }
    cotizacion.detraccion=monto;
    if(nacional.value==='Nacional'){
        arancel=monto * 2.5 / 1000;
        if(arancel<minimoTTnacional){
            arancel=minimoTTnacional;
        }
    }else{
        arancel=monto * 5 / 1000;
        if(arancel<minimoTTimportado){
            arancel=minimoTTimportado;
        }
    }
    cotizacion.arancel= parseFloat(arancel.toFixed(2));
    cotizacion.visible=true;

}
function calculararancelVarios(){
    let rehabCirc= document.querySelector('#rehabilitacion');
    let moraCert= document.querySelector('#moraCertFirma');
    if (document.querySelector("#certfirma").checked==true){
        cotizacion.certfirma=certfirma;
    }
    if (document.querySelector("#persjur").checked==true){
        cotizacion.persjur=persjur;
        cotizacion.certfirma=certfirmapers;
    }
       
    if (moraCert.value!='0'){
        cotizacion.moraCert=parseInt(moraCert.value)*moraCertFirma;
    }
    if (rehabCirc.value!=='0'){
        cotizacion.rehabParaCirc=rehabilitacion+(parseInt(rehabCirc.value)*rehabilitacion);

    }

}
function calcularTotal(){
    let total=0;
    total=cotizacion.arancel+cotizacion.titulo+cotizacion.cedula+cotizacion.certfirma+cotizacion.persjur+cotizacion.moraCert+cotizacion.rehabParaCirc+cotizacion.arancelprenda+cotizacion.condicionamiento;
    cotizacion.total=total;
}


function imprimirdetal(ficha) {
    console.log(ficha);
    let ventimp = window.open(' ', 'popimpr');
    ventimp.document.write('<html><head><title></title>');
    ventimp.document.write('<link rel="stylesheet" href="style.css">');
    ventimp.document.write('</head><body >');

    ventimp.document.write('<table>'+ficha.innerHTML+'</table>');
    ventimp.document.write('</body></html>');

    ventimp.document.close();
    ventimp.print();
    ventimp.close();
}
function calcDate(date1) {
    let fechaIni = new Date(date1);
    let fechaActual = new Date()
    let mes = fechaActual.getMonth();
    let dia = fechaActual.getDate();
    let anio = fechaActual.getFullYear();
    let years = 0;
    fechaActual.setDate(dia);
    fechaActual.setMonth(mes);
    fechaActual.setFullYear(anio);
    years = Math.floor(((fechaActual - fechaIni) / (1000 * 60 * 60 * 24) / 365));
    return years;

}